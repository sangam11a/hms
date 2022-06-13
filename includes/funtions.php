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
    // echo "<script>alert('".$_SESSION['role']."');</script>";
    if(isset($_SESSION['role'])){//$_SESSION['logged']) && 
        return;
    }
    else{
        session_destroy();
        echo "<script>location.href= '../adminlogin/hms-admin.php?err'</script>";
        die;
    }
}
?>