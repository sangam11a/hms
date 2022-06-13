<?php
require_once "../helpers/funtions.php";
$check = checkLogin();
if(isset($_GET['loc'])){
    $loc = $_GET['loc'];
    echo "<script>location.href='$loc';<script>";
    die;
}else{
    die;
}