<?php

require_once "conection.php";

class ModelProducts
{
    public static function mdlProductList($table)
    {
        $stmt = Conexion::conectar()->prepare("SELECT * FROM $table");
        $stmt->execute();
        return $stmt->fetchAll();

        $stmt -> close();
        $stmt = null;
    }


    public static function mdlCreateProducts($table, $data)
    {
        $stmt = Conexion::conectar()->prepare("INSERT INTO $table(NULL, product_name, product_ref, product_price, product_weight, product_stock, categorie, create_date) VALUES (:ID, :PRODUCTO, :REFERENCIA, :PRECIO, :PESO, :STOCK, :CATEGORIA, :FECHA)");

        $stmt->bindParam(":PRODUCTO", $data["product_name"], PDO::PARAM_STR);
        $stmt->bindParam(":REFERENCIA", $data["product_ref"], PDO::PARAM_STR);
        $stmt->bindParam(":PRECIO", $data["product_price"], PDO::PARAM_INT);
        $stmt->bindParam(":PESO", $data["product_weight"], PDO::PARAM_INT);
        $stmt->bindParam(":STOCK", $data["product_stock"], PDO::PARAM_INT);
        $stmt->bindParam(":CATEGORIA", $data["categorie"], PDO::PARAM_INT);
        $stmt->bindParam(":FECHA", $data["product_date"], PDO::PARAM_STR);

        if ($stmt-execute()) {
            return "OK";
        }else {
            echo "Error";
        }

        $stmt -> close();
        $stmt = null;

    }


}