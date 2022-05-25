<?php
if(isset($_POST["sql"])){
    $sql=$_POST["sql"];
    include_once "../classes/dynamic.class.php";
    $db=new Dynamic();
    $result=$db->own_query("Select * from sold_items where customer_name LIKE '%$sql%'");
    echo json_encode($result);
}
?>