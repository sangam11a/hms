<?php
 include_once "../classes/order_db.php";
 $order=new Order();
 $sql="select food_item,total from sold_items where date1='".date("Y-m-d")."' order by time1 DESC limit 10;";
 $result=$order->get_temp_tables($sql);
echo $result;
return $result;
?>