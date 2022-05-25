<?php
include_once "../classes/order_db.php";
$order=new Order();
$sql=$_POST["sql"];
$return=$order->updating_roomnumber($sql);
return ($return);
?>