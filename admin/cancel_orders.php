<?php
    include_once "../layout/header.php";
    include_once "../classes/order_db.php";
    if(session_status()==PHP_SESSION_NONE){
        session_start();
    }
    $y=0;
    $dynamic=new Order();
    if(!isset($_GET["page"])){
        $y=0;
    }
    else{
        if($_GET["page"]==1){
            $y=0;
        }
        else{
            $y=doubleval($_GET["page"])*10;
        }
    }
    
    $sql="Select * from cancelled_orders order by id limit $y,10";
    $result=$dynamic->own_query($sql);
    $table="<table class='table'><tr><th>S.N</th><th>Item Name</th><th>Quantity</th><th>Date</th><th>Time</th><th>Table Number</th></tr>";
    // echo "<pre>";
    // print_r($result);
    //  print(count($result));

    for($i=0;$i<count($result);$i++){
        $table.="<tr>";
        $table.="<td>".$result[$i]['id']."</td>";
        $table.="<td>".$result[$i]['itemname']."</td>";
        $table.="<td>".$result[$i]['quantity']."</td>";
        $table.="<td>".$result[$i]['date1']."</td>";
        $table.="<td>".$result[$i]['time1']."</td>";
        $table.="<td>".$result[$i]['table_number']."</td>";
        // $table.="<td>".$result[$i]['']."</td>";
        $table.="</tr>";
        // echo $i;
    }
    echo $table."</table>";
    $bottom_nav= '<nav aria-label="Page navigation example">  <ul class="pagination justify-content-end">';
   if($y==0) {$bottom_nav.='<li class="page-item disabled">';}
   else {$bottom_nav.='<li class="page-item">';}
     $bottom_nav.='<a class="page-link" href="../admin/cancel_orders.php?page='.round($y/10-1).'" tabindex="-1">Previous</a>';
     $bottom_nav.='</li>';
     $sql1="Select count(*) from cancelled_orders";
     $result1=$dynamic->own_query($sql1);
    //  print($result1[0]["count(*)"]);
    $p=round(intval($result1[0]["count(*)"])/10);
     for($i=1;$i<=$p;$i++){
          $bottom_nav.='<li class="page-item"><a class="page-link" href="../admin/cancel_orders.php?page='.$i.'">'.$i.'</a></li>';
     }
    if(round($y/10)==$p) {$bottom_nav.='<li class="page-item disabled">';}
   else {$bottom_nav.='<li class="page-item">';}
    $bottom_nav.='<a class="page-link" href="../admin/cancel_orders.php?page='.round($y/10+1).'" >Next</a>';
     $bottom_nav.='</li>';
     
    echo $bottom_nav."</ul></nav>";
?>