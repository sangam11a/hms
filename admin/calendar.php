<?php
include_once "../classes/dynamic.class.php";
if(isset($_GET['month'])&&isset($_GET['room_type'])&&isset($_GET['year']))
{
    // include_once "../classes/index.php";
    // $room_type="asda";
    $month="2";//$_GET['month'];
    $year="2022";//$_GET['year'];
    if($month<="9"&&strlen($month)==1){
        $month="0$month";
    }
    if($month==0&&$year==0){
        $month=date('m');
        $year=date("Y");
    }
    $conn=new Dynamic();
    $arr=array();
    $endDate=date("t",mktime(0,0,0,$month,1,$year));//Total days
    $s=date ("w", mktime (0,0,0,$month,1,$year));//Day starts after
    array_push($arr,array("gap"=>$s));    
    array_push($arr,array("end"=>$endDate));
    // print_r($arr);
    $sql="Select * from booking where room_number='".$_GET["room_type"]."' and check_in_date<>''";//
    // echo $sql;
    $result=$conn->own_query($sql);
    foreach($result as $row){
        $checkin=array();
        $checkout=array();
    // if($row["check_in_date"]!=""){
        $checkin=explode("-",$row["check_in_date"]);    
        $checkout=explode("-",$row["check_out_date"]);
    // }
        // print_r($checkin);
        // print_r($checkout);
        if(($checkin[1]==$month&&$checkin[0]==$year)||($checkout[1]==$month&&$checkout[0]==$year)){
            { $arr3=array("checkin_year"=>$checkin[0],"checkin_month"=>$checkin[1],"checkin_day"=>$checkin[2],"checkout_year"=>$checkout[0],"checkout_month"=>$checkout[1],"checkout_day"=>$checkout[2]);
                array_push($arr,$arr3);
            }
    }
        }
    // print_r($arr);
    echo json_encode($arr);
}
?>