<?php
 include_once "../classes/order_db.php";
 $order=new Order();
 $sql="SELECT food_item,SUM(quantity), COUNT(*) 
 FROM sold_items 
 GROUP BY food_item ORDER BY SUM(quantity) DESC limit 8;";
 $result=$order->get_temp_tables($sql);
echo $result;
return $result;
 
?>