<?php
include_once "../classes/order_db.php";
include_once "../layout/header.php";
$order=new order();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orders</title>
</head>
<body>
<div>
    <form action="" method="post">
        <label for="">Table number</label>
        <br><input type="text" name="table_number" id="table_number">
        <br><label for="">Food Ordered</label>
        <br><input type="text" name="food_ordered" id="food_ordered">
        <br><label for="">Quantity</label>
        <br><input type="text" name="quantity" id="quantity">
        <br><input name="generate_order" type="submit" value="Generate Order">
    </form>
</div>
</body>
</html>

<?php
include_once "../classes/order_db.php";
if(isset($_POST["generate_order"])){
    $table_number=$_POST["table_number"];
    $food_order=$_POST["food_ordered"];
    $quantity=$_POST["quantity"];
    // $order_time=$_POST["ordered_time"];
    // $is_completed=$_POST["is_completed"];
    // $is_paid=$_POST["is_paid"];
    $order=new Order("peaceresort");
    try{
        $order->create_order($table_number,$food_order,$quantity);
    
    }
    catch(Exception $error){
        echo "<script>console.log('".$error."')</script>";
    }
}

?>
<?php include_once "../layout/footer.php";?>