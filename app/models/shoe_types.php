<?php
// echo __DIR__ . '/../../../../../../../';
require realpath(__DIR__ . "/../../config/database.php");
// require 'C:\xampp\htdocs\Shoosh_html\config\database.php';
// echo ("itt");

class ShoeType
{
    private static $tableName = "shoe_types";
    public static function getShoes()
    {
        $users = DB::query('SELECT count(*) AS count, shoe_types.id, name, type, price, picture_path
        FROM shoe_types
        INNER JOIN brands
        ON brands.id = shoe_types.brands_id;');
        return $users;
    }

    public static function insertUser($data)
    {
        $sql="INSERT INTO " . self::$tableName . " (name, email, activate_token) VALUES (.'$data[0].', '.$data[1].', '.$data[2].')";
        var_export($sql);
        return DB::query($sql);
    }
}
