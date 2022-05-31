<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orders</title>
  <script>
    function print_orders_js(){
      let y=location.href.split("/order/")[0];
      alert(y+"/print/kitchen_bill.php")
      window.open(y+"/print/kitchen_bill.php","_blank");

    }
 </script>
</head>
<body>
  
</body>
</html>
<?php 
include_once "../layout/header.php";
 include_once "../classes/order_db.php";
 if(session_status()==PHP_SESSION_NONE){
   session_start();
 }
 $order=new Order();
 $temp_table=new Temptable();
 $sql="Create database if not exists temporary_data_peaceresort";
 $order->insert_to_booking($sql);
 $error=10;
 if(isset($_POST["place_order"])){
  $food_item=$_POST["food_item"];
  $quantity=$_POST["quantity"];
  echo "<script>console.log('".$_POST['total1']."')</script>";
  $price=$_POST["total1"]/$quantity;
  $order->create_temp_table();
  $table_number=$_POST["table_number"];
  $return=$order->insertion_temp_table($food_item,$price,$quantity,$table_number);
  $order->change_table_status($table_number,"empty");
  if($return){
    // echo "<script>console.log('Order sucessful')</script>";

  }
}
if(isset($_POST['final_placement'])){
 $temp_table=new Temptable();
 echo "<pre>";
 print_r($_POST);
//  echo "<Script>alert('".$_POST."')</script>";
   $name=$_POST['c_name2'];
   $name=$_POST["customer_name4"];
   $name = str_replace(' ', '_', $name);
  $data= $_POST['hidden_Data'];
  $temp_table->create_temp_table($name);
  $temp_data="";
  $array=[];
  for($i=0;$i<strlen($data);$i++){
    if($data[$i]!=","){
      $temp_data.=$data[$i];
    }
    else{
      array_push($array,$temp_data);
      $temp_data="";
    }
  }
  $sql="";
  // echo "<script>alert('".count($array).$data."')</script>";
  $result=$order->get_temp_tables("Select item_name,price from `menu`",1);
  $table_name=$_POST['table_number1'];
  $name=$_POST["customer_name4"];
  $_SESSION["order_name"]=$name;
  $room_number="0";
  if(isset($_POST["room_number_select"])) {
     $room_number=$_POST['room_number_select'];    
  }
  
  for($i=0;$i<count($array);$i++){
    foreach($result as $row){
      if($row["item_name"]==$array[$i]){
        $price=$row["price"];
        if($array[$i+1]<0){
          $price=$price*(-1);
        }
        
        $temp_table->insert_print_table($array[$i++],$array[$i],$table_name);    
        $i--;
        $result4=$order->insert_temp_table($array[$i++],$price,$array[$i],$table_name,$name,$room_number);
        $i--;
        $result3=$temp_table->insert_temp_table($name,$array[$i++],$array[$i],$price);      
        
        // $result4=$order->insertion_temp_table($array[$i++],$price,$array[$i],$table_name);
          if($result3==0&&$result4==0){
                      $error=0;
          }
          else{
            $error=1;
          }
      }
      
    }
    
    // 
  }
  // $print_data_status=$temp_table->insert_print_table($name,$table_name);
  if($error==0){
    echo "<div class='alert alert-warning'>";
                      echo "<script>alert('Order cannot be placed to database...Plz reorder everything')</script>";
                      echo "</div>";
  }
  if($error==1){
    echo "<div class='alert alert-success'>";
    // echo "<script>alert('Order Succeded');</script>";
    $sql2="Update table_details set status='occupied' where table_number='$table_name'";
    $order->insert_to_booking($sql2);
    echo "</div>";
    echo "<script>location.href=location.href.split('/order/')[0]+'/print/kitchen_bill.php';</script>";
  }
  $result1=$order->get_temp_tables("Select name,quantity,price from `inventory`",1);
  for($i=0;$i<count($array);$i+=1){
    foreach($result1 as $row){
      if($row["name"]==$array[$i]){
        
      // echo "<script>alert('".$row["name"]."')</script>";
        if($row["quantity"]>=0){
            $price=$row["price"];
            if($array[$i+1]<0){
              $price=$price*(-1);
            }
          if($temp_table->insert_temp_table($name,$array[$i++],$array[$i],$price)){
            // echo "<script>alert('".$array[$i]."')</script>";
          if ( $order->updating_roomnumber("Update `inventory` set `quantity`=`quantity`-1 where name='$name'"))
            echo "<div class='alert alert-success'>";
              echo "Order Succeded";
              echo "</div>";
            
           }        
           else{
            echo "<div class='alert alert-warning'>";
            echo "Order cannot be placed to database...Plz reorder everything";
            echo "</div>";
           }
          }
        }
        if($row['quantity']<0){
          echo "<script>alert('Drinks can never be 0 or negative get in stocks now or contact your manager')</script>";
        }
      }
    }
  }
 echo "<form method='post' action=''>";
  //  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
 
