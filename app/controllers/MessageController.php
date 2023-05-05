
<?php
require realpath(__DIR__ . "/../models/message.php");
// require realpath(__DIR__ . "/../models/user.php");

class MessageController
{
    public static function list()
    {
        return Message::getMessages();
    }

    public static function create($request)
    {
        $data=[];
        array_push($data, $request['name']);
        array_push($data, $request['email']);
        array_push($data, $request['message']);
        array_push($data, date("Y-m-d H:i:s"));
        Message::insertMessage($data);
        // var_export($data);        
        return "Success";
    }

    public static function delete($request){
        Message::deleteMessage($request);
        return array("success" =>true);
    }
}
