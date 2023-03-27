<?php
require realpath(__DIR__ . "/../models/User.php");
// require realpath(__DIR__ . "/../models/user.php");

class UserController
{
    public static function list()
    {
        return User::getUsers();
    }

    public static function create($request)
    {
        $data=[];
        array_push($data, $request['firstName']. " " . $request['lastName']);
        array_push($data, $request['email']);
        array_push($data, uniqid());
        User::insertUser($data);
        return "Success";
    }
}
