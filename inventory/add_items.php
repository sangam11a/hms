<?php
include_once "../layout/header.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add items</title>
</head>
<body>
    <div class="container">
        <form action="" method="POST">
            <label for="">Name</label>
            <br><input type="text" name="inventory_name" id="inventory_name">
            <br><label for="">Quantity</label>
            <br><input type="text" name="inventory_quantity" id="inventorey_quantity">
            <br><label for="">Inventory Price</label>
            <br><input type="text" name="inventory_price" id="inventory_price">
            <br><label for="">Barcode</label>
            <br><input type="text" name="barcode" id="barcode">
            <br><input type="submit" name="add_inventory" value="Add inventory">
        </form>
    </div>
</body>
</html>

<?php
 include_once "../classes/inventory_db.php";
 if(isset($_POST["add_inventory"])){
     $name=$_POST["inventory_name"];
     $quantity=$_POST["inventory_quantity"];
     $price=$_POST["inventory_price"];
     $barcode=$_POST["barcode"];
     $inventory=new Inventory();
    try{
        $inventory->add_inventory($name,$quantity,$price,$barcode);
    }
    catch(Exception $error){
        echo "<script>console.log('".$error."')</script>";
    }
 }
 include_once "../layout/footer.php";
?> 