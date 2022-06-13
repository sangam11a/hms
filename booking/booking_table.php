<?php
include_once "../layout/header.php";
$order=new Order();
?>
<!--DOCTYPE html-->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Booking Table</title>
    <style>
            .empty-table{
                color:whitesmoke;
            }
            /* table td{
                background: black;
                color:white;
            } */
        </style>
  </head>
<body>
    <div class="container">
        <table class="table table-responsive caption-top">
            <h1><caption>Booking list</caption></h1>
            <thead class="bg-success">
                <th>Dates</th>
                <?php
                    $order=new Order();
                    $result=$order->get_temp_tables("Select distinct room_number from `schedule_booking` ",1);
                    $room_array=[];
                    if($result>0){
                        foreach($result as $row){
                            echo "<th>".$row["room_number"]."</th>";
                            array_push($room_array,$row["room_number"]);
                        }
                    }
                    $result=$order->get_temp_tables("Select * from `schedule_booking` ",1);
                    $date_array=[];
                    if($result>0){
                        foreach($result as $row){
                            $temp_array=[];
                            $temp_array=array($row['booking_on_name'],$row['estimated_check_in'],$row['estimated_check_out'],$row['room_number']);
                            array_push($date_array,$temp_array);
                        }
                    }
                ?>                
            </thead>
            <tbody>
                <?php
                // $colors_array=["primary","secondary","success","danger","warning","info","light"];
                // $count_colors=count($colors_array);
                //    for($i=0;$i<30;$i++){
                //     echo "<tr><td>".date("Y/m/d")."</td></tr>";
                //    }
                $date1=date("Y-m-d");
                $new_date=$date1;
                // for($i=0;$i<count($date_array);$i++){
                for($i=0;$i<20;$i++){
                    echo "<tr><td>".$new_date."</td>";                    
                    {$value="0";                      
                      for($k=0;$k<count($date_array);$k++){  
                       for($j=0;$j<count($room_array);$j++){
                        //    for($k=0;$k<count($date_array);$k++){
                         {  
                            if($new_date>=$date_array[$k][1]&&$new_date<=$date_array[$k][2]&&$date_array[$k][3]==$room_array[$j]){
                                // echo "<td>".$date_array[$k][0]."</td>";
                                // break;
                                $value=$date_array[$k][0];
                                break;
                            }
                         }
                       }
                            if($value!="0")
                            {$color = substr(md5($value), 0, 6);
                                echo "<th style='background:#".$color.";color:white;'>".$value."</th>";
                                $value=0;
                                }
                                // else{
                                //     echo "<td class='bgsuccess'>Empty</td>";
                                // }
                     }
                     
                        // else{
                        //     echo "<td>".$value."</td>";
                        // }
                    }
                    echo "</tr>";
                    $your_date = strtotime("1 day",  strtotime($date1));
                    $new_date = date("Y-m-d", $your_date);
                     $date1=$new_date;
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