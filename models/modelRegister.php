<?php

function register()
{
    if(!empty($_POST["Register"])) {
        if(empty($_POST["Username"]) or empty($_POST["Mail"]) or empty($_POST["Password"])) {
            echo 'Uno de los campos está vacio';
        }
        else {
            $username = $_POST["Username"];
            $mail = $_POST["Mail"];
            $codp=$_POST["codipostal"];
            $poblacion=$_POST["poblacio"];
            $password = password_hash($_POST["Password"], PASSWORD_DEFAULT);

            $conn = connecta();

            $sql=" insert into usuario(username,mail,password, codip, poblacion)values('$username','$mail','$password',' $codp', '$poblacion')";

            $result=pg_query($conn, $sql) or die ("Cannot execute query: ");
        }
    }
}
