<?php

class ConnectionIssteFandom
{
    public static function connection()
    {
        try {

            $dsn = "mysql:host=localhost;dbname=isste_db;charset=utf8mb4";
            $conn = new PDO($dsn, 'root', 'yourpasssword');
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $error) {
            die("❌ Error al conectarse a la base de datos: " . $error->getMessage());
        }
    }
}
