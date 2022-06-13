<?php 
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
require_once "../helpers/funtions.php";

checkLogin();
if(isset($_SESSION['logged']) && $_SESSION['role']) {
    session_destroy();
    echo "<script>location.href='../adminlogin/hms-admin.php'";
    die;
}