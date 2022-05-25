<?php
include_once "../classes/order_db.php";
$order=new Order();
$sql="Select * from temp_table where `table_number`='3'";
$result=$order->get_temp_tables($sql,1);
echo count($result);
if(count($result)==0){
    echo count($result);
    $order->print_table("Update table_details set status='empty' where `table_number`='3'");
}
?>