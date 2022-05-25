<?php
include_once "../layout/header.php";
include_once "../classes/order_db.php";
$order=new Order();
// $table="<table class='table'><thead><th>S.N</th><th>Customer's Name</th><th>Room Number</th><th>Check in date</th><th>Email</th><th>Contact</th><th>Address</th><th>Payment</th><th>Actions</th></thead><tbody>";
// $sql="Select * from schedule_booking";
// $result=$order->get_temp_tables($sql,1);$i=0;
// if($result>0){
//    foreach($result as $row){
//         $table.="<tr><td>".++$i."</td><td>".$row['booking_on_name']."</td><td>".$row['room_number']."</td><td>".$row['estimated_check_in']."</td><td>".$row['booking_on_email']."</td>";
//         $table.="<td>".$row['booking_on_contact']."</td><td>".$row['address']."</td><td>".$row['payment']."</td><td><button><i class='fas fa-trash-alt'></i></button><button ><i class='fas fa-edit'></i></button><button type='button' data-bs-toggle='modal' data-bs-target='#check_in' id='".$row['booking_on_email']."'><i class='fas fa-check'></i></button></td></tr>";
//    }
//    echo $table."</tbody></table>";
// }
// else{
//     echo "No Booking has taken place";
// }
?>
<script>
$("document").ready(function(){
    var table="<table class='table'><thead><th>S.N</th><th>Customer's Name</th><th>Room Number</th><th>Check in date</th><th>Email</th><th>Contact</th><th>Address</th><th>Payment</th><th>Actions</th></thead><tbody>";
   
    var sql="Select * from schedule_booking";
    room_booking(sql);
    $("#searching").keyup(function(){
        var id=$(this).val();
        var sql="Select * from schedule_booking where booking_on_name like '%"+id+"%'";
        console.log(sql);
        room_booking(sql);
    });

    function room_booking(sql){
       
        $.ajax({
            url:"../ajax/ajax_post.php",
            data:{sql:sql},
            method:"post",
            success:function(data){
                data=JSON.parse(data);
                document.getElementById("tables").innerHTML="";
                var table="<table class='table'><thead><th>S.N</th><th>Customer's Name</th><th>Room Number</th><th>Check in date</th><th>Email</th><th>Contact</th><th>Address</th><th>Payment</th><th>Actions</th></thead><tbody>";
                console.log(data);
                for(i=0;i<data.length;i++){
                    table+="<tr><td>"+Number(i+1)+"</td><td>"+data[i]['booking_on_name']+"</td><td>"+data[i]['room_number']+"</td><td>"+data[i]['estimated_check_in']+"</td><td>"+data[i]['booking_on_email']+"</td>";
                    table+="<td>"+data[i]['booking_on_contact']+"</td><td>"+data[i]['address']+"</td><td>"+data[i]['payment']+"</td><td><button><i class='fas fa-trash-alt'></i></button><button ><i class='fas fa-edit' data-bs-toggle='modal' data-bs-target='#edit_data' id='"+data[i]['booking_on_name']+"' onclick=edit_room_number(this,'"+data[i]['estimated_check_in']+"','"+data[i]['room_number']+"','"+data[i]['booking_on_email']+"','"+data[i]['booking_on_contact']+"')></i></button><button type='button' data-bs-toggle='modal' data-bs-target='#check_in' id='"+data[i]['booking_on_name']+"' onclick=get_room_number(this,'"+data[i]['estimated_check_in']+"','"+data[i]['room_number']+"','"+data[i]['booking_on_email']+"','"+data[i]['booking_on_contact']+"')><i class='fas fa-check'></i></button></td></tr>";
                }
                table+="</tbody></table>";
                document.getElementById("tables").innerHTML=table;
            }
        });
    }
});
function get_room_number(x,y,z,p,address,contact){
    console.log(x.id,y,z);
    document.getElementById('room_number').value=z;
    document.getElementById('date1').value=y;
    document.getElementById('booking_name').value=x.id;    
    document.getElementById('booking_email').value=p;
    var date=new Date();
    var strin="";
    var get_month=date.getMonth();
    var get_day=date.getDate();
    get_month+=1;
    console.log(strin);
    var get_second=date.getSeconds();
    var get_minute=date.getMinutes();
    if(get_second<10){
        get_second=add_zero(get_second);
    }
    if(get_minute<0){
        get_minute=add_zero(get_minute);
    }
    get_hours=date.getHours();
    if(get_hours<0){
        get_hours=add_zero(get_hours);
    }
    strin=get_hours+":"+get_minute+":"+get_second;
    console.log(strin);
     document.getElementById('time1').value=strin;
     if(get_month<10)
        {get_month=add_zero(get_month);}
        if(get_day<10) get_day=add_zero(get_day);
        strin=date.getFullYear()+"-"+get_month+"-"+get_day;
        document.getElementById('date2').value=strin;
        var room_availability=document.getElementById("room_availability");
     if(strin!=y){
         $.ajax({
             url:"../ajax/ajax_room_availability.php",
             method:"post",
             data:{room_number:z},
             success:function(data){
                data=JSON.parse(data);
                let avail="<br>Room Availability: <b>";
                alert(data[0]['isempty'])
                if(data[0]['isempty']=="true"){
                    avail+="<span style='color:white;border-radius:8px;padding:5px 8px;background-color:green;'>"+data[0]['isempty']+"</span>";
                }
                else{
                    avail+="<span style='color:white;border-radius:8px;padding:5px 8px;background-color:red;'>"+data[0]['isempty']+"</span>";
                }
                avail+="</b>";
                room_availability.innerHTML=avail;
                if(data[0]['isempty']=="false"){
                     document.getElementById('check_in_button').disabled=true;
                    room_availability.innerHTML+="<br>";
                }
             },
             error:function(error){
                 alert("Some problem in fetching room availability");
             }
         })
     }
}
    function add_zero(data){
            var string="0"+data;
            return string;
    }
