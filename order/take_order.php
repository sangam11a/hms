<?php 
include_once "../layout/header.php";
 include_once "../classes/order_db.php";
 $order=new Order();
?>
<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Take Orders</title>
    <script>
        function takeOrder(name,price){
            console.log(name+"   "+price);
            document.getElementById('take_order_modalLabel').innerHTML=name;
            document.getElementById('food_item').value=name;
            document.getElementById('price1').value=price;
        }
        function calculate_total(quantity){
            var price=0;
            price=document.getElementById("price1").value;
            console.log(price*quantity);
            // document.getElementById("price").innerHTML="<label>Price:</label><br><input type='number' id='price1' name='price1' value="+Number(price)+" disabled>";
            document.getElementById("total").innerHTML="<label>Total:</label><br><input type='number' id='total1' name='total1' value="+Number(price*quantity)+">";
            //document.getElementById("totalprice").value=quantity*price;
        }
        $("document").ready(function(){
    $(".category_filter").click(function(){
      var id=$(this).attr('id');
      if(id=="all"){
        sql="Select * from menu";
      }
      else{
        sql="Select * from menu where category='"+id+"'";
      }
      console.log(id,sql);
      $.ajax({
        url:"../ajax/ajax_post.php",
        data:{sql:sql},
        method:"post",
        success:function(data){
          data=JSON.parse(data);
          var button="";
            for(i=0;i<data.length;i++){
                button+="<div class='col-sm-4 ' style='margin-top:8px;'><div class='card' >";
                button+="<div class='card-title '>";
                button+="<img src='../order/"+data[i]['menu_photo']+"' width=90% height=90% style='padding-left:5%;'><br></div>";
                button+="<div class='card-body'><h4>";
                button+=data[i]['item_name'];
                button+="<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#take_order_modal' onclick=\"takeOrder('"+data[i]['item_name']+"','"+data[i]['price']+"')\" style='float:right;'>"+"Order</button>";
                button+="</h4></div></div></div>";
                }
                $("#menus").html(button);
        },
        error:function(error){
          alert("Some error is there while filtering");
        }
      });
    });
    $('#searching_menu').keyup(function(){
      var value=$(this).val();
      sql="Select * from menu where item_name LIKE '%"+value+"%'";
      $.ajax({
        url:"../ajax/ajax_post.php",
        data:{sql:sql},
        method:"post",
        success:function(data){
          data=JSON.parse(data);
          console.log(data);
          var button="";
            for(i=0;i<data.length;i++){
                button+="<div class='col-sm-4 ' style='margin-top:8px;'><div class='card' >";
                button+="<div class='card-title '>";
                button+="<img src='../order/"+data[i]['menu_photo']+"' width=90% height=90% style='padding-left:5%;'><br></div>";
                button+="<div class='card-body'><h4>";
                button+=data[i]['item_name'];
                button+="<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#take_order_modal' onclick=\"takeOrder('"+data[i]['item_name']+"','"+data[i]['price']+"')\" style='float:right;'>"+"Order</button>";
                button+="</h4></div></div></div>";
                }
                $("#menus").html(button);
                // document.getElementById("menus").innerHTML=button;
        },error:function(error){
          alert("Some error while searching");
        }
      });
    })
  });
    </script>
</head>
<body>
  <input type="text" name="searching_menu" id="searching_menu" placeholder="search menu items">
        <?php
          // $result=$order->get_temp_tables("Select * from ");
          $result=$order->get_temp_tables("Select category from `categories`",1);
          echo "<button class='category_filter' id='all'>All</button>";
          if( $result=$order->get_temp_tables("Select category from `categories`",1)){
            $btn="";
            foreach($result as $a){
              $btn.="<button class='category_filter' id='".$a['category']."'>".$a['category']."</button>";
            }
            echo $btn;
          }
        ?>
    <div>
        <?php
          if($order->get_menu_items()){
            echo "<div class='row' id='menus'>";
            foreach( $order->get_menu_items() as $result){
                echo "<div class='col-sm-4 ' style='margin-top:8px;'><div class='card' >";
                    echo "<div class='card-title '>";
                    echo "<img src='../order/".$result['menu_photo']."' width=90% height=90% style='padding-left:5%;'><br></div>";

                             echo "<div class='card-body'><h4>";
                             echo $result['item_name'];
                                echo "<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#take_order_modal' onclick=\"takeOrder('".$result['item_name']."','".$result['price']."')\" style='float:right;'>"."Order</button>";
                                //<p class='card-text'>".$result['status']."<p><button class='btn btn-info' name='change_status' type='submit' onclick=\"change_status('".$result["status"]."')\">Change Status</button><i style='margin-left:4%;' class='far fa-eye'></i></p></p></form>";
                           echo "</h4></div>";
                echo"</div></div>";
                
            }
            echo "</div>";
        }
        ?>
    </div>
    
    <div class="modal fade" id="take_order_modal" tabindex="-1" aria-labelledby="take_order_modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="take_order_modalLabel"></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form method="post" enctype="multipart/form-data" action=''>
           <input type="hidden" name="food_item" id="food_item" value="">
           <br> <label for="">Table_number</label>
            <br><input type="number" min=0 name="table_number" id="table_number"  required>
           <br> <label for="">Quantity</label>
            <br><input type="number" min=0 name="quantity" id="quantity" onkeyup="calculate_total(this.value)" required>
           <br>
           <span id="price"></span>
            <label for="">Price</label>
            <br><input type="number" min=0 name="price" id="price1" disabled >
            <br>
            <span id="total">

            </span>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id="place_order" name='place_order'>Place Order</button>
    </form>  
    </div>
    </div>
  </div>
</div>
</body>
</html>

<?php
if(isset($_POST["place_order"])){
  $food_item=$_POST["food_item"];
  $quantity=$_POST["quantity"];
  echo "<script>console.log('".$_POST['total1']."')</script>";
  $price=$_POST["total1"]/$quantity;
  $order->create_temp_table();
  $table_number=$_POST["table_number"];
  $return=$order->insertion_temp_table($food_item,$price,$quantity,$table_number);
  $sql="SELECT MAX(id) FROM temp_table";
  if($order->get_temp_tables($sql,1)>0){
    foreach($order->get_temp_tables($sql,1) as $row){
      $tokens=$row["MAX(id)"];
    }
  }
  $sql="Insert into tokens(token_number,order_name,date1,time1) values('".$tokens."','".$food_item."','".date('Y/m/d')."','".date('H:i:s')."')";
  $order->insert_to_booking($sql);
  $order->change_table_status($table_number,"empty");
  if($return){
    echo "<script>console.log('Order sucessful')</script>";

  }

}
?>

<?php 
include_once "../layout/footer.php";
?>