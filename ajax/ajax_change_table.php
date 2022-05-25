<?php
 include_once "../classes/order_db.php";
 $order=new Order();
 $sql="select * from table_details;";
 $result=$order->get_temp_tables($sql);
echo $result;
return $result;
?>