<?php

function Modifica()
{
    if(!empty($_POST["Modifica"])){
        $conn = connecta();

        if(!empty($_POST["username"]))
        {
            $username=$_POST["username"];
            $sql="UPDATE usuario SET username='$username'";
        }
        if(!empty($_POST["email"])){
            $email=$_POST["email"];
            $sql = $sql.", mail='$email'";
        }
        if(!empty($_POST["password"])){
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
            $sql = $sql.", password='$password'";
        }
        if(!empty($_POST["poblacio"])){
            $poblacio=$_POST["poblacio"];
            $sql = $sql.", poblacion='$poblacio'";
        }
        if(!empty($_POST["codip"])){
            $codip=$_POST["codip"];
            $sql = $sql.", codip='$codip'";
        }
        $imgName = null;
        if ($_FILES['image'] && !empty($_FILES['image']) !== null) {
            $imgName = basename($_FILES['image']['name']);
            $imgPath="/home/TDIW/tdiw-e2/public_html/img/".$imgName;
            var_dump($imgPath);
            move_uploaded_file($_FILES['image']['tmp_name'], $imgPath);
            $sql = $sql.", path='$imgName'";
        }

        $c_id=$_SESSION['user_id'];
        $id=trim($c_id);
        $sql=$sql." WHERE id = '$c_id'";
        $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

        return pg_fetch_all($result);
    }

}