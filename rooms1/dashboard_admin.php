<?php
include_once "../layout/header.php";
?> 
<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin</title>
    <!-- <link rel="stylesheet" href="../admin/layout/css/dashboard.css"> -->
    <style>
      .apexcharts-menu{
        color:black;
      }
      .apexcharts-tooltip.apexcharts-theme-light{
        color:royalblue;
      }
    </style>
    <script>
        
$(document).ready(function(){
  var getdate=new Date();var x;
    if(getdate.getMonth()<=10)
    {x=getdate.getFullYear()+"-0"+Number(getdate.getMonth()+1)+"-"+getdate.getDate();}
    else 
    { x=getdate.getFullYear()+"-"+getdate.getMonth()+"-"+getdate.getDate();}
   var total_orders=ajax_post("total_orders","Select Count(DISTINCT time1) from `sold_items`","Count(DISTINCT time1)");
   var pending_order=ajax_post("pending_order","Select Count(DISTINCT time1) from temp_table","Count(DISTINCT time1)")
  var total_transacion=ajax_post("total_transaction","Select sum(total) from sold_items","sum(total)");
  var ddd="Select sum(total) from sold_items where date1='"+x+"'";
    console.log(ddd);
  var today_transasction=ajax_post("today_transaction",ddd,"sum(total)");
//   var rooms=ajax_post("available_rooms","Select ");
//    var bookings;

    function ajax_post(id1,sql,indx){
        $.ajax({
        url:"../ajax/ajax_post.php",
        method:"post",
        data:{sql:sql},
        success:function(data){
            data=JSON.parse(data);
            console.log(data);
                console.log(Object.keys(data).length);
                // handle_table(data);
               document.getElementById(id1).innerHTML=data[0][indx];
        },
        error:function(error){
            console.log(error);
        }
    });
    }

//thapeko part
var byyear="select year(date1),sum(total) from sold_items group by year(date1);";
var daily="select day(date1),sum(total) from sold_items group by day(date1);";
var weekly="select week(date1),sum(total) from sold_items group by week(date1);";
var monthly="select monthname(date1),sum(total) from sold_items group by month(date1);";
ajax_post_chart("linecharts",daily,"day(date1)",0);
$(".filter_button").click(function(){
 let btnID= $(this).attr('id');
 if(btnID=="weekly"){
  ajax_post_chart("linecharts",weekly,"week(date1)",1);
 }
 else if(btnID=="monthly"){
  ajax_post_chart("linecharts",monthly,"month(date1)",1);   
}
else if(btnID=="daily"){
  ajax_post_chart("linecharts",daily,"day(date1)",1);   
}
else{
  ajax_post_chart("linecharts",yearly,"year(date1)",1);
}
});

var data,date;

function ajax_post_chart(id,sql,indx,update){
       $.ajax({
       url:"../ajax/ajax_post.php",
       method:"post",
       data:{sql:sql},
       success:function(data){
           data=JSON.parse(data);
           console.log(data);
           //    document.getElementById(id1).innerHTML=data[0][indx];
              var arr=[],dat=[];
              for(i=0;i<data.length;i++){
                  arr.push(data[i]['sum(total)']);
                  dat.push(data[i][indx])
              }
            //  chart(id,arr,dat,update);
            // data=arr;date=dat;
       },
       error:function(error){
           console.log(error);
       }
   });
   }
// function chart(id,data,date,update){
                   var areaChart = {
           chart: {
               height: 320,
               type: "area"
           },
           dataLabels: {
               enabled: false
           },
           series: [
               {
               name: "Series 1",
               data: [1,3,4,5],
               }
           ],
           fill: {
               type: "gradient",
               gradient: {
               shadeIntensity: 1,
               opacityFrom: 0.7,
               opacityTo: 0.9,
               stops: [0, 90, 100]
               }
           },
           xaxis: {
               categories: ['Jan','Feb','Mar']
           }
           };

           var chart = new ApexCharts(document.getElementById("linecharts"), areaChart);
          // if(update==0) {           
          //   chart.render();
          // }
          // else{
          //   chart.updateSeries([{
          //     data:data
          //   }]);
          //   chart.render();
          // }
    // }
   create_chart(chart,data,date,0);
    function create_chart(chart,data,date,update){
      if(update==0) {           
          chart.render();
        }
        else{
          chart.updateSeries([{
            data:data,
          }]);
        }
    }
    popular_day();
    function popular_day(){
     var url="../ajax/ajax_post.php";
     var sql="SELECT SUM(total),day1, COUNT(*) FROM sold_items GROUP BY day1 ORDER BY SUM(total) DESC;";
   $.ajax({
       url:url,
       data:{sql:sql},
       method:"post",
       success:function(data){
           data=JSON.parse(data);
           var arr1=[],arr2=[];
           for(i=0;i<data.length;i++){
               arr1.push(data[i]["day1"]);
               arr2.push(Number(data[i]["SUM(total)"]));
           }
           doughnut(arr1,arr2);
       },
       error:function(error){
           console.log(error);
       }
   });
    }
   function doughnut(days,data){
       
   var options = {
     series:data,
     labels:days,
     chart: {
     width: 450,
     type: 'donut',
   },
   plotOptions: {
     pie: {
       startAngle: -90,
       endAngle: 270
     }
   },
   dataLabels: {
     enabled: false
   },
   fill: {
     type: 'gradient',
   },
   legend: {
     formatter: function(val, opts) {console.log(val);
       return val//+"-"+opts.w.globals.series[opts.seriesIndex]
     }
   },
   title: {
     text: 'Most popular Days'
   },
   responsive: [{
     breakpoint: 480,
     options: {
       chart: {
         width: 400
       },
       legend: {
         position: 'bottom'
       }
     }
   }]
   };

   var chart = new ApexCharts(document.getElementById("popular_day_chart"), options);
   chart.render();
 
   }
});
    </script>
 <script src="../admin/layout/js/dashboard_common.js"></script>
 <style>
        .filter_button{
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            font-size: 16px;
            font-weight:400;
            background-color:royalblue;
            color: rgb(255, 255, 255);
            padding:4px 8px;
        }
        @media screen and (min-width:800px) {
          #trending_dishes{
            padding-top:25px;
          }
        }
    </style>
