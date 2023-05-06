<?php
require realpath(__DIR__ . "/../models/orders.php");

class OrderController
{
    public static function listOrders()
    {
        return Orders::getOrders();
    }

    public static function create($request)
    {
        Orders::createOrder($request);
        return array("success" =>true);
    }

    public static function delete($request)
    {
        Orders::deleteOrder($request);
        return array("success" =>true);
    }
}
