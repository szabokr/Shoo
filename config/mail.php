<?php
class EmailSender
{
    public static function sendEmail($to, $subject, $message)
    {
        $headers = "From: Your Name <your_email@example.com>\r\n";
        $headers .= "Content-type: text/html\r\n";

        return mail($to, $subject, $message, $headers);
    }
}
