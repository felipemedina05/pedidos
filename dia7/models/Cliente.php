<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Cliente
{

    public static function clientes() 
    {
        $queryString = "select * from clientes c join pedidos p  ;";

        $res = DB::query($queryString);
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }

}

?>