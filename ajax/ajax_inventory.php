<?php
include_once "../classes/order_db.php";
if(isset($_POST["page"])){
    $page=$_POST["page"];
    $sql="Select * from inventory limit $page,10";
    $order=new Order();
    $result=$order->get_temp_tables($sql);
    // echo json_encode($result);
    echo ($result);
    return $result;
}
else{
    echo "<script>location.href='../helpers/'</script>";
}
?>