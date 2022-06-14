<?php

class Conexion{

    public static function conectar() {
        $conn = new PDO("mysql:host=localhost;dbname=konecta","root","");
        $conn->exec("set names utf8mb4");

        return $conn;
    }
    
}
