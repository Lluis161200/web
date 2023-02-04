<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/modelDetallesProducto.php';

$id=$_GET['id'];
$prod=getProductByID($id);
foreach($prod as $peli){
    $name = $peli['name'];
    $price = $peli['precio'];
    $img = $peli['path'];

}
if(!isset($_SESSION['carrito'][$id]))
{
    $_SESSION['cart'][$prod] = $prod;
    $_SESSION['name'][$prod] = $name;
    $_SESSION['price'][$prod] = $price;
    $_SESSION['unitats'][$prod] = 1;
    $_SESSION['amount'][$prod] = $price;
    $_SESSION['img'][$prod] = $img;
}
else{
    $_SESSION['unitats'][$prod] = $_SESSION['unitats'][$prod]+1;
    $_SESSION['amount'][$prod] = $price*$_SESSION['unitats'][$prod];
}
if(isset($_GET['buidar_cabas'])){
    //BUIDAR SESSIONS
    unset($_SESSION['cart'], $_SESSION['name'], $_SESSION['price'], $_SESSION['unitats'],
        $_SESSION['amount'], $_SESSION['img']);
}

include_once __DIR__ . '/../../view/main/viewDetallesProducto.php';