<?php
require_once __DIR__ . '/modelConnectDB.php';

$uID = $_POST['UserID'];
$nItems = $_POST['nItems'];
$totalPrice = $_POST['totalPrice'];

if($uID){
    $conn = connecta();

    $sql="DELETE FROM carritos WHERE user_id='$uID'";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    date_default_timezone_set('Europe/Andorra');
    $date = date('m/d/Y h:i:s a', time());

    $sql="insert into comandas(user_id, precio, cantidad, fecha)values('$uID','$totalPrice','$nItems','$date')";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");
}
?>