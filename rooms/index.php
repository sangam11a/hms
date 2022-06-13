<?php
include_once "../layout/header.php";
include_once "../classes/order_db.php";
?>
<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>  
      <link href="../layout/css/dashboard.css" rel="stylesheet">
    <script src="../layout/js/dashboard_reception.js">
       </script>
</head>
<body>
    <div>
        <div style="margin-bottom:7px;">
            <button class="btn btn-primary" onclick="location.href='../order/take_order.php'">Place order</button>
            <button class="btn btn-primary" onclick="location.href='../rooms/assign_room.php'">Room Check in</button>
            <button class="btn btn-primary" onclick="location.href='../rooms/schedule_booking.php'">Schedule Booking</button>
            <button class="btn-primary" onclick="location.href='../rooms/checkout.php'">Check out</button>

        </div>
        <?php include_once "dashboard_common.php";?>
        <div class="row">
            <div class="col-sm col-md tble">
                <span class="row"><h5>Trending Dishes</h5></span>
                <span class="row" id='top_sales'></span>
            </div>
            <div class="col-sm col-md tble">
                <span class="row">
                <h5>Payment received by cashier
             </h5>
             <span class="row" id="payment_history"></span>
             </span>
             <span class="row"></span>
            </div>
            <div class="col-sm col-md tble">
                <span class="row">
                    <h5>Payment Mode</h5>
                    <span class="row" id="payment_mode"></span>
                </span>
                <span class="row"></span>
            </div>
            
        </div>
        <div class="container">
        <div class="row">
        <div class="col-md-6 col-sm circleInfo border-c-blue">
            <span class="number" id="customer_number" >
                <?php
                    $sql="select COUNT(DISTINCT time1) from sold_items where date1='".date("Y-m-d")."'";
                    $order=new Order();
                    $result1=$order->get_temp_tables($sql,1);
                    if(count($result1)>0){
                         foreach($result1 as $a)
                        echo $a['COUNT(DISTINCT time1)'];
                    }
                ?>
            </span><br>
            <span class="text">
                Todays Customers Count
            </span>
        </div>
        <div class="col-md-6 col-sm circleInfo border-c-green">
            <span class="number" id="available__number">

            </span><br>
            <span class="text">
                Available Tables
            </span>
        </div>
        <div class="col-md-6 col-sm circleInfo border-c-pink">
            <span class="number" id="occupied_number">

            </span>
            <span class="text"><br>
                 Occupied Tables
            </span>
        </div>
        <div class="col-md-6 col-sm circleInfo border-c-yellow">
            <span class="number" id="booking_number">

            </span>
            <span class="text"><br>
                Booked tables
            </span>
        </div>
        </div>

    </div>
    </div>
</body>
</html>