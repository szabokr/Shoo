<?php
require realpath(__DIR__ . "/../../config/database.php");

class Orders
{
    
    private static $tableName = "orders";
    public static function getOrders()
    {
        $result = DB::query('SELECT * FROM orders;');
        return $result;
    }

    public static function createOrder($request)
    {
        $sql = 'INSERT INTO ' . self::$tableName . ' (user_id, shoe_id) VALUES ("' . $request['user_id'] . '", "' . $request['shoe_id'] . '")';
        return DB::query($sql);
    }

    public static function deleteOrder($id)
    {
        $sql = 'DELETE FROM ' . self::$tableName . ' WHERE id= ' . $id;
        return DB::query($sql); 
    }

    
   
}
