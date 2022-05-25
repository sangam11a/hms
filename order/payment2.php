<?php 
include_once "../layout/header.php";
$i=1;
$order=new Order();
if(isset($_POST["pay"])){
    $table_number= $_POST["pay"];
    $result=$order->get_temp_tables("Select * from `temp_table` where `table_number`='$table_number'",1);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <script>
        function calculation(){
            var tax=document.getElementById('service_tax').value;
            var total=document.getElementById('total').value;
            var discount=document.getElementById('discount').value;
            var payable_amount=0.0;
            payable_amount=Number(total)+Number((tax/100)*total);
            payable_amount-=Number((discount/100)*payable_amount);
            document.getElementById('payable_amount').innerHTML="<h5>"+payable_amount+"</h5>";
            console.log(discount);
        }
        $("document").ready(function(){
            $("#confirm_payment").click(function(){
                        var x=$(this).val();
                        var name=$("#customer_name").val();
                        if(name==""){
                            $("#customer_name").focus();
                        }
                        var tax=$("#service_tax").val();
                        var discount=$("#discount").val();
                        var payment_mode=$("#payment_mode").val();
                $.ajax({
                    url:"payment_process.php",
                    method:"post",
                    data:{confirm_payment:x,customer_name:name,payment_mode:payment_mode,tax:tax,discount:discount},
                    success:function(data){
                        location.href="../print/bill.php";
                    },
                    error:function(error){
                        alert("Some error occured plz contact admin");
                        location.href="overall_orders.php";
                    }

                })
            });
        });
    </script>
</head>
<body onload="calculation()">
    <div>
       <!-- <form action="payment_process.php" method="post"> -->
       <form action="" method="post">
           <label for="">Customer's Name</label>
           <br> <input type="text" name="customer_name" id="customer_name" placeholder="Name" value="" required>
           <br><label for="">Payment Mode:</label>
           <select name="payment_mode" id="payment_mode">
                 <?php
                 $result1=$order->get_payment_mode();
                 $opt="";
                 if(count($result1)>0){
                     foreach($result1 as $a){
                         $opt.="<option value='".$a["payment_mode"]."'>".$a["payment_mode"]."</option>";
                     }
                     echo $opt;
                 }
                 ?>
             </select>
            <br> <label for="">Table Number:</label>
            <br><input type="text" name="table_number" id="table_number" value=" <?php echo $table_number ?>" disabled>
            <table class="table">
                <thead>
                    <th>S.N</th>
                    <th>Foodstuffs</th>
                    <th>Quantity</th>
                    <th>Price/unit</th>
                    <th>Total</th>
                </thead>
               <?php 
                  if(count($result)>0){
                      $total=0.0;
                   foreach($result as $row){
                    echo "<tbody>
                    <td>".$i++."</td>
                    <td>".$row['food_item']."</td>
                    <td>".$row['quantity']."</td>
                    <td>".$row['price']."</td>
                    <td>".$row['quantity']*$row['price']."</td>
                </tbody>"; 
                   $total+=$row['quantity']*$row['price'];

                   }

                  }
                  else{
                      echo "Something error has occured please redo the task for payment";
                  }
                 echo "<tbody><td></td><td></td><td></td><td>Total Price</td><td><input typ='disabled' name='total' class='total' id='total' value=".$total."></td></tbody>";
                 echo "<tbody><td></td><td></td><td></td><td>GST(in %)</td><td><input type='disabled' name='service_tax' id='service_tax' min=0 max=100 value=14></td></tbody>";
                 echo "<tbody><td></td><td></td><td></td><td>Discount(in %)</td><td><input type='number' min=0 max=100 name='discount' id='discount' value=0 onkeyup=calculation()></td></tbody>";
                 echo "<tbody><td></td><td></td><td></td><td>Payable Amount</td><td id='payable_amount'></td></tbody>";

                  echo "</table>";
                  echo "<button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#Confirm_payment' style='float:right;'>
                  Make Payment
                </button>";
                 ?>
            </table>
  <div class="modal fade" id="Confirm_payment" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="Confirm_paymentLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="Confirm_paymentLabel">Confirm payment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                  Are you sure you want to make payment?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" id="confirm_payment" name='confirm_payment' value="<?php echo $table_number; ?>" class="btn btn-primary">Pay</button>
      </div>
    </div>
  </div>
  </div>
        </form>

    </div>
</body>
</html>



<?php 
}
else{
    echo "<div class='alert alert-danger' role='alert'>There seems to be problem processing payment please perform operation again.</div>";
}
include_once "../layout/footer.php";
?>