<script src="https://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>

<link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
    <title>Take Orders</title>
    <script>
      window.onload=()=>{
        document.getElementById('room_num').style.display='none';
      }
      var table_number,customer_name;
        function takeOrder(name,price){
            console.log(name+"   "+price);
            document.getElementById('take_order_modalLabel').innerHTML=name;
            document.getElementById('food_item').value=name;
            document.getElementById('price1').value=price;
        }

        function select_room_number(room_number){
          $.ajax({
            url:"../ajax/ajax_select_customer.php",
            method:"post",
            data:{room_number:room_number.value},
            success:function(data){
              data=JSON.parse(data);
              document.getElementById('customer_name1').value=data[0]['customer_name'];
              document.getElementById('customer_name4').value=data[0]['customer_name']; 
              document.getElementById('c_name2').value=data[0]['customer_name'];
            },
            error:function(error){

            }
          })
        }

        function table_clicked(name,sign){
              var table = document.getElementById("order-table");
              var row = table.insertRow(-1);
              var cell1 = row.insertCell(0);
              var cell2 = row.insertCell(1);
              name=name.replaceAll("-"," ")
              cell1.innerHTML = name;
             if(sign=='+')  {quantity = "1";}
             else  {quantity = "-1";}
             cell2.innerHTML=quantity;
             document.getElementById("hidden_Data").value+=name+","+quantity+",";
             console.log( document.getElementById("hidden_Data").value);
            }
         function minus(x){
          minus_internal(x.id)
         } 
         function minus_internal(id){
          console.log(id);
            var order="#order"+id;
            order=order.replace(" ","-")
            var quantity=$(order).html();
            console.log(quantity);
            if(quantity>0){
                var y=Number(quantity)-1;
                $(order).html("  "+y+"   ");
                var prevTable=$("#list-orders").html();
                console.log(prevTable);
                if(!prevTable)
                {
                //   console.log("empty")
                //   table="<table class='table'><thead><th>Orders</th><th>Quantity</th></thead><tbody><td>"+id+"</td><td>"+y+"</td>"+"</tbody>";
                  
                // }else{
                //   table+="<tbody><td>"+id+"</td><td>"+y+"</td></tbody>";
                }
                table_clicked(id,'-');
              }
            // document.getElementById("list-orders").innerHTML+=table;}
         }
         function plus_internal(id){
          var order="#order"+id;
          order=order.replace(" ","-")
            var quantity=$(order).html();
            var y=Number(quantity)+1;
             $(order).html("   "+y+"   ");
            var prevTable=$("#list-orders").html();
            console.log(prevTable)
            var table="";
            if(prevTable)
            {
            //   console.log("empty")
            //   table="<table class='table'><thead><th>S.N.</th><th>Orders</th><th>Quantity</th></thead><tr><td>"+id+"</td><td>"+y+"</td>"+"</tr>";
              
            // }else{
              // table="<tbody><td>"+id+"</td><td>1"+"</td></tbody>";
              // $("table tbody").append(table);
            }
            //document.getElementById("list-orders").innerHTML+=table;
            table_clicked(id,'+');
         }
         function plus(x){
          var id=x.id;
          plus_internal(id);
            // console.log(id);
            // var order="#order"+id;
            // var quantity=$(order).html();
            // var y=Number(quantity)+1;
            //  $(order).html("   "+y+"   ");
            // var prevTable=$("#list-orders").html();
            // console.log(prevTable)
            // var table="";
            // if(prevTable)
            // {
            // //   console.log("empty")
            // //   table="<table class='table'><thead><th>S.N.</th><th>Orders</th><th>Quantity</th></thead><tr><td>"+id+"</td><td>"+y+"</td>"+"</tr>";
              
            // // }else{
            //   // table="<tbody><td>"+id+"</td><td>1"+"</td></tbody>";
            //   // $("table tbody").append(table);
            // }
            // //document.getElementById("list-orders").innerHTML+=table;
            // table_clicked(id,'+');
         }  
        $("document").ready(function(){
          // if($("#c_name").val.length==0)
          if($("#c_name").val().length==0) 
          $("#pre_order").modal('show');
          $("#place_order").click(function(){
          table_number= $("#table_number1").val();
          customer_name= $('#customer_name1').val();
            if(table_number!=0&&customer_name){
              $("#pre_order").modal('hide');
              console.log(table_number);
               $("#c_name").html(customer_name);
               $("#tb_number").html(table_number);
            }
            else{
             if(table_number==0) alert("Table number not defined");
             else if(!customer_name) alert("Name not entered");
             else alert("Both fields not filled")
            }
          });
          $(".plus").click(function(){
            var id=$(this).attr("id");
            console.log(id);
            plus_internal(id)
          });
          $(".minus").click(function(){
            var id=$(this).attr("id");
            minus_internal(id)
          });

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
                console.log(data)
                var button="";
                  for(i=0;i<data.length;i++){
                      button+="<div class='col-sm-4 ' style='margin-top:8px;'><div class='card' >";
                      button+="<div class='card-title '>";
                      button+="<img src='../order/"+data[i]['menu_photo']+"' width=90% height=90% style='padding-left:5%;'><br></div>";
                      button+="<div class='card-body'><h4>";
                      button+=data[i]['item_name'];
                      let y=data[i]['item_name'].replace(" ","-")
                      console.log(y)
                      button+="<div><h5>Quantity :</h5><img onclick='minus(this)' class='minus' id='"+y+"' src='../images/minus.png' width=30px height=30px><span id='order"+y+"'>  0  </span><img class='plus' onclick='plus(this)' id='"+y+"' src='../images/plus.png' width=30px height=30px></div>";
                     // button+="<div><h5>Quantity :</h5><img class='minus' id='"+data[i][i]['item_name']+"' src='../images/minus.png' width=30px height=30px><span id='order"+data[i]['item_name']+"'>  0  </span><img class='plus' id='"+data[i]['item_name']+"' src='../images/plus.png' width=30px height=30px></div>";
                      // button+="<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#take_order_modal' onclick=\"takeOrder('"+data[i]['item_name']+"','"+data[i]['price']+"')\" style='float:right;'>"+"Order</button>";
                      button+="</h4></div></div></div>";
                      }
                      document.getElementById("menus").innerHTML=button;
                      // $("#menus").html(button);
              },
              error:function(error){
                alert("Some error is there while filtering");
              }
            });
          });
          $('#searching_menu').keyup(function(){
            var value=$(this).val();
            sql="Select * from menu where item_name LIKE '%"+value+"%'";
            console.log(sql)
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
                      let y=data[i]['item_name'].replace(" ","-")
                      console.log(y)
              
                      button+="<div><h5>Quantity :</h5><img onclick='minus(this)' class='minus' id='"+y+"' src='../images/minus.png' width=30px height=30px><span id='order"+y+"'>  0  </span><img onclick='plus(this)' class='plus' id='"+y+"' src='../images/plus.png' width=30px height=30px></div>";
                     // button+="<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#take_order_modal' onclick=\"takeOrder('"+data[i]['item_name']+"','"+data[i]['price']+"')\" style='float:right;'>"+"Order</button>";
                      button+="</h4></div></div></div>";
                      }
                      // $("#menus").html(button);
                      document.getElementById("menus").innerHTML=button;
              },error:function(error){
                alert("Some error while searching");
              }
            });
          });
          
        });
    </script>
