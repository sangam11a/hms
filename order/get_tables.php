<?php
    include_once "../helpers/funtions.php";
    checkLogin();
 include_once "../classes/order_db.php";
 $order=new Order();
 $table_name=$_POST["name"];
 $sql="Select * from `temp_table` where `table_number`='$table_name'";
 $result=$order->get_temp_tables($sql);

echo $result;

return $result;
 
?>