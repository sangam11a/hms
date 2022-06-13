<?php 
include_once "../layout/header.php";
include_once "../classes/order_db.php";
include_once "../classes/roomnumber.class.php";
include_once "../classes/rooms.class.php";
$order=new Order();
$room_number=new RoomNumber();
$room=new Rooms();
if(isset($_POST["booking"])){
   $roomnumber= $_POST["roomnumber"];
   $checkin =$_POST["checkin"];
   $checkout =$_POST["checkout"];
   $name =$_POST["name"];
   $email =$_POST["email"];
   $contact =$_POST["contact"];
   $address =$_POST["address"];
   $certification =$_POST["certification"];
   $document_number =$_POST["documentnumber"];
   $time=date("H:i:s");
   $extra_bed=$_POST['extra_bed'];
    $laundry=$_POST['laundry'];
    $taxi=$_POST['taxi'];
    if($taxi=='1'){
        $taxi_km=$_POST['taxi_km'];
    }
    else{
    $taxi_km=0;
    }
   $x=1;$error="";$count=0;
//   $r1=;
    foreach($order->get_temp_tables("Select * from schedule_booking ",1) as $row){
        if($row["room_number"]==$roomnumber&&$checkin==$row["estimated_check_in"]){
            $count++;
        }
    }
  if($count==0)
    {$ttt=$order->insert_to_booking_normal($roomnumber,$checkin,$checkout,$name,$email,$contact,$address,$certification,$document_number,$extra_bed,$laundry,$taxi_km);
        // echo $ttt;
        if($ttt=="1"){
            if(!$order->updating_roomnumber("Update `roomnumber` set isempty='false' where roomnumber='$roomnumber' and isempty='true';"))
                { 
                    $x=0;
                }
              $result1=$order->get_temp_tables("Select roomname from `roomnumber` where roomnumber='$roomnumber'",1);
                   if(count($result1)){
                           foreach($result1 as $a){
                               $fetched_room=$a["roomname"];
                           }
                    }
                   else{ $x=0;$error.="Error while fetching rooms. ";}
                   if(!$order->updating_roomnumber("Update `rooms` set `occupied_rooms`=`occupied_rooms`+1 where room_name='".$fetched_room."';")){
                        $x=0;
                        $error.="Error while updating occupied rooms. ";
                   }
              }
              else {$x=0;$error.="Error while assigning rooms.Looks like room is occupied ";}
              if($x==1){
                echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>
                <strong>Success : </strong>Room number $roomnumber Successfully assigned to $name
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
        }
        else{
                echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'>
                <strong>Error : </strong>$error
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
              </div>";
            }
    }
    else{
        echo "<div class='alert alert-info alert-dismissible fade show' role='alert'>
        <strong>Error:</strong>Room number $roomnumber has been booked if you want to continue Plz change status of $roomnumber or choose another room number.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
      </div>";
    }
    
    
} 


?>
<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check In</title>
    <script>
    function taxi1(getValue){
        console.log(getValue.value);
        if(getValue.value==1){
            document.getElementById('taxi_yes').innerHTML="Distance in KM:<input type='text' name='taxi_km' id='taxi_km'>";
        }else{
            document.getElementById('taxi_yes').innerHTML="";
        }
    }
</script>
</head>
<body>
        <h2>Assign Rooms</h2>
        <h4>Room Details:</h4>
        <form action="" method="POST">
            <label for="">Room Number</label>
            <select name="roomnumber" class="form-control" required>
                <option value="">Select Room Number</option>
                <?php 
                include_once "../classes/order_db.php";
                $order=new Order();
                $sql="Select * from roomnumber ";//where isempty='true'
                    if($order->get_temp_tables($sql,1) > 0): 
                        foreach($order->get_temp_tables($sql,1) as $room): 
                ?>
                <option value="<?=$room['roomnumber']?>"><?php echo $room['roomnumber']. ", Room Name:[".$room['roomname']."],   Room Type:[" .$room['roomtype']."]"?></option>
                <?php 
                        endforeach;
                    endif;
                ?>
            </select>
            <label for="">Check In Date</label>
            <input class="form-control" type="date" name="checkin" min="<?=date("Y-m-d")?>">
            <label for="">Check Out Date</label>
            <input type="date" name="checkout" class="form-control" min="<?=date("Y-m-d")?>">
            <h4>Customer Details</h4>
            <label for="">Full Name</label>
            <input type="text" name="name" class="form-control" required>
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" required>
            <label for="">Contact</label>
            <input type="tel" name="contact" id="contact" class="form-control" required>
            <label for="">Address</label>
            <input type="text" name="address" class="form-control" required>
            <label for="">Certification Document</label>
            <select name="certification" class="form-control">
                <option value="">Select Certification Type</option>
                <option value="citizenship">Citizenship</option>
                <option value="license">License</option>
                <option value="voter_id">Voter ID</option>
            </select>
            <label for="">Document Number</label>
            <input type="text" name="documentnumber" class="form-control" required>
            <br> <h3>Extras</h3>
            <label for="">Do you want A/C?</label>
            <select name="ac_details" id="ac_details">        
                <option value="No" default>No</option>
                <option value="Yes">Yes</option>        
            </select>
            <br><label for="">No of extra bed(Extra Bed 500 INR per night):</label>
            <input type="text" name="extra_bed" id="extra_bed" class="form-control">
            <label for="">Laundry(20 INR/piece):</label>
            <input type="text" name="laundry" id="laundry" class="form-control" value=0>
            <label for="">Taxi</label>
            <select name="taxi" id="taxi" onchange='taxi1(this)'>
                    <option value=0>No</option>
                    <option value=1>Yes</option>
            </select>
            <div id="taxi_yes"></div>
            <button type="submit" name="booking" class="mt-2 btn btn-primary form-control">Assign</button>
        </form>
        <div>
        </div>
</body>
</html>


<?php 

include_once "../layout/footer.php";
?>

