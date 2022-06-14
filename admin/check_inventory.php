<?php
if(session_status()==PHP_SESSION_NONE){
    session_start();
}
include_once "../classes/dynamic_table.php";
include_once "../layout/header.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Check Inventories</title>
    <script>
        window.load=check();
        function check(x=0){
            let table="";
            $.ajax({
                type: "POST",
                url: "../ajax/ajax_inventory.php",
                data: {page:x},
                success:function( data, textStatus, jQxhr ){
                    data = JSON.parse(data);
                            if(data.length>0){
                                table+="<table class='table'><tr><td>S.N</td><td>Inventory Name</td><td>Quantity</td><td>Price</td><td></td><td></td></tr>";
                                for(let i=0;i<data.length;i++){

                                }
                            }   
                            else{
                                table="No Data to display.Please add inventory first."
                            }
                        },
                        error: function( jqXhr, textStatus, errorThrown ){
                            console.log( errorThrown );
                        },
                dataType: 'text'
                });
        }
    </script>
</head>
<body>
    <div>
       <?php
       $pg=1;
            if(isset($_POST["page"])){
                $pg=$_POST["page"];
            }
        include_once "../classes/order_db.php";
        $order=new Order();
        $total_rows=$order->get_temp_tables("Select count(*) from inventory",1);
        table("Check inventory",['S.N','Inventory Name','Quantity','Price','Minimum Stock','Options'],['id','name','quantity','price','minimum_stocks'],$total_rows[0]["count(*)"],'inventory')
       ?>
    </div>
</body>
</html>