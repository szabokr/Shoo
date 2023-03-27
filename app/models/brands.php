<?php
// echo __DIR__ . '/../../../../../../../';
require realpath(__DIR__ . "/../../config/database.php");
// require 'C:\xampp\htdocs\Shoosh_html\config\database.php';
// echo ("itt");

class Brands
{
    private static $tableName = "brands";
    public static function getBrands()
    {
$result = DB::query(' SELECT *
        FROM brands');

        return $result;
    }
}
