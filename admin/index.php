<?php
include_once "../layout/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>See transactions</title>
    <script>
        function ajax_call(x){
            console.log(x.length)
         if(x.length!=0)
           {
            $.ajax({
            url:"ajax_transactions.php",
            data:{sql:x},
            method:"post",
                success:function(data){
                    data=JSON.parse(data);
                    let table;
                    document.getElementById("tables").innerHTML="";
                    document.getElementById("trans").style.display="none";
                    // var table="<table class='table'><thead><td>S.N</td><td>Customer's Name</td><td>Room Number</td><td>Check in date</td><td>Email</td><td>Contact</td><td>Address</td><td>Payment</td><td>Actions</td></tdead><tbody>";
                    if(data.length>0){
                        table="<caption><h2>Transactions</h2></caption><table class='table'><tr><td>S.N</td><td>Table Number</td><td>Customer's Name</td><td>Food </td><td>Quantity</td><td>Date</td><td>Time</td><td>Payment Status</td></tr>";
                        console.log(data);
                        for(i=0;i<data.length;i++){
                            table+="<tr><td>"+Number(i+1)+"</td><td>"+data[i]['table_number']+"</td><td>"+data[i]['customer_name']+"</td><td>"+data[i]['food_item']+"</td><td>"+data[i]['quantity']+"</td>";
                            table+="<td>"+data[i]['date1']+"</td><td>"+data[i]['time1']+"</td><td>";
                            if(data[i]['payment']=="0") table+="<span style='color:white;background-color:red;border-radius:10px;padding:5px 7px;'>Unpaid</span>";
                            else table+="<span style='color:white;background-color:green;border-radius:10px;padding:5px 7px;'>Paid("+data[i]["payment_mode"]+")</span>";
                            // table+="</td><td><button><i class='fas fa-trash-alt'></i></button><button ><i class='fas fa-edit'></i></button><button type='button' data-bs-toggle='modal' data-bs-target='#check_in' id='"+data[i]['booking_on_name']+"' onclick=get_room_number(this,'"+data[i]['estimated_check_in']+"','"+data[i]['room_number']+"','"+data[i]['booking_on_email']+"','"+data[i]['booking_on_contact']+"')><i class='fas fa-check'></i></button></td></tr>";
                        }
                        table+="</tbody></table>";
                    }
                    else{
                        table="<span>Sorry , No having character "+x+" found.</span>"
                    }
                    document.getElementById("tables").innerHTML=table;
                 }
            });
           }
           else{
               document.getElementById("tables").innerHTML=" ";
               document.getElementById("trans").style.display="block";
           }
        }
    </script>
</head>
<body>
    <input type="text" placeholder="Search Transactions" id="search_trans" onkeyup="ajax_call(this.value)">
    <div id="tables"></div>
</body>
</html>
<?php
include_once "../classes/dynamic_table.php";
echo "<div id='trans'>";
table("Transactions",
["S.N","Table Number","Customer Name","Foods","Quantity","Price","Date","Time"],
["id","table_number","customer_name","food_item","quantity","price","date1","time1"],10,"sold_items");
echo "</div>";
?>