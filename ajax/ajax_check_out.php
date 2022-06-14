<?php
include_once "../classes/order_db.php";
$order = new Order();
if (isset($_POST["sql"])) {
    $sql = $_POST["sql"];
    $return = $order->updating_roomnumber($sql);
    return ($return);
}else{
    echo "<script>location.href='../helpers/'</script>";
}
?>
