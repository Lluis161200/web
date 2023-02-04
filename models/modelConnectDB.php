<?php

function connecta(){

    $host = "127.0.0.1";
    $user = "tdiw-e2";
    $clave = "oACu6gXH";
    $bd = "tdiw-e2";

    static $conn;
    if ($conn===NULL) {
        $conn = pg_connect("host=$host dbname=$bd user=$user password=$clave") or die("No se encuentra la base de datos");
    }

    return $conn;
}
