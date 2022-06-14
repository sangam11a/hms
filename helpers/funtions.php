<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
function clean($value) {
    $value = trim($value);            
    $value = stripslashes($value);
    $value = htmlspecialchars($value);
    return $value;
}

function checkLogin() {
    if(isset($_SESSION['logged']) && isset($_SESSION['role'])){
        return;
    }
    else{
        session_destroy();header("Location: ../adminlogin/hms-admin.php?err");
        die;
    }
}
