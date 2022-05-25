<?php
include_once "../classes/order_db.php";
$name=$_POST["name2"];
$sql2=$_POST["sql"];
$sql="Create database if not exists temporary_data_peaceresort";
$order=new Order();
$order->create_new_database($sql);
echo "<script>alert('".$name."')</script>";
$sql="Create table if not exists $name(id int not null auto_increment unique,order_name varchar(60) not null,quantity int not null,price double not null);";
$order->create_new_database($sql);

if($order->create_new_database($sql2))
return 'success';
?>