<?php 
//require_once "../includes/init.php";
if(session_status()==PHP_SESSION_NONE)   session_start();
checkLogin();
if($_SESSION['role'] === 'admin'){

    $rooms = new Rooms();

    if ($_GET['send'] === 'del') {
        
        $id = $_GET['id'];
        $img_del = $_GET['name'];
        $rooms->delete($id);

        unlink("uploads/$img_del");

        echo "<script>location.href='rooms.php';</script>";
        die;
    }    
    else{
        echo "<script>location.href='rooms.php?senderr'</script>";
        die;
    }
}else{
    echo "<script>location.href='rooms.php?adminerr'</script>";
    die;
}