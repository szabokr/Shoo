<?php
require realpath(__DIR__ . "/../models/shoe_types.php");
// require realpath(__DIR__ . "/../models/user.php");

var_export(ShoeType::getShoes());

class ShoeController
{
    public static function list()
    {
        return ShoeType::getShoes();
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
