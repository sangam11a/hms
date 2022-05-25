<?php
 include_once "../classes/order_db.php";
 $order=new Order();
 $room_number=explode("+",$_POST["room_number"]);
 $sql="select customer_name from booking where room_number='$room_number[0]' and customer_name='$room_number[1]'; ";
 $result=$order->get_temp_tables($sql);
echo $result;
return $result;
?>