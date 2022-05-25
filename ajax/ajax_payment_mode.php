<?php
 include_once "../classes/order_db.php";
 $order=new Order();
 $sql="select count(payment_mode),payment_mode from sold_items group by payment_mode;";
 $result=$order->get_temp_tables($sql);
echo $result;
return $result;
?>