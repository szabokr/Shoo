<?php
require realpath(__DIR__ . "/../models/brands.php");
// require realpath(__DIR__ . "/../models/user.php");


class BrandController
{
    public static function list()
    {
        return Brands::getBrands();
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
