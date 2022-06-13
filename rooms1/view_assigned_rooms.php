<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
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
        function more_info(contact){
            console.log(contact)
            $("#customer_info").modal('show');
            var sql="Select * from booking where contact='"+contact+"'";
            $.ajax({
                url:"../ajax/ajax_post.php",
                method:"post",
                data:{sql:sql},
                success:function(data){
                    data=JSON.parse(data);
                    console.log(data);
                    document.getElementById("customer_name").value=data[0]['customer_name'];
                    document.getElementById("check_in_date").value=data[0]['check_in_date'];
                    document.getElementById("contact").value=data[0]['contact'];
                    document.getElementById("room_number").value=data[0]['room_number'];
                    document.getElementById("email_id").value=data[0]['email'];
                    document.getElementById("address").value=data[0]['address'];
                    document.getElementById("certification_type").value=data[0]['certification_type'];
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
                    data=JSON.parse(data);
                    console.log(data)
                   if(data.length!=0){
                            for(i=0;i<data.length;i++)
                        {
                            row+="<tr><td>"+Number(i+1)+"</td><td>"+data[i]['room_number']+"</td><td>"+data[i]['customer_name']+"</td><td>"+data[i]['check_in_date']+"</td><td><button onclick=more_info('"+data[i]['contact']+"')>More info</button></td></tr>";
                        }
                            $("#checked_in_customer").append(row);
                   }
                   else{
                    var send_warning="<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error:</strong>Not a single room has been assigned <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>";
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
                <th>Checked in Date</th>
                <th>More Info</th>
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
            
        <br><label for="">Customer Name</label>
        <br><input type="text" name="customer_name" id="customer_name">
        <br><label for="">Checked In Date</label>    
        <br><input type="text" name="check_in_date" id="check_in_date">
            <br><label for="">Contact</label>
            <br><input type="text" name="contact" id="contact">
            <br><label for="">Room Number</label>
            <br><input type="text" name="room_number" id="room_number">
            <br><label for="">Email</label>
            <br><input type="text" name="email_id" id="email_id">
            <br><label for="">Address</label>
            <br><input type="text" name="address" id="address">
            <br><label for="">Certification Type</label>
            <br><input type="text" name="certification_type" id="certification_type">

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <!-- <button type="button" class="btn btn-primary">Ok</button> -->
        </div>
        </div>
    </div>
    </div>
</body>
</html>