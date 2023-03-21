<?php
// echo __DIR__ . '/../../../../../../../';
require realpath(__DIR__ . "/../../config/database.php");
// require 'C:\xampp\htdocs\Shoosh_html\config\database.php';
// echo ("itt");

class User
{
    private static $tableName = "users";
    public static function getUsers()
    {
        $users = DB::query("Select * from users");
        return $users;
    }

    public static function insertUser($data)
    {
        $sql="INSERT INTO " . self::$tableName . " (name, email, activate_token) VALUES (.'$data[0].', '.$data[1].', '.$data[2].')";
        var_export($sql);
        return DB::query($sql);
    }
}
