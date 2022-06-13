<?php
    include_once "../layout/header.php";
    include_once "../classes/order_db.php";
    $order=new Order();
    
?>
<script>
    function searching(value){
        console.log(value);
        var table=" <table class='table' id='t1'> <thead class='table-dark'><th>S.N</th> <th>Customer Name</th>";
        table+="<th>Email</th> <th>Room Number</th> <th>Check In Date</th><th>Check In Time</th><th>Check Out Date</th>";
        table+="<th>Check Out Time</th> <th>Address</th><th>Certification Type</th><th>Document Number</th></thead><tbody>";
        var sql="Select * from booking where customer_name like '%"+value+"%'";
        $.ajax({
            url:"../ajax/ajax_post.php",
            method:"post",
            data:{sql:sql},
            success:function(data){
                data=JSON.parse(data);
                console.log(data);
                for(i=0;i<data.length;i++){
                    table+="<tr>";
                 table+="<td>"+Number(i+1)+"</td>";
                 table+="<td>"+data[i]['customer_name']+"</td>";
                 table+="<td>"+data[i]['email']+"</td>";
                 table+="<td>"+data[i]['room_number']+"</td>";
                 table+="<td>"+data[i]['check_in_date']+"</td>";
                 table+="<td>"+data[i]['check_in_time']+"</td>";
                 table+="<td>"+data[i]['check_out_date']+"</td>";
                 table+="<td>"+data[i]['check_out_time']+"</td>";
                 table+="<td>"+data[i]['address']+"</td>";
                 table+="<td>"+data[i]['certification_type']+"</td>";
                 table+="<td>"+data[i]['document_number']+"</td>";
                 table+="</tr>";
                }
                table+="</tbody></table>";
                document.getElementById("show_table").innerHTML="";
                document.getElementById("show_table").innerHTML=table;
            }
        });

    }
</script>
<input type="text" name="searching" id="searching" onkeyup='searching(this.value)'>
<div id="show_table" >
<table class="table" id="t1">
    <thead class="table-dark">
        <th>S.N</th>
        <th>Customer Name</th>
        <th>Email</th>
        <th>Room Number</th>
        <th>Check In Date</th>
        <th>Check In Time</th>
        <th>Check Out Date</th>
        <th>Check Out Time</th>
        <th>Address</th>
        <th>Certification Type</th>
        <th>Document Number</th>
    </thead><tbody>
    <?php
    $i=0;
        if($order->get_temp_tables("Select * from booking",1)>0){
            foreach($order->get_temp_tables("Select * from booking",1) as $row)
             {
                 echo "<tr>";
                 echo "<td>".++$i."</td>";
                 echo "<td>".$row['customer_name']."</td>";
                 echo "<td>".$row['email']."</td>";
                 echo "<td>".$row['room_number']."</td>";
                 echo "<td>".$row['check_in_date']."</td>";
                 echo "<td>".$row['check_in_time']."</td>";
                 echo "<td>".$row['check_out_date']."</td>";
                 echo "<td>".$row['check_out_time']."</td>";
                 echo "<td>".$row['address']."</td>";
                 echo "<td>".$row['certification_type']."</td>";
                 echo "<td>".$row['document_number']."</td>";
                 echo "</tr>";
             }
             echo "</tbody></table>";
        }
        else{
            echo "<div class='alert alert-success'><h2>No records Found</h2></div>";
        }
    ?>
</table>
</div>