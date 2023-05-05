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
        $result = DB::query('SELECT shoe_types.id, brand, type, price, picture
        FROM shoe_types
        INNER JOIN brands
        ON brands.id = shoe_types.brands_id;');
        return $result;
    }


    public static function getBrands()
    {
$result = DB::query(' SELECT *
        FROM brands');

        return $result;
    }

    public static function deleteShoe($id)
    {
        $sql = 'DELETE FROM ' . self::$tableName . ' WHERE id= ' . $id;
        return DB::query($sql); 
    }

    public static function saveShoe($request)
    {
        $sql = 'INSERT INTO ' . self::$tableName . ' (brands_id, type, price, picture) VALUES ("' . $request['brands_id'] . '", "' . $request['type'] . '", "' . $request['price'] . '", "' . $request['picture'] . '")';
        return DB::query($sql);
    }
    // public static function insertUser($data)
    // {
    //     $sql="INSERT INTO " . self::$tableName . " (name, email, activate_token) VALUES (.'$data[0].', '.$data[1].', '.$data[2].')";
    //     var_export($sql);
    //     return query($sql);
    // }
}
