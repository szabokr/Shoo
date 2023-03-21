<?php
// echo __DIR__ . '/../../../../../../../';
require realpath(__DIR__ . "/../../config/database.php");
// require 'C:\xampp\htdocs\Shoosh_html\config\database.php';
// echo ("itt");

class User
{
    private $tableName = "users";
    public static function getUsers()
    {
        $users = DB::get("Select * from users");
        return $users;
    }

    public static function insertUser($data)
    {
        DB::insert(self::$tableName, $data);
    }
}
