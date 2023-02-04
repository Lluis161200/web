<?php
require_once __DIR__ . '/modelConnectDB.php';

$uID = $_POST['UserID'];
$pID = $_POST['ProductID'];

$conn = connecta();

$sql=" DELETE FROM carritos WHERE user_id='$uID' AND product_id ='$pID'";
$result=pg_query($conn, $sql) or die ("Cannot execute query: ");

?>
