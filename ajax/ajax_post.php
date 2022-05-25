<?php
include_once "../classes/order_db.php";
$order=new Order();
$sql=$_POST["sql"];
$result=$order->get_temp_tables($sql);
echo $result;
return $result;
?>