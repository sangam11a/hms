<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/css/dashboard.css">
<body>
<div class="row">
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-blue order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Total Orders:</h6>
                        <h2 class="text-right"><i class="fas fa-concierge-bell"></i><span id='total_orders'></span></h2>
                        <p class="m-b-0">Pending Order<span class="f-right" id="pending_order"></span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-green order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Total Transactions:</h6>
                        <h2 class="text-right"><i class="fas fa-money-check-alt"></i><span id="total_transaction"></span></h2>
                        <p class="m-b-0">Today's transaction<span class="f-right" id="today_transaction"></span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-yellow order-card">
                    <div class="card-block">
                            <?php
                                include_once "../classes/order_db.php";
                                $sql="Select count(roomnumber) from roomnumber";
                                $order=new Order();
                                $count=0;
                                $avail=0;
                                if($order->get_temp_tables($sql,1)){
                                    foreach($order->get_temp_tables($sql,1) as $row){
                                        $count=$row["count(roomnumber)"];                                        
                                    }
                                }
                                $sql="Select count(isempty) from roomnumber where isempty='false'";
                                if($order->get_temp_tables($sql,1)){
                                    foreach($order->get_temp_tables($sql,1) as $row){
                                        $avail=$row["count(isempty)"];                                        
                                    }
                                }    
                                $total_bookings=0;
                                $sql="Select count(*) from schedule_booking";
                                if($order->get_temp_tables($sql,1)){
                                    foreach($order->get_temp_tables($sql,1) as $row){
                                        $total_bookings=$row["count(*)"];                                        
                                    }
                                }               
                                $unpaid_booking=0; 
                                $sql="Select count(payment) from schedule_booking where payment=0";
                                if($order->get_temp_tables($sql,1)){
                                    foreach($order->get_temp_tables($sql,1) as $row){
                                        $unpaid_booking=$row["count(payment)"];                                        
                                    }
                                }                      
                            ?>
                        <h6 class="m-b-20">Room Availability:</h6>
                        <h2 class="text-right"><i class="fas fa-house-user"></i><span id="available_rooms">
                            <?php echo $count;?>
                        </span></h2>
                        <p class="m-b-0">Occupied Rooms<span class="fa-right" id="occupied_rooms"><?php echo $avail;?></span></p>
                    </div>
                </div>
            </div>
            
            <div class="col-md-4 col-xl-3">
                <div class="card bg-c-pink order-card">
                    <div class="card-block">
                        <h6 class="m-b-20">Room Bookings:</h6>
                        <h2 class="text-right"><i class="fas fa-calendar-alt"></i><span id="table_bookings"><?php echo $total_bookings;?></span></h2>
                        <p class="m-b-0">Unpaid Bookings<span class="fa-ticket"><?php echo $unpaid_booking; ?></span></p>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>