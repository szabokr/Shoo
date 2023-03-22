<?php
require realpath(__DIR__ . "/../models/User.php");
require realpath(__DIR__ . "/../../config/mail.php");
require realpath(__DIR__ . "/../helpers/Validation.php");

class UserController
{
    public static function list()
    {
        return User::getUsers();
    }

    public static function register($request)
    {
        $errors = Validation::validate(User::$roles, $request);
        if ($errors) {
            var_export(['success' => true, 'message' => $errors]);
            return ['success' => false, 'message' => $errors];
        }
        $templateData = ['to' => $request['email']];
        EmailSender::sendEmail("user_registration", $templateData);

        $data = [];
        array_push($data, $request['firstName'] . " " . $request['lastName'], $request['email'], uniqid());
        User::saveUser($data);
        return ['success' => true];
    }
}
