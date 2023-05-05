<?php
require realpath(__DIR__ . "/../../config/database.php");

class Brands
{
    private static $tableName = "brands";
    public static function getBrands()
    {
        $result = DB::query(' SELECT *
        FROM brands');

        return $result;
    }

    public static function deleteBrand($request)
    {
        $sql = 'DELETE FROM ' . self::$tableName . ' WHERE id= ' . $request;
        return DB::query($sql);
    }

    public static function createBrand($request)
    {
        $sql = 'INSERT INTO ' . self::$tableName . ' (brand) VALUES ("' . $request['brand'] . '")';
        return DB::query($sql);
    }
}
