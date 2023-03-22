<?php
require realpath(__DIR__ . "/database.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

class EmailSender
{
    public static function sendEmail($templateKey, $templateData)
    {
        $mail = new PHPMailer(true);
        // Set SMTP settings
        $mail->isSMTP();
        $mail->CharSet = 'UTF-8';
        $mail->Host       = 'smtp.gmail.com'; // Set your SMTP server
        $mail->SMTPAuth   = true;            // Enable SMTP authentication
        $mail->Username   = 'your-email@gmail.com'; // SMTP username
        $mail->Password   = 'your-email-password'; // SMTP password
        $mail->SMTPSecure = 'tls';          // Enable TLS encryption
        $mail->Port       = 587;            // TCP port to connect to

        $template = DB::query("SELECT * FROM email_templates WHERE template_key = $templateKey");
        try {
            $mail->isHtml = true;
            $mail->setFrom($template['sender'], 'Shoosh WebShop');
            $mail->addAddress($templateData['to']);
            $mail->Subject = $template['subject'];
            $mail->Body    = self::mailTemplate($template['content'], $templateData);
            $mail->send();
            return true;
        } catch (Exception $e) {
            return false;
        }
    }

    private static function mailTemplate($template, $templateData)
    {
        foreach ($templateData as $key => $value) {
            $template = str_replace("##" . $key . "##", $value, $template);
        }
        return $template;
    }
}
