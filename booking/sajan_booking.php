<?php
include_once "../layout/header.php";
$booking = new Order();
?>
<!--DOCTYPE html-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Simple HeatMap</title>
  </head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <thead class="bg-dark text-white">
                <th>Name</th>
                <th>Check in date</th>
                <th>Room</th>
                <th>Rate</th>
                <th>Check Out Date </th>
                <th>Direct GST 12%</th>
                <th>Agent GST</th> 
                <th>Agent Commission</th>
                <th>Total Amount</th>
                <th>Desposit Paid</th>
                <th>Balance</th>            
            </thead>
            <tbody>
                <?php 
                $result=$booking->get_temp_tables("Select * from schedule_booking",1);
                if($result > 0):
                    foreach($result as $bookings):
                ?>
                    <tr>
                        <td><?=$bookings['booking_on_name']?></td>
                        <td><?=$bookings['estimated_check_in']?></td>
                        <td><?=$bookings['room_number']?></td>
                        <td>
                            <?php 
                                $rn = $bookings['room_number'];
                                $roomnum = new RoomNumber();
                                $price = $roomnum->findRate($rn);
                                echo $price['room_price'];
                            ?>
                        </td>
                        <td><?=$bookings['estimated_check_out']?></td>
                        <td>---</td>
                        <td>---</td>
                        <td>---</td>
                        <td><?=$price['room_price']?></td>
                        <td><?=$bookings['payment']?></td>
                        <td>
                            <?php 
                                $bl = $price['room_price'] - $bookings['payment'];
                                echo $bl;
                            ?>
                        </td>
                    </tr>
                <?php        
                    endforeach;
                endif;
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php

include_once "../layout/footer.php";
?>