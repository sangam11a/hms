<?php
include_once "../layout/header.php";
////require_once "../includes/init.php";
include_once "../classes/order_db.php";
$order=new Order();
?>

<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Inventory</title>
    <script>
        function cliced(item_name,price,quantity,barcode,minimum_stocks){
          console.log(item_name+"   "+price);
            document.getElementById('item_name1').value=item_name;
             document.getElementById('price1').value=price;
             document.getElementById('quantity1').value=quantity;
             document.getElementById('barcode1').value=barcode;
             document.getElementById('minimum_stocks1').value=minimum_stocks;
        }
        function deleted(name){
          console.log(name);
          document.getElementById("menu_to_delete").value=name;
        }
        function total_calc(value){
          var quantity=document.getElementById('quantity1');
          var val1=quantity.value;
          console.log(value,quantity.value);
          quantity.value=0;
          var x=0.0;
          if(value>=0){
            x=Number(value)+Number(val1);
            console.log(x);
            document.getElementById("quantity1").value=x;
          }
        }
    </script>
 </head>
<body>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMenuModal">
  Add Inventory
</button>

<!--add menu Modal -->
<div class="modal fade" id="addMenuModal" tabindex="-1" aria-labelledby="addMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addMenuModalLabel">Add Inventory</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
             <label for="">Inventory Name</label>
            <br><input type="text" name="item_name" id="item_name" required>
            <br><label for="">Barcode</label>
            <br><input type="number" min=0 name="barcode" id="barcode" required>
            <br> <label for="">Price</label>
            <br><input type="number" min=0 name="price" id="price" required>
            <br>Quantity
            <br><input type="number" min=0 name="quantity" id="quantity" required>
            <br>Minimum Stocks for notifications:
              <br><input type="number" min=0 name="minimum_stocks" id="minimum_stocks" required>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add_menu" id="add_menu">Add inventory</button>
    </form>  
    </div>
    </div>
  </div>
</div>




<div>
    <table class="table table-striped table-dark">
     <thead>
         <th>S.N</th>
         <th>Inventory Name</th>
         <th>Barcode</th>
         <th>Quantity</th>
         <th>Price</th>
         <th>Minimum Stocks</th>
         <th>Actions</th> 
     </thead>
     <tbody>
         <?php
         include_once "../classes/inventory_db.php";
            $menu=new Inventory();
            $i=1;
            if($menu->get_inventory()>0){
                foreach($menu->get_inventory() as $result){
                    echo "<tr><td>".$i."</td>";$i++;
                    echo "<td>".$result["name"]."</td>";
                    echo "<td>".$result["barcode"]."</td>";
                    echo "<td>".$result["quantity"]."</td>";
                    echo "<td>".$result["price"]."</td>";
                    echo "<td>".$result["minimum_stocks"]."</td>";
                    // echo "<td>".$result["selling_price"]."</td>";
                    // echo "<td>".$result["date1"]."</td>";
                    // echo "<td>".$result["time1"]."</td>";                    
                    // echo "<td>".$result["profit"]."</td>";
                    // echo "<td>"."<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editModal' onclick='cliced('".$result['item_name']."')'>Edit</button>"."<button class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#delete_modal' style='margin-left:20px;' onclick='cliced(this)'>Delete</button>"."</td></tr>";",".$result['price'].",".$result["menu_photo"].
              //  echo "<td>"."<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editModal' onclick=cliced('".$result['name']."','".$result['selling_price']."','".$result['quantity']."','".$result['id']."')>Edit</button>"."<button name='delete_menu' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#delete_modal' style='margin-left:20px;' onclick=deleted('".$result['id']."')> Delete</button></td></tr>";
               echo "<td>"."<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editModal' onclick=cliced('".$result['name']."','".$result['price']."','".$result['quantity']."','".$result['barcode']."','".$result['minimum_stocks']."')>Edit</button>"."<button name='delete_menu' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#delete_modal' style='margin-left:20px;' onclick=deleted('".$result['barcode']."')> Delete</button></td></tr>";
                }
            }
            else{
              echo "<h3>No record Found</h3>";
            }
        ?>
     </tbody>
    </table>
</div>

<!-- Delete Modal -->
<div class="modal fade" id="delete_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-scrollable">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">
                            Delete inventory
                        </h5>
                        <button class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div>
                            Are you sure do you want to delete this item?
                        </div>
                    </div>
                    <div class="modal-footer">
                      <form action="" method="post">
                        <input type="hidden" name="menu_to_delete" id="menu_to_delete">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" name='confirm_delete' class="btn btn-primary">Delete</button>
                    </form>
                    </div>
                </div>
            </div>

</div>

<!-- Edit Modal -->
<div class="modal fade" id="editModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Edit Inventory</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
           <br> <label for="">Item Name</label>
           <br><input type="text" name="item_name" id="item_name1" required>
           <?php 
           print("<script>document.getElementById('item_name1').value</script>");
           $item="asd";
           $result=$order->get_menu_items("item_name",$item)?>
           <br> <label for="">Price</label>
            <br><input type="number" min=0 name="price1" id="price1" required>            
            <br><label for="">Quantity (***Only enter if quantity is to be updated)</label>
            <br>
            <input type="number" min=0 name="final_quantity"  id="final_quantity"  value=0 required>
             <input type="number" min=0 name="quantity1"  id="quantity1" hidden><!-- initial value passed-->
             <br> <label for="">Barcode</label><br>
            <input type="text" name="barcode1" id="barcode1" required>
            <br>
            <label for="">minimum Stocks for notifications</label>
            <br>
            <input type="number" min=0 name="minimum_stocks1" id="minimum_stocks1">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="update">Update</button>
        </form>
      </div>
    </div>
  </div>
</div>
</body>
</html>


<?php
include_once "../classes/order_db.php";

if(isset($_POST["confirm_delete"])){
  $menu_name=$_POST["menu_to_delete"];
  $menu->delete_inventory("barcode",$menu_name);
  echo "<script>location.href=location.href</script>";
}
if(isset($_POST["add_category"])){
  $category=$_POST["category"];
  $order->add_new_category($category);
}
if(isset($_POST["add_menu"])){
    $item_name=$_POST["item_name"];
    $price=$_POST["price"];
    $quantity=$_POST["quantity"];
    $barcode=$_POST["barcode"];
    $minimum_stocks=$_POST["minimum_stocks"];
    $menu->add_inventory($item_name,$quantity,$price,$barcode,$minimum_stocks);
    echo "<script>location.href=location.href</script>";
  }
  if(isset($_POST["update"])){
    $item_name=$_POST["item_name"];
    $price=$_POST["price1"];
    $initial_quantity=$_POST["quantity1"];
    $final_quantity=$_POST["final_quantity"];
    $barcode=$_POST["barcode1"];
    $minimum_stocks=$_POST["minimum_stocks1"];
    $array=[$item_name,$price,$initial_quantity,$final_quantity,$barcode,$minimum_stocks];
    $menu->update_inventory($array,"barcode",$barcode);
  }
?>
<?php include_once "../layout/footer.php" ?>