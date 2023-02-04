<?php

function getCategorias()
{
    $conn = connecta();

    $sql="select * from categorias";

    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);

}