</script>
<div class="container">
    <input type="text" name="searching" id="searching" >
    <span id="tables">

    </span>
</div>

<div class="modal fade" id="edit_data" tabindex="-1" aria-labelledby="edit_dataLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="check_inLabel">Check in Booked Rooms</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                        <label for="">Room Number</label>
                        <br><input type="text" name="room_number" id="room_number" > 
                        <!-- disabled> -->
                        <br><label for="">Name</label>
                        <br><input type="text" name="booking_name" id="booking_name" >
                        <br><label for="">Email</label>
                        <br><input type="text" name="booking_email" id="booking_email" style="width: 350px;" >
                        <br> <label for="">Estimated Check In Date</label>
                        <br><input type="text" name="date1" id="date1"> 
                        <!-- disabled> -->
                        <br> <label for=""> Check In Date</label>
                        <br><input type="text" name="date2" id="date2"> 
                        <!-- disabled> -->
                        <br><label for="">Check in Time</label>
                        <br><input type="text" name="time1" id="time1"> 
                        <!-- disabled> -->
                        <br><label for="">Certification Type:</label>
                        <select name="certification" class="form-control" required>
                            <option value="">Select Certification Type</option>
                            <option value="citizenship">Citizenship</option>
                            <option value="license">License</option>
                            <option value="voter_id">Voter ID</option>
                        </select>
                        <label for="">Document Number</label>
                        <input type="text" name="documentnumber" class="form-control" required>
                        <span id="room_availability">

                        </span>
            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name='check_in_button' id='check_in_button' class="btn btn-primary">Check In </button>
                        </div>
                    </form>
        </div>
    </div>
</div>

<div class="modal fade" id="check_in" tabindex="-1" aria-labelledby="check_inLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="check_inLabel">Check in Booked Rooms</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                        <label for="">Room Number</label>
                        <br><input type="text" name="room_number" id="room_number" > 
                        <!-- disabled> -->
                        <br><label for="">Name</label>
                        <br><input type="text" name="booking_name" id="booking_name" >
                        <br><label for="">Email</label>
                        <br><input type="text" name="booking_email" id="booking_email" style="width: 350px;" >
                        <br> <label for="">Estimated Check In Date</label>
                        <br><input type="text" name="date1" id="date1"> 
                        <!-- disabled> -->
                        <br> <label for=""> Check In Date</label>
                        <br><input type="text" name="date2" id="date2"> 
                        <!-- disabled> -->
                        <br><label for="">Check in Time</label>
                        <br><input type="text" name="time1" id="time1"> 
                        <!-- disabled> -->
                        <br><label for="">Certification Type:</label>
                        <select name="certification" class="form-control" required>
                            <option value="">Select Certification Type</option>
                            <option value="citizenship">Citizenship</option>
                            <option value="license">License</option>
                            <option value="voter_id">Voter ID</option>
                        </select>
                        <label for="">Document Number</label>
                        <input type="text" name="documentnumber" class="form-control" required>
                        <span id="room_availability">

                        </span>
            </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                            <button type="submit" name='check_in_button' id='check_in_button' class="btn btn-primary">Check In </button>
                        </div>
                    </form>
        </div>
    </div>
</div>

    <?php
        if(isset($_POST["check_in_button"])){
            $room_number=$_POST["room_number"];
            $date=$_POST["date2"];
            $time=$_POST["time1"];
            $email=$_POST['booking_email'];
            $sql="Select * from schedule_booking where booking_on_email='$email'";
            $certification_type=$_POST['certification'];
            $document_number=$_POST['documentnumber'];
            $result=$order->get_temp_tables($sql,1);
            echo $sql;
            foreach($result as $row){
                $estimated_check_out=$row['estimated_check_out'];
                $booking_on_name=$row["booking_on_name"];
                $booking_on_contact=$row["booking_on_contact"];
                $address=$row["address"];
                $payment=$row["payment"];
            }
           $sql="INSERT INTO `booking`(`room_number`, `check_in_date`, `check_out_date`, `customer_name`, `email`, `contact`, `address`, `certification_type`, `document_number`, `check_in_time`,`still_exist`)";
           $sql.=" VALUES ('$room_number','$date','$estimated_check_out','$booking_on_name','$email','$booking_on_contact','$address','$certification_type','$document_number','$time',DEFAULT)";
             $order->insert_to_booking($sql);
            $sql="Delete from schedule_booking where booking_on_email='$email'";
             $order->insert_to_booking($sql);
        }   
    ?>