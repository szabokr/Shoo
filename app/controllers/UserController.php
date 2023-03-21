<?php
require realpath(__DIR__ . "/../models/User.php");
// require realpath(__DIR__ . "/../models/user.php");

class UserController
{
    public static function list()
    {
        return User::getUsers();
    }

    public static function create($data)
    {
    }
}
$data = ['name' => '123'];
User::insertUser($data);


var_export($sql);
