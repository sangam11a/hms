<?php
include_once "../classes/order_db.php";
$order=new Order();
$item=$_POST["item"];
 $error=0;
$qty=$_POST["qty"];
$id=$_POST["id"];
$price=$_POST["price"];
$table_name=$_POST["table_name"];
$sql="Delete from temp_table where food_item='$item' and id=$id and price=$price and table_number='$table_name'";        
$order->print_table($sql);


$sql="Create table if not exists `cancelled_orders`(id int not null auto_increment unique,itemname varchar(40) not null,quantity int not null,date1 varchar(12) not null,time1 varchar(12) not null,table_number varchar(5) not null)";
$order->print_table($sql);


$date=date("Y-m-d");
$time=date("H:i:s");
$sql="Insert into `cancelled_orders`(`itemname`,`quantity`,`date1`,`time1`,`table_number`) values('$item',$qty,'$date','$time','$table_name')";
$order->print_table($sql);

$sql="Select * from temp_table where `table_number`='$table_name'";
$result=$order->get_temp_tables($sql,1);
if(!count($result)>0){
    $order->print_table("Update table_details set status='empty' where `table_number`='$table_name'");
}

?>