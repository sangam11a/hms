<?php
include_once "../classes/order_db.php";
include_once "../layout/header.php";
$order=new Order();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Tables</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <label for="">Table number</label>
            <input type="text" name="table_number" id="table_number">
            <input type="submit" name="add_table" value="Add table">
        </form>
    </div>
</body>
</html>
<?php
if(isset($_POST["add_table"])){
    $table_number=$_POST["table_number"];
    $order->add_table($table_number);
}
?>
<?php include_once "../layout/footer.php";?>