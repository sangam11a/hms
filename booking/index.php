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
   $payment=$_POST['paying_amt'];
   $here=$order->updating_roomnumber("Insert into schedule_booking(room_number,estimated_check_in,estimated_check_out,booking_on_name,booking_on_email,booking_on_contact,address,payment) values('$roomnumber','$checkin','$checkout','$name','$email',$contact,'$address',$payment)");
   
   if($here==1){
    echo "<div class='alert alert-success' role='alert'>
    Booking placed by $name for estimated check in date $checkin has been confirmed.
   </div>";
   }
   if($here==0){
      echo "<div class='alert alert-danger' role='alert'>
       Booking failed(Looks like the room is already occupied) Please assign another room to the user and try again.
       </div>";
   }
}

?>
<script>
    function want_to_pay(){
       if(document.getElementById("payment_done").value=="Yes"){
        document.getElementById("paid_amt").innerHTML="<label>Paying Amount:</label><input class='form-control' min=0 type='number' name='paying_amt' id='paying_amt' required>";
       }
       else{
        document.getElementById("paid_amt").innerHTML="<label>Paying Amount:</label><input class='form-control' type='hidden' name='paying_amt' id='paying_amt' value=0>";
       }
          }
</script>
<h2>Schedule Booking</h2>
<h4>Room Details:</h4>
<form action="" method="POST">
    <label for="">Room Number</label>
    <select name="roomnumber" class="form-control" required>
        <option value="">Select Room Number</option>
        <?php 
        include_once "../classes/order_db.php";
        $order=new Order();
        $sql="Select * from roomnumber where isempty='true'";
            if($order->get_temp_tables($sql,1) > 0): 
                foreach($order->get_temp_tables($sql,1) as $room): 
        ?>
        <option value="<?=$room['roomnumber']?>"><?php echo $room['roomnumber']. ",Room name:[".$room['roomname']." ] Room type:[".$room['roomtype']."]" ?></option>
        <?php 
                endforeach;
            endif;
        ?>
    </select>
    <label for="">Estimated Check In Date</label>
    <input class="form-control" type="date" name="checkin" min="<?=date("Y-m-d")?>">
    <label for="">Estimated Check Out Date</label>
    <input class="form-control" type="date" name="checkout" min="<?=date("Y-m-d")?>">
    <h4>Customer Details</h4>
    <label for="">Full Name</label>
    <input type="text" name="name" class="form-control" required>
    <label for="">Email</label>
    <input type="email" name="email" class="form-control" required>
    <label for="">Contact</label>
    <input type="tel" name="contact" id="contact" class="form-control" required>
    <label for="">Address</label>
    <input type="text" name="address" id="address" class="form-control">
    <label for="">Payment on booking</label>
     <select name="payment_done" id="payment_done" class="form-control" onclick="want_to_pay()" required >
         <option value="">Choose paid or not</option>
         <option value="Yes">Yes</option>
         <option value="No">No</option>
     </select>
     <span id="paid_amt"></span>
    <button type="submit" name="booking" class="mt-2 btn btn-primary form-control">Assign</button>
</form>
<div>
</div>
<?php 

include_once "../layout/footer.php";
?>