<?php
include_once "../helpers/funtions.php";
checkLogin();
include "../classes/order_db.php";

$order=new Order();
// if(isset($_POST["confirm_payment"])){
    $table_number=$_POST['confirm_payment'];
    $tax=$_POST["tax"];
    $discount=$_POST["discount"];
    $result=$order->get_temp_tables("Select * from `temp_table` where `table_number`='$table_number'",1);
    $customer_name=$_POST["customer_name"];
    $payment_mode=$_POST["payment_mode"];
    if(count($result)>0){
        $sucess=1;
     foreach($result as $row){
        $total=0.0;   
         $total=$row['quantity']*$row['price'];
        try{$order->add_sold_record($customer_name,$table_number,$row['food_item'],$row['quantity'],$row['price'],$payment_mode);
            $food_item=$row["food_item"];
            $qty=$row["quantity"];
            $price=$row["price"];
            $sql="Insert into `print_table`(`name`,`quantity`,`price`,`subtotal`,`customer_name`,`tax`,`discount`) values('$food_item',$qty,$price,$total,'$customer_name',$tax,$discount)";
            $order->print_table($sql);
        }
        catch(Exception $error){
            $sucess=0;
           echo "<script>alert('Some error occured in payment processing');</script>";
        }
     }
     if($sucess) {
         $order->delete_temp_data($table_number);
         $order->change_table_status($table_number,"occupied");
         echo "<script>location.href='overall_orders.php';</script>";
      }
    }
// }
?>