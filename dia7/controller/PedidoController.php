<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/models/Cliente.php");
require_once($_SERVER["DOCUMENT_ROOT"] . "/models/Pedido.php");

class PedidoController 
{

    public static function clientes ()
    {
        $cliente = Cliente::clientes();
        include $_SERVER["DOCUMENT_ROOT"] . "/views/pedidos.php";
    }

    public static function pedido ($request)
    {
        $pedido = Pedido::pedidos($request);
        include $_SERVER["DOCUMENT_ROOT"] . "/views/pedidos.php";

    }

}



?>