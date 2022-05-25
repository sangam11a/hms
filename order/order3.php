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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <title>Overall Orders</title>
    <style>
      body{
        background-color: whitesmoke;
      }
        .numberCircle {
    border-radius: 50%;
    width: 44px;
    height: 44px;
    padding: 8px;
    margin-left:30%; 
    margin-top:7px;       
    background: #fff;
    border: 2px solid #666;
    color: #666;
    text-align: center;
    font-weight:bold;
    font: 30px Arial, sans-serif;
  }
  .shadow{
    box-shadow: 3px 3px 3px black;
    border-radius:2%;
  }
    </style>
    <script>
      function increase_quantity(h){
        var y=document.getElementById('quantity').innerHTML;
        console.log(h);
        var x=Number(y);
        y=x;
      }
      function decrease_quantity(h){
        var y=document.getElementById('quantity').innerHTML;
        console.log(h.parent());
        var x=Number(y);
        y=x;
        
      }

      // function delete_item(h){
      //   console.log(h);
      //   delete_order(h);
      // }

      function here(qty,price,item,table_name){
              console.log(name);
              $.ajax({
                url:"../ajax/ajax_cancel_order.php",
                data:{qty:qty,price:price,item:item,table_name:table_name},
                method:"post",
                success:function(data){
                  //   data=JSON.parse(data);
                  // console.log(data);
                  location.href=location.href;
                }
              });
            }
            
        $(document).ready(function(){

          

            $(".jqery").click(function(){
                var name=$(this).attr("id");
                var totalprice=0;
                console.log(name);
                $.ajax({
                url:"get_tables.php",
                method:"post",
                data:{name},
                success:function(data){
                   console.log(data);
                   console.log(data.length);
                  data=JSON.parse(data);
                   
                   document.getElementById('view_ordersLabel').innerHTML="Table number : "+name;
                   var table="<table class='table'><thead><tr><th>ID</th><th>Order Name</th><th>Quantity</th><th>Price</th><th>Cancel Order</th></tr></thead>";
                   if(data.length==0){
                   document.getElementById("table_here").innerHTML="<h5>No order found</h5>";
                   }
                   else{
                    for(i=0;i<data.length;i++){
                        totalprice+=Number(data[i]['price']);
                    table+="<tr><td>"+Number(i+1)+"</td><td>"+data[i]['food_item']+"</td><td> <span class='quantity' id='"+i+"'>"+data[i]['quantity']+"</td><td>"+data[i]['price']+"</td><td><i class='fas fa-trash' onclick=here('"+data[i]['quantity']+"','"+data[i]['price']+"','"+data[i]['food_item']+"','"+name+"')></i></td></tr>" ;
                    
                    // tab+="<tr><td>"+1+"</td><td>['food_item']</td><td>'quantity']</td><td>'price']</td></tr>" ;
                   }
                   table+="<tr><td></td><td></td><td>Total: "+totalprice+"</td><td>"+"<form action='payment.php' method='post'>"+"<button type='submit' value='"+name+"' name='pay' id='pay' class='pay btn btn-warning'>Pay</button></form></td></tr></table>";
                   document.getElementById("table_here").innerHTML=table;
                   }

                },
            });
            });
            
         $("#plus").click(function(){
           console.log('icon click')
         });
            $("#minus").click(function(){
              console.log("minus");
            });
        });
    </script>
</head>
<body>
    <div>
        <span id="information"></span>
    <form method='post' action=''>
        <input type="hidden" name="table_number" name="table_number" >
        <?php
            if($order->get_tables_info()){
                echo "<div class='row'>";
                foreach( $order->get_tables_info() as $result){
                    echo "<div class='shadow col-sm-4' style='margin-top:8px;'><div class='card' >";
                        echo "<div class='card-title '><h3>Table No:</h3> <div class='numberCircle'>";
                        echo $result["table_number"]."</div></div>";
                                 echo "<div class='card-body'>";
                                 if($result['status']=="empty"){
                                  echo "<h4 class='card-text bg-danger' style='padding-left:35%;color:white;'>".$result['status']."</h4><p>";
                                 }
                                 else{
                                  echo "<h4 class='card-text bg-success' style='padding-left:35%;color:white;'>".$result['status']."</h4><p>";
                                 }
                                    echo "<button name='change_status' class='btn btn-info' type='submit' onclick='this.value=".$result['table_number']."'>Empty Table</button>";
                                    // echo "<i id='view_ordered_list' style='margin-left:24%;' class='far fa-eye' data-bs-toggle='modal' data-bs-target='#view_ordered_list'></i><input type='hidden' name='view_list'  id='view_list'>";
                                    // echo "<button name='change_status' class='btn btn-info' type='submit' onclick='this.value=".$result['table_number']."'>View Orders</button>";
                                //     echo "<button type='button' name='view_orders_button' id='view_orders_button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#view_orders' onclick='change_status(\"".$result['table_number']."\")'>     View orders
                                //   </button>";
                                
                                  echo "<button type='button' id='".$result['table_number']."' class='jqery btn btn-primary' data-bs-toggle='modal' data-bs-target='#view_orders' >"."View Order</button>";
                                    echo "</p></form>";
                                echo "</div>";
                    echo"</div></div>";
                    
                }
                echo "</div>";
            }
        ?>
    </div>

    <!-- Modal -->
<div class='modal fade' id='view_orders' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='view_ordersLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h4 class='modal-title' id='view_ordersLabel'>
           
        </h4>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>
        <div id='table_here' class='table_here'>

        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal for pay -->
<div class='modal fade' id='view_orders' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='view_ordersLabel' aria-hidden='true'>
  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h4 class='modal-title' id='view_ordersLabel'>
           
        </h4>
        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
      </div>
      <div class='modal-body'>        
         <div id='table_here' class='table_here'>

         </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>
<?php
if(isset($_POST["change_status"])){
    $number=$_POST["change_status"];
    $order->change_table_status($number);
    // $order->
}
// if(isset($_POST["view_orders_button"])){
// echo "
// <div class='modal fade' id='view_orders' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='view_ordersLabel' aria-hidden='true'>
//   <div class='modal-dialog'>
//     <div class='modal-content'>
//       <div class='modal-header'>
//         <h5 class='modal-title' id='view_ordersLabel'>
//             <span class='order_titles' id='order_titles'>

//             </span>
//         </h5>
//         <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
//       </div>
//       <div class='modal-body'>
//         <div id='table_here' class='table_here'>

//         </div>
//       </div>
//     </div>
//   </div>
// </div>
// ";

// }
?>

<?php
include_once "../layout/footer.php";
?>