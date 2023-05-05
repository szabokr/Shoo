<?php
require realpath(__DIR__ . "/../models/shoe_types.php");
// require realpath(__DIR__ . "/../models/brands.php");
// require realpath(__DIR__ . "/../models/user.php");


class ShoeController
{
    public static function list()
    {
        return ShoeType::getShoes();
    }

    public static function listBrands()
    {
        return ShoeType::getBrands();
    }

    public static function delete($request)
    {
        ShoeType::deleteShoe($request);
        return array("success" =>true);
    }

    public static function save($request)
        {
            ShoeType::saveShoe($request);
            return array("success" =>true);
        }
    // public static function create($request)
    // {
    //     $data=[];
    //     array_push($data, $request['firstName']. " " . $request['lastName']);
    //     array_push($data, $request['email']);
    //     array_push($data, uniqid());
    //     User::insertUser($data);
    //     return "Success";
    // }
}
