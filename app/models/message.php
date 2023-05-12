<?php
require realpath(__DIR__ . "/../../config/database.php");

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
        $sql = 'INSERT INTO ' . self::$tableName . ' (name, email, message, created_at) VALUES ("' . $data[0] . '", "' . $data[1] . '", "' . $data[2] . '", "' . $data[3] . '")';
        return DB::query($sql);
    }

    public static function deleteMessage($id)
    {
        $sql = 'DELETE FROM ' . self::$tableName . ' WHERE id= ' . $id;
        return DB::query($sql);
    }
}
