<?php
// echo __DIR__ . '/../../../../../../../';
require realpath(__DIR__ . "/../../config/database.php");
// require 'C:\xampp\htdocs\Shoosh_html\config\database.php';
// echo ("itt");

class Message
{
    private static $tableName = "messages";
    public static function getMessages()
    {
        $result = DB::query(' SELECT *
        FROM messages');

        return $result;
    }
    public static function insertMessage($data)
    {
        $sql = 'INSERT INTO ' . self::$tableName . ' (name, email, message, created_at) VALUES ("'.$data[0].'", "'.$data[1].'", "'.$data[2].'", "'.$data[3].'")';
        return DB::query($sql);
    }
}