<?php
include_once "../classes/order_db.php";
$order=new Order();
$name=$_POST["sql"];
$name = str_replace(' ', '_', $name);
$sql="Select * from '$name'";
$temp_table=new Temptable();
$result=$temp_table->get_temp_tables($sql,1);
$sql="";
$name = str_replace('_', ' ', $name);
foreach($result as $row){
    $food_item=$row['order_name'];
   $quantity= $row['quantity'];
    $price=$row['price'];
    $date1=$row['date1'];
    $time1=$row['time1'];
    $total=$price*$quantity;
    $payment_mode="Cash";
    $day = date('D', $date1);
    $user='default';
 $sql.="Insert into sold_items(customer_name,food_item,quantity,price,date1,time1,user,total,payment_mode,day1,room_number,payment_status)
  values('$name','$food_item','$quantity','$price','$date1','$time1','$user','$total','$day','$room_number','$payment_mode');";
}
 $order->insert_to_booking($sql);
$name = str_replace(' ', '_', $name);
$temp_table->any_stmt("DROP table '$name'");
?>