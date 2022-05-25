<?php
include_once "../classes/order_db.php";
$order=new Order();
$room_number=$_POST["room_number"];
$sql="Select isempty from `roomnumber` where roomnumber='$room_number'";
$result=$order->get_temp_tables($sql);
echo $result;
return $result;
?>