<?php
require realpath(__DIR__ . "/../models/User.php");
// require realpath(__DIR__ . "/../models/user.php");

class UserController
{
    public static function list()
    {
        return User::getUsers();
    }

    public static function create($request)
    {
        // $errors= Validatoin($request);
        // if ($errors){
        //     return array("success" =>false ,"message" => $errors);
        // }
        $data = [];
        array_push($data, $request['firstName'] . " " . $request['lastName']);
        array_push($data, $request['email']);
        array_push($data, $request['phone_number']);
        array_push($data, $request['zip_code']);
        array_push($data, $request['street']);
        array_push($data, $request['house_number']);
        // array_push($data, password_hash($request['password'], PASSWORD_DEFAULT));
        array_push($data, password_hash('jelszo', PASSWORD_DEFAULT));
        User::insertUser($data);
        return array("success" =>true ,"message" => "Your Registration was successful!", "created_at"=> date("i"));
    }

    public static function login($request)
    {
        $user = User::getUser($request['email']);

        if(!$user){
            return array("success" =>false ,"message" => "Email not found");
        };
        if($user['password'] != $request['password']){
            return array("success" =>false ,"message" => "Wrong password");
        };
        // var_export(header());
        
        return array(
            "success" => true,
            "message"=>"Your login was successful!",
            "redirect" => "?seller"
        );
        
        //return array("success" =>true ,"message" => "Your Login was successful!", "created_at"=> date("i"));
    }
}