</head>
<body >
    <div>
     <input type="text" name="searching_menu" id="searching_menu" placeholder="search menu items">
        <?php
          // $result=$order->get_temp_tables("Select * from ");
          $result=$order->get_temp_tables("Select category from `categories`",1);
          echo "<button type='button' class='category_filter' id='all'>All</button>";
          if( $result=$order->get_temp_tables("Select category from `categories`",1)){
            $btn="";
            foreach($result as $a){
              $btn.="<button type='button' class='category_filter' id='".$a['category']."'>".$a['category']."</button>";
            }
            echo $btn;
          }
        ?>

        <div class="row">
             <div class=" col-xl-3 col-sm col-md-12" id="Order-info">
                <div class="card" style='margin-top:5px;box-shadow:2px 2px 2px rgba(0,0,0,0.4); border-radius:5px;'>
                    <div class="card-title">
                    <!-- <form action="" method="post"> -->
                        <h5>Customer Name: <span id="c_name" name="c_name" style="color:royalblue;font-style:italic;"></span></h5>
                        <input type="hidden" name="c_name2" id="c_name2">
                        <br>
                        <h6>Table number:</h6><span id="tb_number" name="tb_number"></span>
                        <br>
                     </div>
                    <div class="card1-body">
                       <input type="hidden" name="hidden_Data" id="hidden_Data">
                        <!-- <h6>Orders</h6> -->
                        <table id="order-table" style="text-align:center;">
                              <thead>
                                <th>Item</th>
                                <th>Quantity</th>
                              </thead>
                          </table>
                        <span id="list-orders" name="list-orders">
                         
                        </span>
                        <button type='submit' class="finalize_order btn btn-warning" name='final_placement'>Place Order</button>
                       <!-- </form> -->
                    </div>
                </div>
            </div>


            <div class=" col-xl-9 col-sm col-md-12">
            <?php
          if($order->get_menu_items()){
            echo "<div class='row' id='menus'>";
            foreach( $order->get_menu_items() as $result){
                echo "<div class='col-sm-4 ' style='margin-top:8px;'><div class='card' >";
                    echo "<div class='card-title '>";
                    echo "<img src='../order/".$result['menu_photo']."' width=90% height=90% style='padding-left:5%;'><br></div>";

                             echo "<div class='card-body'><h4>";
                             $y=str_replace(" ","-",$result["item_name"]);
                             echo $result['item_name'];
                            
                             echo "<div><h5>Quantity :</h5><img class='minus' id='".$y."' src='../images/minus.png' width=30px height=30px><span id='order".$y."'>  0  </span><img class='plus' id='".$y."' src='../images/plus.png' width=30px height=30px></div>";
                                // echo "<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#take_order_modal' onclick=\"takeOrder('".$result['item_name']."','".$result['price']."')\" style='float:right;'>"."Order</button>";
                                //<p class='card-text'>".$result['status']."<p><button class='btn btn-info' name='change_status' type='submit' onclick=\"change_status('".$result["status"]."')\">Change Status</button><i style='margin-left:4%;' class='far fa-eye'></i></p></p></form>";
                           echo "</h4></div>";
                echo"</div></div>";
                
            }
            echo "</div>";
        }
        ?>
            </div>
            
        </div>
    </div>
    

 
