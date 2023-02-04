<?php

function guardarComanda($id,$fechaActual, $cantidad, $precioTotal ){
    $conn = connecta();
    $sql="insert into comanda (id_usuario, precio_total, cantidad, fecha) values ($id, $precioTotal, $cantidad, $fechaActual)";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);

}
function getComandaID(){
    $conn = connecta();
    $sql="SELECT * FROM COMANDES ORDER BY id_comanda DESC LIMIT 1";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);
}

function LiniaComanda($id_prod, $id_comanda, $preuTotal,$cantidadProd ){
    $conn = connecta();
    $sql="insert into comanda (id_produte, id_comanda, precio_linia, cantidad_producto) values ($id_prod, $id_comanda, $preuTotal, $cantidadProd)";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);

}