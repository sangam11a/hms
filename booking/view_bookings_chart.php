<?php
include_once "../layout/header.php";
$order=new Order();
// $result=$order->get_temp_tables("Select * from `schedule_booking`",1);
// if($result>0){
//     foreach($result as $row){
//         echo $row['room_number']."<br>";
//     }
//}
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
        <table class="table">
            <thead class="bg-success">
                <th>Dates</th>
                <?php
                    $order=new Order();
                    $result=$order->get_temp_tables("Select distinct room_number from `schedule_booking` ",1);
                    if($result>0){
                        foreach($result as $row){
                            echo "<th>".$row["room_number"]."</th>";
                        }
                    }
                ?>                
            </thead>
            <tbody>
                <?php
                //    for($i=0;$i<30;$i++){
                //     echo "<tr><td>".date("Y/m/d")."</td></tr>";
                //    }
                $date1=date("Y-m-d");
                $new_date=$date1;
                for($i=0;$i<10;$i++){
                    echo "<tr><td>".$new_date."</td>";                    
                    $sql2="Select * from `schedule_booking` where estimated_check_in='$new_date' or estimated_check_out='$new_date'";
                    $result2=$order->get_temp_tables($sql2,1);
                    echo count($result2);
                    // if($result2>0)
                    {
                        foreach($result2 as $row2)
                        {$temp1="";
                            $temp2="";
                            echo "!11";
                            $result3=$order->get_temp_tables("Select distinct room_number from `schedule_booking` ",1);
                             if($result3>0){
                                echo count($result3)."<br>";
                                    foreach($result3 as $row3){
                                        if($row3["room_number"]==$row2["room_number"]&&$new_date>=$row2["estimated_check_in"]&&$new_date<=$row2["estimated_check_out"]){
                                            echo "<td>".$row2["booking_on_name"]." ---".$new_date."</td>";
                                        }
                                        else{
                                            echo "<td>"."Empty slot"."</td>";
                                        }
                                    }
                                }
                                 if($temp1){

                                }
                                 if($temp2){

                                }
                        }
                    }
                    $your_date = strtotime("1 day",  strtotime($date1));
                    $new_date = date("Y-m-d", $your_date);
                     $date1=$new_date;
                     echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
<?php

include_once "../layout/footer.php";
?>