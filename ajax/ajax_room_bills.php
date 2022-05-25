<?php
 include_once "../classes/order_db.php";
 $order=new Order();
 $room_number=$_POST["room_number"];
 $name=$_POST["name"];
 $sql="Select * from booking where room_number='$room_number' and customer_name='$name';";
 $result=$order->get_temp_tables($sql);
 echo $result;
 return $result;
?>