<!-- pre order form modal -->
  <div class="modal fade" id="pre_order" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="pre_orderLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="pre_orderLabel">Pre Order Form</h5>
        <button type="button" class="btn-close"  aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method='post'>
          <br><label for="">Table Number:</label>
          <select name="table_number1" id="table_number1" required>
            <option value="0">0</option>
          <?php
            $result=$order->get_tables_info();
            $value="";
            foreach($result as $a){
              $val=$a['table_number'];
              $value.="<option value='$val'>".$val."</option>";
            }    
            $value.="</select>";      
            echo $value;
          ?>
          <br>
          <p>
              <span>Has the customer booked room also?</span><br>
            Yes<input type="radio" name="room_also" id="yes"  onclick="document.getElementById('room_num').style.display='block';document.getElementById('customer_name1').disabled=true;console.log(document.getElementById('yes').value);">
            No<input type="radio" name="room_also" id="yes"  onclick="document.getElementById('room_num').style.display='none';;console.log(document.getElementById('yes').value);" checked>
          
          </p>
          <label for="">Customer Name:</label>
          <br><input type="text" name="customer_name1" id="customer_name1" onblur="document.getElementById('customer_name4').value=this.value" required>
          <input type="hidden" name="customer_name4" id="customer_name4" required>
          <br>
          
          <div id="room_num">
            <label for="">Room Number</label>
                        <?php
                          $sql="Select * from booking where still_exist=1";
                          $result=$order->get_temp_tables($sql,1);
                          $select="";
                          if($result>0){
                            $select.="<select name='room_number_select' id='room_number_select' onchange='select_room_number(this)'><option value=0>Select Room Number</option>";
                              foreach($result as $row){
                                $select.="<option value='".$row['room_number']."+".$row["customer_name"]."'>".$row['room_number']." (".$row["customer_name"].")"."</option>";
                              }
                            $select.="</select>";
                            echo $select;
                          }
                          else{
                            $select="<b>No Customers found</b>";
                            echo $select;
                          }
                        ?>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" >Close</button> -->
        <button type="button" class="btn btn-primary" id="place_order" name="place_order" >Proceed to Order</button>
        <a href='Overall_orders.php' style='text-decoration:none;background-color:lightcoral;color:white;padding:5px;border-radius:4px;'>View Orders</a>
      </div>
    </div>
  </div>
</div>
</div>
</body>
</html>

<?php

// include_once "../layout/footer.php";
?>
