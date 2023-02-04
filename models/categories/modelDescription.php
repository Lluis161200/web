<?php


function getDesc()
{
    $conn = connecta();

    $c_id = $_GET['identi'];

    $sql = "SELECT * FROM products WHERE id = $c_id";
    $result = pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);
}