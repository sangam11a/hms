<?php
require_once "../layout/header.php";
?>
<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Reports</title>
    <script>
        $('document').ready(function(){
            $("#paginate_value").change(function(){
                console.log($("#paginate_value").val())
                handle_pagination();
            });

            $('#pagess').click(function(){
                console.log("apge");
            });


            function handle_pagination(){
                
                var x="";
                document.getElementById("reports").innerHTML="";
                   var x="<table class='table table-dark'><thead><th>S.N</th><th>Customer Name</th><th>Food Ordered</th><th>Quantity</th><th>Price</th><th>User</th><th>Date</th><th>Time</th><th>Total</th></thead>"; 
                var start=$("#starting_date").val();
                var end=$("#ending_date").val();
                    var sql="Select * from sold_items where date1>='"+start+"' and date1<='"+end+"' order by id ";
                var paginateValue=$("#paginate_value").val();
                $.ajax({
                        url:"../ajax/ajax_post.php",
                        method:"post",
                        data:{sql:sql},
                        success:function(data){
                            data=JSON.parse(data);
                            var y=" <ul class='pagination justify-content-end'><li class='page-item disabled'>  <a class='page-link' href='#' tabindex='-1'>Previous</a> </li>";
                            var count=Math.ceil(data.length/paginateValue);
                            for(i=1;i<=count;i++){
                                y+="<li class='page-item'><button class='tab_number page-link' name='"+i+"name"+"' id='pagess' value='"+i+"'>"+Number(i)+"</button></li>";
                            }
                            y+="<li class='page-item'> <a class='page-link' href='#'>Next</a></li></ul>";
                            document.getElementById("pages").innerHTML=y;
                            if(data.length>=paginateValue){
                                
                                for(i=0;i<paginateValue;i++){
                                    x+="<tbody><td>"+Number(i+1)+"</td><td>"+data[i]['customer_name']+"</td><td>"+data[i]['food_item']+"</td><td>"+data[i]['quantity']+"</td><td>"+data[i]['price']+"</td><td>"+data[i]['user']+"</td><td>"+data[i]['date1']+"</td><td>"+data[i]['time1']+"</td><td>"+data[i]['total']+"</td></tbody>";
                                }
                                x+="</table>";
                                document.getElementById("reports").innerHTML=x;
                            }
                            else{
                                if(data.length<paginateValue){
                                    paginateValue=data.length;
                                }
                                for(i=0;i<paginateValue;i++){
                                    x+="<tbody><td>"+Number(i+1)+"</td><td>"+data[i]['customer_name']+"</td><td>"+data[i]['food_item']+"</td><td>"+data[i]['quantity']+"</td><td>"+data[i]['price']+"</td><td>"+data[i]['user']+"</td><td>"+data[i]['date1']+"</td><td>"+data[i]['time1']+"</td><td>"+data[i]['total']+"</td></tbody>";
                                }
                                x+="</table>";
                                document.getElementById("reports").innerHTML=x;
                            }
                        },
                        error:function(error){
                            alert(error+" Please contact administrator");
                        }
                    });
            }

            $("#generate_report").click(function(){
                document.getElementById("error1").innerHTML="";
                document.getElementById("error1").innerHTML="";
                var start=$("#starting_date").val();
                var end=$("#ending_date").val();
                if(start&&end){
                    handle_pagination();
                }
                else{
                    if(!start){
                        document.getElementById("error1").innerHTML="Please enter starting date";
                    }
                    if(!end){
                        document.getElementById("error2").innerHTML="Please enter ending date";
                    }
                }
            });
        });
    </script>
</head>

<body>
    <div class="container">
        <form action="" method="post">
           <table>
               <tr>
                   <td>
                       <label for="">Starting Date* </label>
                   </td>
                   <td>
                       <input type="date" id='starting_date' name='starting_date' required>
                   </td>
                   <td>
                   <div id="error1"></div>
                   </td>
               </tr>
               <tr>
                   <td>
                       <label for="">Ending Date*</label>
                   </td>
                   <td>
                       <input type="date" id='ending_date' name='ending_date' required>
                   </td>
                   <td>
                   <div id="error2"></div>
                   </td>
               </tr>
               <tr>
                   <td>
                       <label for=""></label>
                   </td>
                   <td>
                       <button type="button" id="generate_report" class="btn btn-warning">Generate Report</button>
                   </td>
               </tr>
           </table>
        </form>
        <div class="reports">
            <span class="row">
                <select name="paginate_value" id="paginate_value" >
                    <option value=10 selected>10</option>
                    <option value=25>25</option>
                    <option value=50>50</option>
                    <option value=100>100</option>
                </select>
            </span>
            <div id="reports"></div>
          <nav aria-label="Page navigation example">
              
          <span class="pages" id="pages"></span>
            <!-- <ul class='pagination justify-content-end'>
                <li class='page-item disabled'>
                <a class='page-link' href='#' tabindex='-1'>Previous</a>
                </li>
                <li class='page-item'> <a class='page-link' href='#'>Next</a></li>
            </ul> -->
           </nav>
        </div>
    </div>    
</body>
</html>

<?php
// if(isset($_POST["generate_report"])){
//     $start=$_POST["starting_date"];
//     $end=$_POST["ending_date"];
//     $sql="SELECT * from sold_items where date1>='$start' and date1<='$end'";
//     $order=new Order();
//     $result=$order->get_temp_tables($sql,1);
//     $count=count($result);
    
// }
include_once "../layout/footer.php";
?>