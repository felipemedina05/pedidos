<?php

require_once($_SERVER["DOCUMENT_ROOT"] . "/controller/PedidoController.php");

$controller = new PedidoController();
$controller = $controller->clientes();


$urlCompleta = $_SERVER["REQUEST_URI"];

$urlPartida = explode("?", $urlCompleta);

$url = $urlPartida[0];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    switch ($url) {
        case "/pedidos":
            $controller = Pedido::pedidos($_POST);
            break;


        default:
        
            break;
    }
}


?>