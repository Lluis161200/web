<?php

function login()
{

    if(!empty($_POST["Login"])) {
        if(empty($_POST["Mail"]) or empty($_POST["Password"])) {
            echo 'Uno de los campos está vacio';
        }
        else {

            $mail = $_POST["Mail"];
            $password = $_POST["Password"];



            $conn = connecta();

            $sql=" SELECT * FROM usuario WHERE mail='$mail'";

            $result=pg_query($conn, $sql) or die ("Cannot execute query: ");


            $res=pg_fetch_all($result);
            $hash=$res[0]['password'];
            $h=trim($hash);
            if(password_verify( $password, $h)){
                $_SESSION['user_id']=$res[0]['id'];
                ?>
                <script>
                    window.location.replace('index.php');
                </script>
                <?php
                return $res;
            }
            else{
                echo "no existe el usuario o contraseña incorrecta";
                return null;
            }
        }
    }

}
