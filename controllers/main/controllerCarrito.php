<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/modelCarrito.php';
require_once __DIR__ . '/../../models/modelDetallesProducto.php';

if($_SESSION['user_id'])
{
    $carrito = getCarrito();

    $productList= array();

foreach ($carrito as $product):

    $product_id = $product['product_id'];
    $product_info = getProductByID($product_id)[0];
    $product_info['amount']=$product['amount'];

    array_push($productList,$product_info);

endforeach;
}

require __DIR__ . '/../../view/main/viewCarrito.php';