<?php

require_once "conection.php";

class MdlCategories
{
    static public function mdlCategoriesList($table)
    {
        $sql = "SELECT * FROM $table";
        $query = Conexion::conectar()->prepare("$sql");
        $query->execute();
        return $query->fetchAll();

        $query -> close();
        $query = null;
    }

}
