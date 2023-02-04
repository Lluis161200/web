<?php

function getAccion()
{
    $conn = connecta();

    $c_id=$_GET['category_id'];

    $sql="SELECT * FROM products WHERE id_category = $c_id";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);
}