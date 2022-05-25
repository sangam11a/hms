<?php
 include_once "../classes/order_db.php";
//  $order=new Order();
$order=new Temptable();
 $name=$_POST["name"];
//  $name=;
$name = str_replace(' ', '_', $name);
 $room_number=$_POST["room_number"];
//  $sql="SELECT * from sold_items where payment_status=0 and customer_name='".$name."' and room_number='".$room_number."';";
// if($order->check_table_existence("Show tables like \"$name\""))// kam garena ani hatako table existence ko lagi thyo
 {
    $sql="Select * from $name"; 
    $result=$order->get_temp_tables($sql);
    echo $result;
    return $result;
 }
//  else{
//      return "no_table";
//  }
?>