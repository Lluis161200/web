<?php
function getCarrito()
{
    $conn = connecta();
    $user = $_SESSION['user_id'];
    $sql="SELECT * FROM carritos WHERE user_id = $user";
    $result=pg_query($conn, $sql) or die ("Cannot execute query: ");

    return pg_fetch_all($result);
}
?>
