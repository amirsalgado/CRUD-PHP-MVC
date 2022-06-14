<?php

require_once "conect_db.php";

class MdlCategories
{
    static public function mdlCategoriesList($table)
    {
        $sql = "SELECT * FROM $table";
        $query = Conection::conex()->prepare("$sql");
        $query->execute();
        return $query->fetchAll();

        $query -> close();
        $query = null;
    }

}
