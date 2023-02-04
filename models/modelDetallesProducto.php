<?php

function getProductByID($id)
{
    $conn = connecta();


    $sql="SELECT * FROM products WHERE id = $id";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);
}

?>