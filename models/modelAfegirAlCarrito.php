<?php
require_once __DIR__ . '/modelConnectDB.php';

$uID = $_POST['UserID'];
$pID = $_POST['ProductID'];
$amount = $_POST['Amount'];

$conn = connecta();

$sql=" SELECT amount FROM carritos WHERE user_id='$uID' AND product_id ='$pID'";
$result=pg_query($conn, $sql) or die ("Cannot execute query: ");

$nItems = pg_fetch_all($result)[0]['amount'];

if  ($nItems)
{
    $amount = $amount + $nItems;
    $sql="UPDATE carritos SET amount='$amount' WHERE user_id='$uID' AND product_id ='$pID'";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");
}
else
{
    $sql="insert into carritos(user_id, product_id, amount)values('$uID','$pID','$amount')";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");
}

echo "Element afegit. Hi ha ".$amount." a la cesta."

?>


