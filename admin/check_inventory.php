<?php
if (session_status() == PHP_SESSION_NONE) {
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
        function option_click(mode, data) {
            console.log(mode, data);
            data1=data.split("^");
            var form="";
            if(mode=='edit'){
                document.getElementById("modalTitle").innerHTML="Edit Data";
                form+='<div class="form-group">'
                form+=' <label for="name">Inventory Name :</label>'
                form+=' <input type="text" class="form-control" value="'+data1[0]+'" name="name" readonly>'
                form+='</div>';
                form+='<div class="form-group">'
                form+=' <label for="Quantity">Quantity :</label>'
                form+=' <input type="number" class="form-control" value="'+data1[1]+'" name="Quantity" id="Quantity" readonly>'
                form+='</div>'
                form+='<div class="form-group">'
                form+=' <label for="Quantity1">Quantity to be added :</label>'
                form+=' <input type="number" class="form-control" value="0" name="Quantity1" onkeyup="document.getElementById(\'Quantity\').value=Number(document.getElementById(\'Quantity\').value)+Number(this.value)">'
                form+='</div>'
                form+='<div class="form-group">'
                form+=' <label for="Price">Price :</label>'
                form+=' <input type="number" class="form-control" value="'+data1[2]+'" name="Price">'
                form+='</div>'
            }
            else{
                document.getElementById("modalTitle").innerHTML="Delete Data";
            }
            document.getElementById('modal-body').innerHTML=form;
            $('#modal').modal('show');

        }
        window.load = check();

        function check(x = 0) {
            let table = "";
            $.ajax({
                type: "POST",
                url: "../ajax/ajax_inventory.php",
                data: {
                    page: x
                },
                success: function(data, textStatus, jQxhr) {
                    data = JSON.parse(data);
                    if (data.length > 0) {
                        table += "<table class='table'><tr><td>S.N</td><td>Inventory Name</td><td>Quantity</td><td>Price</td><td></td><td></td></tr>";
                        for (let i = 0; i < data.length; i++) {

                        }
                    } else {
                        table = "No Data to display.Please add inventory first."
                    }
                },
                error: function(jqXhr, textStatus, errorThrown) {
                    console.log(errorThrown);
                },
                dataType: 'text'
            });
        }
    </script>
</head>

<body>
    <div>
        <?php
        $pg = 1;
        if (isset($_POST["page"])) {
            $pg = $_POST["page"];
        }
        include_once "../classes/order_db.php";
        $order = new Order();
        $total_rows = $order->get_temp_tables("Select count(*) from inventory", 1);
        table("Check inventory", ['S.N', 'Inventory Name', 'Quantity', 'Price', 'Minimum Stock', 'Options'], ['id', 'name', 'quantity', 'price', 'minimum_stocks'], $total_rows[0]["count(*)"], 'inventory')
        ?>
        <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalTitle"></h5>
                        <button type="button" onclick="$('#modal').modal('hide');" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form method='post'>
                        <div class="modal-body" id='modal-body'>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" onclick="$('#modal').modal('hide');" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
if(isset($_POST['name'])&&isset($_POST['Quantity'])&&isset($_POST["Price"])){
    print_r($_POST);
    $name=$_POST["name"];
    $Quantity1=$_POST["Quantity"];
    $Price=$_POST["Price"];
    $sql="Update inventory set `quantity`=$Quantity1,`price`='$Price' where name='$name' ";
    include_once "../classes/order_db.php";
    $order=new Order();
   if($order->insert_to_booking($sql)){

   }
   else{
    echo "<script>alert('There seems to be some problem in updation.Please call administrator')</script>";
   }
}
?>