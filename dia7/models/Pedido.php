<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/config/DB.php");

class Pedido
{
    public static function pedidos($data)
    {
        extract($data);
        $queryString = "insert into pedidos (cliente_id,producto,cantidad,precio) 
        values ($cliente_id,$producto,$cantidad,$precio);";

        $res = DB::query($queryString);
        $data = $res->fetchAll(PDO::FETCH_ASSOC);

        return $data;

    }


}

?>