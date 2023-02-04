<?php

function getMain()
{
    $conn = connecta();

    $sql="SELECT * FROM products";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);
}