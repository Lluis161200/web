<?php
require_once __DIR__ . '/../../models/modelConnectDB.php';
require_once __DIR__ . '/../../models/modelFinalizarCompra.php';
$id=$_SESSION['user_id'];
$fechaActual = date('d/m/y h:i:s');
$cantidad=$_SESSION['quantity'];
$precioTotal=$_SESSION['total_price'];
guardarComanda($id,$fechaActual, $cantidad, $precioTotal );

$id_comanda=getComandaID();
foreach ($_SESSION['cart'] as $id_prod) {
    $preuTotal=$_SESSION['preuLinia'][$id_prod];
    $cantidadProd=$_SESSION['quantity'][$id_prod];
    LiniaComanda($id_prod, $id_comanda, $preuTotal,$cantidadProd );
}

require __DIR__ . '/../../view/main/viewFinalizarCompra.php';