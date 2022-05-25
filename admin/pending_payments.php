<?php
include_once "../classes/dynamic.class.php";
include_once "../layout/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Payments</title>
</head>
<body>
    <?php
        $db= new Dynamic();
        $result=$db->own_query("SELECT TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = 'temporary_data_peaceresort';");
        
    ?>  
    <div id="pending_orders">
        <div id="count">
            Total Number of Pending Orders: <?=count($result)?>
        </div>
        <div id="list_orders">
           <table class="table">
              <?php
                    foreach($result as $x){
                        print_r($x["TABLE_NAME"]);
                        echo "<br>";
                    }
                // print_r($result);
               ?>
           </table>
        </div>
    </div>
</body>
</html>