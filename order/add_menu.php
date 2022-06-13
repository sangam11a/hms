<?php
if(session_status()==PHP_SESSION_NONE){
  session_start();
}
include_once "../layout/header.php";
// ////require_once "../includes/init.php";
include_once "../classes/order_db.php";
$order=new Order();
?>

<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add menu</title>
    <script>
        function cliced(item_name,price,photo_url){
          console.log(item_name+"   "+price);
            document.getElementById('item_name1').value=item_name;
             document.getElementById('price1').value=price;
             document.getElementById('old_photo').src=photo_url;
        }
        function deleted(name){
          console.log(name);
          document.getElementById("menu_to_delete").value=name;
        }
    </script>
 </head>
<body>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addMenuModal">
  Add new menu
</button>

<!--add menu Modal -->
<div class="modal fade" id="addMenuModal" tabindex="-1" aria-labelledby="addMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addMenuModalLabel">Add new Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
             <label for="">Item Name</label>
            <br><input type="text" name="item_name" id="item_name">
            <br> <label for="">Price</label>
            <br><input type="number" min=0 name="price" id="price">
            <br>Choose Category: <br>
            <select name="menu_category" id="menucategory">
            <?php
              $x="<option value=''>Select categories</option>";
              $result=$order->get_all_categories();
                if(count($result)>0){
                  foreach($result as $a){
                    $x.="<option value='".$a['category']."'>".$a['category']."</option>";
                  }
                }
                else{
                  $x="Add atleast 1 category";
                }
                echo $x;
              ?>
            </select>
            <br><label for="">Photo</label>
            <br> <input type="file" name="fileToUpload" id="fileToUpload">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add_menu" id="add_menu">Add menu</button>
    </form>  
    </div>
    </div>
  </div>
</div>

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCategory">
  Add new category
</button>

<!-- Modal -->
<div class="modal fade" id="addCategory" tabindex="-1" aria-labelledby="addCategoryLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addCategoryLabel">Add new Category</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" >
           <br> <label for="">Category</label>
            <br><input type="text" name="category" id="category">

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="add_category" id="add_category">Add category</button>
    </form>  
    </div>
    </div>
  </div>
</div>


<div>
    <table class="table table-striped table-dark">
     <thead>
         <th>S.N</th>
         <th>Item Name</th>
         <th>Price</th>
         <th>Photo</th>
         <th>Actions</th>
     </thead>
     <tbody>
         <?php
         include_once "../classes/order_db.php";
            $menu=new Order();
            $i=1;
            if($menu->get_menu_items()>0){
                foreach($menu->get_menu_items() as $result){
                    echo "<tr><td>".$i."</td>";$i++;
                    echo "<td>".$result["item_name"]."</td>";
                    echo "<td>".$result["price"]."</td>";
                    echo "<td>"."<img src='".$result["menu_photo"]."'height=100px width=100px;>"."</td>";
                    // echo "<td>"."<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editModal' onclick='cliced('".$result['item_name']."')'>Edit</button>"."<button class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#delete_modal' style='margin-left:20px;' onclick='cliced(this)'>Delete</button>"."</td></tr>";",".$result['price'].",".$result["menu_photo"].
               echo "<td>"."<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editModal' onclick=cliced('".$result['item_name']."','".$result['price']."','".$result['menu_photo']."')>Edit</button>"."<button name='delete_menu' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#delete_modal' style='margin-left:20px;' onclick=deleted('".$result['menu_photo']."')> Delete</button></td></tr>";
                }
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
                            Delete menu
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
        <h5 class="modal-title" id="staticBackdropLabel">Edit Menu</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data">
           <br> <label for="">Item Name</label>
           <br><input type="text" name="item_name" id="item_name1">
           <?php 
           print("<script>document.getElementById('item_name1').value</script>");
           $item="asd";
           $result=$order->get_menu_items("item_name",$item)?>
           <br> <label for="">Price</label>
            <br><input type="number" min=0 name="price" id="price1">
            <br><label for="">Old Photo</label>
            <br><img src="#" id="old_photo" alt="old photo" width=200 height=200>
            <br><label for="">Photo</label>
            <br> <input type="file" name="fileToUpload" id="fileToUpload1">

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
  
  echo "<script>alert('".$menu_name."');</script>";
  $order->delete_menu_items($menu_name);
}
if(isset($_POST["add_category"])){
  $category=$_POST["category"];
  $order->add_new_category($category);
}
if(isset($_POST["add_menu"])){
    $item_name=$_POST["item_name"];
    $price=$_POST["price"];
    $target_dir = "menuphoto/";
    $menu_category=$_POST["menu_category"];
    echo $menu_category;
    $time=time();
    if(!file_exists($target_dir)){
        mkdir("menuphoto");
    }
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    // Check if image file is a actual image or fake image
     $target_file=$target_dir.$time.".".$imageFileType;
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    echo "<script>alert('File is not an image.')</script>";
    $uploadOk = 0;
  }


// Check if file already exists
 if (file_exists($target_file)) {
  echo "alert('Sorry, file already exists.')";
  $uploadOk = 0;
 }

// Check file size
 if ($_FILES["fileToUpload"]["size"] > 9000000) {
  echo "alert('Sorry, your file is too large.greater than 9000mb')";
  $uploadOk = 0;
 }

// Allow certain file formats
 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
  echo "alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')";
  $uploadOk = 0;
 }
 if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
  // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) { 
        echo "<script>console.log('file uploaded to ".$target_file."')</script>";
        $order=new Order();
        $order->add_menu($item_name,$price,$target_file,$menu_category);
        echo "<script>location.href=location.href;</script>";
        } else {
      echo "<script>console.log('Sorry, there was an error uploading your file.')</script>";
    }
 }
}
?>
<?php include_once "../layout/footer.php" ?>