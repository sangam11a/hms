
                <?php
                //    for($i=0;$i<30;$i++){
                //     echo "<td>".date("Y/m/d")."</td></tr>";
                //    }
                include_once "../layout/header.php";
                $order=new Order();
                
             
             // foreach($result1 as $row1)
            //  {
            //     // if($result1>=1&&$result1<=10)
            //     {$date1=date("Y-m-d");
            //         $new_date=$date1;
            //         for($i=0;$i<10;$i++){
            //             echo $new_date."<br>";
            //             $sql1="Select * from schedule_booking where estimated_check_in='$new_date' or estimated_check_out='$new_date' ";
            //             $result1=$order->get_temp_tables($sql1,1);
            //             echo count($result1)." ";
            //             if(count($result1)!=0){
            //                 foreach($result1 as $row1){
            //                     echo "1  ";
            //                     // echo $row1["booking_on_name"];
            //                     // echo $row1["estimated_check_in"]." ".$row1["estimated_check_out"]." ".$row1["booking_on_name"] ;
            //                     if($new_date>=$row1["estimated_check_in"]&&$new_date<=$row1["estimated_check_out"]){
            //                          echo $row1["booking_on_name"]."<br>";
            //                     }
            //                     else{
            //                         echo "Empty";
            //                     }
                            
            //                 }
            //             }
            //             else{
            //                 echo "Empty;";
            //             }
            //             $your_date = strtotime("1 day",  strtotime($date1));
            //             $new_date = date("Y-m-d", $your_date);
            //              $date1=$new_date;
                         
            //         }
            //     }
            //    }
            $array=array();
            $result1=$order->get_temp_tables("select estimated_check_in,estimated_check_out,booking_on_name,room_number from schedule_booking where estimated_check_in>='2021-02-21';",1);
            foreach($result1 as $row1){
                echo $row1["room_number"]."<br>";
                $temp_arr=array('check_in_date' =>$row1["estimated_check_out"] ,'check_out_date'=>$row1["estimated_check_in"],'name'=>$row1["booking_on_name"]);
                array_push($array,$temp_arr);
            }
            echo "<pre>";
                  {$date1=date("Y-m-d");
                    $new_date=$date1;
                    for($i=0;$i<10;$i++){
                        echo $new_date."<br>";
                        $sql1="Select * from schedule_booking where estimated_check_in='$new_date' or estimated_check_out='$new_date' ";
                        $result1=$order->get_temp_tables($sql1,1);
                        echo count($result1)." ";
                        if(count($result1)!=0){
                            foreach($result1 as $row1){
                                echo "1  ";
                                // echo $row1["booking_on_name"];
                                // echo $row1["estimated_check_in"]." ".$row1["estimated_check_out"]." ".$row1["booking_on_name"] ;
                                if($new_date>=$row1["estimated_check_in"]&&$new_date<=$row1["estimated_check_out"]){
                                    echo "<td>".$row1["booking_on_name"]." ---".$new_date."</td>";
                                }
                                else{
                                    echo "Empty";
                                }
                            
                            }
                        }
                        else{
                            echo "Empty;";
                        }
                        $your_date = strtotime("1 day",  strtotime($date1));
                        $new_date = date("Y-m-d", $your_date);
                         $date1=$new_date;
                         
                    }
                }
        
            
?>
           