<?php


class ControllerProducts
{

    /** @noinspection PhpUnnecessaryLocalVariableInspection */
    static public function Product_List()
    {
        $table = "products";
        $response = ModelProducts::mdlProductList($table);
        return $response;
    }

    public static function ctrSaveProducts($data): void
    {
        $table = "products";
        $response = ModelProducts::mdlSaveProducts($table, $data);
        if($response == "OK"){
            echo "El registro se guardó; con exito";
        }else{
            echo "registro fallido";
        }
    }


        /* public static function ctrEditProducts()
    {
        return 0;
    }


    public static function delete_products()
    {
        return 0;
    } */

}
