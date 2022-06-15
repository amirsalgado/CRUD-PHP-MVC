<?php

class Conexion{

    public static $conn = NULL;
    public static function conectar() {

        if (!isset(self::$conn)) {
            $opt[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            self::$conn = new PDO("mysql:host=localhost;dbname=konecta", "root", "", $opt);
        }
        
        self::$conn->exec("set names utf8mb4");

        return self::$conn;
    }
    
}
