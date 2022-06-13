<?php
include_once "../layout/header.php";
?>
<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assigned Rooms</title>
    <script>
        function generating_bills(name,room_number){
            table="<table class='table'><thead><th>S.N</th><th>Food_Item</th><th>Quantity</th><th>Price</th><th>Date</th><th>Time</th></thead>";
            $.ajax({
                url:"../ajax/ajax_checkout_bill.php",
                data:{name:name,room_number:room_number},
                method:"post",
                success:function(data){
                //    if(data!="no_table")// table existence checking condition
                   {
                    data=JSON.parse(data);
                    console.log(data);
                    total_food=0;
                    for(i=0;i<data.length;i++){
                        total_food+=data[i]['price'];
                        table+="<tr>"+"<td>"+Number(i+1)+"</td>"+"<td>"+data[i]['order_name']+"</td>"+"<td>"+data[i]['quantity']+"</td>"+"<td>"+data[i]['price']+"</td>"+"<td>"+data[i]['date1']+"</td>"+"<td>"+data[i]['time1']+"</td>"+"</tr>";
                    }
                    if(data.length>=1) {
                        table+="<tr><td></td><td></td><td></td><td></td></tr>";
                             document.getElementById('checkout_bill').innerHTML=table;
                        }
                    else document.getElementById('checkout_bill').innerHTML="<br><b><i>No records for resturant Order exists</i></b>";
                    document.getElementById("bill_total").value=total_food;
                   }
                //    else{
                //     document.getElementById('checkout_bill').innerHTML="<br><b><i>No records for resturant Order exists</i></b>";
                //    }
                },
                error:function(error){
                    alert("Some error in genrating bills plz redo the action for checkout")
                }
            });

        }


        function check_out(contact){
            $("#customer_info").modal('show');
            var sql="Select * from booking where contact='"+contact+"'";
            $.ajax({
                url:"../ajax/ajax_post.php",
                method:"post",
                data:{sql:sql},
                success:function(data){
                    data=JSON.parse(data);
                    console.log(data);
                    $("#customer_info").modal("show");
                    document.getElementById("customer_name").innerHTML=data[0]['customer_name'];
                    document.getElementById("contact1").value=contact;
                    document.getElementById("room_number1").value=data[0]['room_number'];
                    date1=new Date(data[0]['check_in_date']);
                    date_today=new Date();
                    difference=date1.getDate()-date_today.getDate();
                    totall=Number(difference*data[0]['amount_to_pay']);
                    document.getElementById("room_total").value=totall;
                    document.getElementById('room_info').innerHTML="<table class='table'><thead><th>S.N</th><th>Checked in Date</th><th>Price/night</th><th>Total Days</th></thead><tbody><tr><td>1</td><td>"+data[0]['check_in_date']+"</td><td>"+data[0]['amount_to_pay']+"</td><td>"+difference+"</td></tr><tr><td></td><td>Sub-Total</td><td>"+totall+"</td></tr></tbody></table>";
                    generating_bills(data[0]['customer_name'],data[0]['room_number']);
                    // room_bills(data[0]['customer_name'],data[0]['room_number'],data[0]['']);

                },
                error:function(error){
                    alert("Error in fetching data");
                }
            })
        }

            function perform_check_out(){
            var contact1=document.getElementById("contact1").value;
            var room_number1=document.getElementById("room_number1").value;
            console.log(contact1);
            var today = new Date();
            var totall=0;
            totall=Number(document.getElementById("room_total").value)+Number(document.getElementById("bill_total").value);
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time=today.getHours()+':'+(today.getMinutes())+':'+today.getSeconds();
            var sql="Update booking set still_exist=0,amount_to_pay='"+totall+"', check_out_date='"+date+"',check_out_time='"+time+"' where contact='"+contact1+"';";
            checking_out(sql,"../ajax/ajax_check_out.php",0);
            sql="Update `roomnumber` set isempty='true' where roomnumber='"+room_number1+"';";
            checking_out(sql,"../ajax/ajax_check_out.php",0);            
            sql="select roomname from roomnumber where roomnumber="+room_number1;
            // sql+="Update `rooms` set `occupied_rooms`=`occupied_rooms`-1 where room_name=";            

            checking_out(contact1[0]['customer_name'],"../ajax/ajax_final_data_movement_temp_table.php",0);
            checking_out(sql,"../ajax/ajax_post.php",0);
            
            }

            function checking_out(sql,url,indx){
                $.ajax({
                    url:url,
                    method:"post",
                    data:{sql:sql},
                    success:function(data){
                        console.log(data,sql,indx)
                        if(url=="../ajax/ajax_post.php"){
                            data=JSON.parse(data);
                            sql2="Update `rooms` set `occupied_rooms`=`occupied_rooms`-1 where room_name='"+data[0]['roomname']+"'";
                            checking_out(sql2,"../ajax/ajax_check_out.php",1);
                            
                        }
                     if(indx==1) location.href=location.href;
                    },
                    error:function(error){
                        alert("Error while performing check out please try again ")
                    }
                })
            }

        $("document").ready(function(){
            var sql="Select * from booking where still_exist=1";
            var row="";
            $.ajax({
                url:"../ajax/ajax_post.php",
                method:"post",
                data:{sql:sql},
                success:function(data){
                   if(data!="[]"){
                       total_food=0.0;
                    data=JSON.parse(data);
                   for(i=0;i<data.length;i++)
                   {
                    row+="<tr><td>"+Number(i+1)+"</td><td>"+data[i]['room_number']+"</td><td>"+data[i]['customer_name']+"</td><td>"+data[i]['check_in_date']+"</td><td><button onclick=check_out('"+data[i]['contact']+"')>Check Out</button></td></tr>";
                   }
                    $("#checked_in_customer").append(row);
                   }
                   else{
                       var send_warning="<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error:</strong>No Data Found. <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>";
                       $(".container").html(send_warning);
                   }
                },
                error:function(error){
                    alert("Some error while extracting data")
                }
            });
        })
    </script>
</head>
<body>
    <div class="container">
        <table class="table" id='checked_in_customer'>
            <thead>
                <th>S.N</th>
                <th>Room Number</th>
                <th>Customer Name</th>
                <th>Check in Date</th>
                <th>Check Out</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="customer_info" tabindex="-1" aria-labelledby="customer_infoLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="customer_infoLabel">More Info</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <p>Are you sure you want to perform check out operation?</p>
            <p>Customer Name: <span id="customer_name"></span> 

            <span id="room_info">

            </span>
               <span id="checkout_bill">

               </span>
                <input type="hidden" id="contact1">
                <input type="hidden" id="room_number1">
                <input type="hidden" id="room_total">
                <input type="hidden" id="bill_total">
            </p>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
            <button type="button" onclick="perform_check_out()" class="btn btn-primary">Yes</button>
        </div>
        </div>
    </div>
    </div>
</body>
</html>