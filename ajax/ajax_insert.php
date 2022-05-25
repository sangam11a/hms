<?php
include_once "../classes/order_db.php";
$order=new Order();
$sql=$_POST["sql"];
$order->insert_to_booking($sql);
?>