</head>
<body >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <?php include_once "../rooms/dashboard_common.php";?>

         <div class="row">

            <div class="col col-sm col-xl-4 col-md">
                    <span class="title_dashboard">
                    <h4>Current Balance</h4>
                    </span>
                    <div class="card " style="background-color:#B51659;color:ivory;padding:14px 8px;">
                            <div class="card-title">
                                <h4 style="padding-left:12px;">Total Due</h4 >
                            </div>
                            <div class="card_body">
                                <span class="row1" id="row1">
                                <div class="total_due" style="padding-left:16px;font-size:22px;"><i class="fas fa-money-bill"></i>
                                    <?php
                                      include_once "../classes/order_db.php";
                                      $order=new Order();
                                      $result=$order->get_temp_tables("Select sum(total) from temp_table",1);
                                      if($result>0){
                                        foreach($result as $row){
                                          $x=$row["sum(total)"];
                                        }
                                        
                                      }
                                      else{
                                        $x=0;
                                      }
                                      echo $x;
                                    ?>

                                </div>
                                </span>
                            </div>
                      </div>
                      <div class="card">
                            <div class="card-title">
                            </div>
                            <div class="card_body">
                                <span class="row1" id="row1">
                                <div class="earning_this_month">
                                  <?php include_once "../charts/earning_this_month.php";?>
                                </div>
                                </span>
                            </div>
                      </div>
            </div>  

            <div class="col-sm col-xl-8">
                            <span class="title_dashboard">
                              <h4>Earning Summary</h4>
                            </span>
                          <div class="card">
                            <div class="card-title"></div>
                                <div class="card_body">
                                    <span class="row1" id="row1">
                                      <div id="total_orders_this_month">
                                        <?php include_once "../charts/area.php";?>
                                      </div>
                                    </span>
                                </div>
                            </div>
                         </div>
            </div>
           <div class="row">
                <div class="col-sm col-xl-7">
                        <div class="card">
                          <div class="card-title">
                              <div id="popular_day_chart"></div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-title">
                            Most visited time
                          </div>
                        </div>
                </div>
                <div class="col-sm col-xl-5" id="trending_dishes">
                        <div class="card" style="padding:10px;">
                          <div class="card-title">
                            <h4 stye="color:black;">Trending Dishes</h4>
                          </div>
                            <div class="card-body">
                                    <?php
                                         include_once "../classes/order_db.php";
                                         $order=new Order();
                                         $sql="SELECT food_item,SUM(quantity), COUNT(*) 
                                         FROM sold_items 
                                         GROUP BY food_item ORDER BY SUM(quantity) DESC limit 8;";
                                         $result=$order->get_temp_tables($sql,1);
                                         if($result>0){
                                          $i=0;
                                         $table="<table class='table'><thead><th class='text-center'>S.N</th><th class='text-center'>Name</th><th class='text-center'>Consumption Qty</th></thead>";
                                         foreach($result as $row){++$i;
                                          $table.="<tbody><tr><td class='text-center'>".$i."</td><td class='text-center'>".$row["food_item"]."</td><td class='text-center'>".$row["SUM(quantity)"]."</td></tr></tbody>";
                                         }
                                         $table.="</table>";
                                         echo $table;
                                         }
                                         else{
                                           echo "<div>Sold History is empty</div>";
                                         }
                                    ?>
                            </div>
                        </div>
                </div>
           </div>
</div>

</body>
</html>