<?php
class DB
{
    private static $host = "localhost";
    private static $username = "root";
    private static $password = "Demo1234";
    private static $database = "shooshdb";

    public static function query($sql)
    {
        $conn = new mysqli(self::$host, self::$username, self::$password, self::$database);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $result = $conn->query($sql);

        $conn->close();

        return $result;
    }
}
