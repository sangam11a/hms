<?php
include_once "../layout/header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manual bill print</title>
    <script>
        var p = document.getElementById('amt');
        var x = ["first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eighth", "nineth", "tenth", "eleventh", "twelveth", "thirteenth", "fourteenth", "fifteenth", "sixteenth"]

        function tabule_add_row() {
            let table = document.getElementById("table")

            let len = table.rows.length
            let row = table.insertRow(-1);
            row.id = x[len + 1]
            let cell1, cell2, cell3;

            cell0 = row.insertCell()
            cell0.innerHTML = len
            cell1 = row.insertCell()
            cell1.innerHTML = '<div class="form-group"><input type="text" class="form-control" id="email" name="' + x[len - 1] + '[0]"></div>'
            cell2 = row.insertCell()
            cell3 = row.insertCell()
            cell2.innerHTML = '<div class="form-group"><input type="text" class="form-control" id="quantity" name="' + x[len - 1] + '[1]"></div>'
            cell3.innerHTML = '<div class="form-group"><input type="text" class="form-control" onclick="amt_click(this)" onblur="amt_blur(this)" id="amt" name="' + x[len - 1] + '[2]"></div>'
        }

        function amt_click(p) {
            document.getElementById('sub_total').value = Number(document.getElementById('sub_total').value) - Number(p.value)
            p.value = 0
            total_change()
        }

        function amt_blur(p) {
            document.getElementById('sub_total').value = Number(document.getElementById('sub_total').value) + Number(p.value)
            total_change()
        }
        window.onload = function() {


            document.getElementById('discount').onblur = function() {
                // document.getElementById('discount').value= Number(document.getElementById('sub_total').value)*Number(document.getElementById('discount').value)/100
                // document.getElementById('total').value=Number(document.getElementById('sub_total').value)-Number(document.getElementById('discount').value)
                total_change()
            }
            document.getElementById('tax').onblur = function() {
                // let t= Number(document.getElementById('sub_total').value)*Number(document.getElementById('tax').value)/100
                // document.getElementById('total').value=Number(document.getElementById('sub_total').value)-Number(t)
                total_change()
            }
        }

        function total_change() {
            let t = Number(document.getElementById('sub_total').value) * Number(document.getElementById('tax').value) / 100
            let d = Number(document.getElementById('sub_total').value) * Number(document.getElementById('discount').value) / 100
            let tt = document.getElementById('total')
            tt.value = Number(document.getElementById('sub_total').value) - Number(d) + Number(t)
        }
    </script>
</head>

<body>
    <div>
        <form action="" method="post">
            <div class="form-group">
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <button onclick="tabule_add_row()" type='button'>Add</button>

            <table id="table">
                <tr>
                    <th>S.N</th>
                    <th>Order Name </th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>


                <tr id="first" name="first">
                    <td>
                        1
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="first[0]">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="email" name="first[1]">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <input type="text" class="form-control" id="amt" onclick="amt_click(this)" onblur="amt_blur(this)" name="first[2]">
                        </div>
                    </td>
                </tr>
                <!-- <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td> -->
                

            </table>
                <div>
                        Tax <div class="form-group">
                            <input type="number" class="form-control" id="tax" name="tax" value=13 onchange="document.getElementById('')">
                        </div>
                        <!-- </td>
                    </tr> -->
                        <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> -->
                        Discount <div class="form-group">
                            <input type="number" class="form-control" id="discount" name="discount" value=0 onchange="document.getElementById('')">
                        </div>
                        <!-- </td>
                    </tr> -->
                        <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> -->
                        Sub-Total <div class="form-group">
                            <input type="number" readonly class="form-control" id="sub_total" name="sub_total" value=0 onchange="document.getElementById('')">
                        </div>
                        <!-- </td>
                    </tr> -->
                        <!-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td> -->
                        Total <div class="form-group">
                            <input type="number" readonly class="form-control" id="total" name="total" value=13 onchange="document.getElementById('')">
                        </div>
                        <!-- </td>
                    </tr> -->
                    </div>
            <button type="submit" name="submit">Generate bills</button>

        </form>
    </div>
</body>

</html>
<?php
if (isset($_POST["submit"])) {
    include_once "../classes/order_db.php";
    $order=new Order();
    // print_r($_POST);
    $count = count($_POST);
    // echo "<pre>".$count-5;
    $sql = "";
    $x = ["first", "second", "third", "fourth", "fifth", "sixth", "seventh", "eighth", "nineth", "tenth", "eleventh", "twelveth", "thirteenth", "fourteenth", "fifteenth", "sixteenth"];
    for ($i = 1; $i < $count-5; $i++) { 
            $y = $_POST[$x[$i-1]];
            print_r($y);
            // foreach($_POST[$x] as $y)
            {
                $sql .= "INSERT INTO `print_table`
                (`name`, `quantity`, `subtotal`, `price`, `customer_name`, `tax`, `discount`) VALUES 
                ('$y[0]','$y[1]','$y[2]','$y[2]','" . $_POST['name'] . "','".$_POST['tax']."','".$_POST['discount']."');";
            }
     }
    if($order->insert_to_booking($sql)){
        // echo "Insertion completed";
        echo "<script>location.href='../print/bill.php';</script>";
    }
}
?>