<?php

class Db {

    private static $host = "127.0.0.1";
    private static $user = "user";
    private static $password = "";
    private static $db = "magazin";

    private static $connect;

    public static function getConnect() {
        if (is_null(static::$connect)) {
            static::$connect = static::connect();
        }
        return static::$connect;
    }

    public static function  query($query) {
        $conn = static::getConnect();
        $result = mysqli_query($conn, $query);
        if (mysqli_errno($conn)) {
            $error = mysqli_error($conn);
            exit();
        }
        return $result;
    }

    public static function affectedRows()
    {
        $connect = static::getConnect();
        return mysqli_affected_rows($connect);
    }

    private static function connect() {
        $connect = mysqli_connect(static::$host, static::$user, static::$password, static::$db);

        if (mysqli_connect_errno()) {
            $error = mysqli_connect_error();
            exit();
        }
        return $connect;
    }
}
