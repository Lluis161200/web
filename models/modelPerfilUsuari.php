<?php

function getUsuari()
{
    $conn = connecta();

    $c_id=$_SESSION['user_id'];

    $sql="SELECT * FROM usuario WHERE id = $c_id";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);
}

