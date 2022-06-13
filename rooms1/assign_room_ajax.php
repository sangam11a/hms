<?php 
include_once "../layout/header.php";

$Rooms = new Rooms();
$RoomNumber = new RoomNumber();
$Customer = new Customer();
$Booking = new Booking();

?>
<script>
    $("document").ready(function(){
        function ajax_operation(sql,i){
            $.ajax({
                url:"../ajax/ajax_insert.php",
                method:"post",
                data:{sql:sql},
                success:function(data){
                if(i==1) location.href=location.href;
                },
                error:function(error){
                    console.log(error);
                }
            });
        }
        $("#booking").click(function(){
            console.log("Add booking");
            var room_number=$("#roomnumber").val();
            var checkin=$("#checkin").val();
            var checkout=$("#checkout").val();
            var name=$("#name").val();
            var email=$("#email").val();
            var contact=$("#contact").val();
            var address=$("#address").val();
            var certification=$("#certification").val();
            var document_number=$("#documentnumber").val();
            var today = new Date();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
            var sql="Insert into booking(room_number,check_in_date,check_out_date,customer_name,email,contact,address,certification_type,document_number,time1) values("+room_number+",'"+checkin+"','"+checkout+"','"+name+"','"+email+"',"+contact+",'"+address+"','"+certification+"','"+document_number+"','"+time+"')";
            console.log(room_number,checkin,checkout,name,email,contact,address,certification,document_number);
            ajax_operation(sql,0);
            ajax_operation();
            ajax_operation();
        });

    });
</script>
<h2>Book</h2>
<h4>Room Details:</h4>
<form action="" method="POST">
    <label for="">Room Number</label>
    <select name="roomtype" id="roomnumber" class="form-control" required>
        <option value="">Select Room Number</option>
        <?php 
        include_once "../classes/order_db.php";
        $order=new Order();
        $sql="Select * from roomnumber where isempty='true'";
            if($order->get_temp_tables($sql,1) > 0): 
                foreach($order->get_temp_tables($sql,1) as $room): 
        ?>
        <option value="<?=$room['roomnumber']?>"><?php echo $room['roomnumber']. " [".$room['roomtype']."]" ?></option>
        <?php 
                endforeach;
            endif;
        ?>
    </select>
    <label for="">Check In Date</label>
    <input class="form-control" type="date" id="checkin" min="<?=date("Y-m-d")?>">
    <label for="">Check Out Date</label>
    <input type="date" id="checkout" class="form-control" min="<?=date("Y-m-d")?>">
    <h4>Customer Details</h4>
    <label for="">Full Name</label>
    <input type="text" id="name" class="form-control" required>
    <label for="">Email</label>
    <input type="email" id="email" class="form-control" required>
    <label for="">Contact</label>
    <input type="tel" id="contact" id="contact" class="form-control" required>
    <label for="">Address</label>
    <input type="text" id="address" class="form-control" required>
    <label for="">Certification Document</label>
    <select id="certification" class="form-control">
        <option value="">Select Certification Type</option>
        <option value="citienship">Citizenship</option>
        <option value="license">License</option>
        <option value="voterid">Voter ID</option>
    </select>
    <label for="">Document Number</label>
    <input type="text" id="documentnumber" class="form-control" required>
    <button type="button" id='booking' name="Booking" class="mt-2 btn btn-primary form-control">Book</button>
</form>
<div>
</div>
<?php 
include_once "../layout/footer.php";
?>