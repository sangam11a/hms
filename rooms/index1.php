<?php
require_once "../layout/header.php";
if($_SESSION['role'] === "admin" || $_SESSION['role'] === "manager"){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <!-- <script src="../admin/layout/js/dashboard_admin.js"></script> -->
 <script>
   
function chart(){
    lineChart();
    circleChart();
    //donutChart();
    //areaChart();
   // columnChart();
}

 function lineChart(){
    var options = {
  series: [{
    name: "Desktops",
    data: [10, 41, 35, 51, 49, 62, 69, 91, 148]
}],
  chart: {
  height: 350,
  type: 'line',
  zoom: {
    enabled: false
  }
},
dataLabels: {
  enabled: false
},
stroke: {
  curve: 'straight'
},
title: {
  text: 'Product Trends by Month',
  align: 'left'
},
grid: {
  row: {
    colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
    opacity: 0.5
  },
},
xaxis: {
  categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep'],
}
};

var chart = new ApexCharts(document.querySelector("#linecharts"), options);
chart.render();
 }

 function circleChart(){
    var options = {
  series: [75],
  chart: {
  height: 350,
  type: 'radialBar',
  toolbar: {
    show: true
  }
},
plotOptions: {
  radialBar: {
    startAngle: -135,
    endAngle: 225,
     hollow: {
      margin: 0,
      size: '70%',
      background: '#fff',
      image: undefined,
      imageOffsetX: 0,
      imageOffsetY: 0,
      position: 'front',
      dropShadow: {
        enabled: true,
        top: 3,
        left: 0,
        blur: 4,
        opacity: 0.24
      }
    },
    track: {
      background: '#fff',
      strokeWidth: '67%',
      margin: 0, // margin is in pixels
      dropShadow: {
        enabled: true,
        top: -3,
        left: 0,
        blur: 4,
        opacity: 0.35
      }
    },

    dataLabels: {
      show: true,
      name: {
        offsetY: -10,
        show: true,
        color: '#888',
        fontSize: '17px'
      },
      value: {
        formatter: function(val) {
          return parseInt(val);
        },
        color: '#111',
        fontSize: '36px',
        show: true,
      }
    }
  }
},
fill: {
  type: 'gradient',
  gradient: {
    shade: 'dark',
    type: 'horizontal',
    shadeIntensity: 0.5,
    gradientToColors: ['#ABE5A1'],
    inverseColors: true,
    opacityFrom: 1,
    opacityTo: 1,
    stops: [0, 100]
  }
},
stroke: {
  lineCap: 'round'
},
labels: ['Percent'],
};
var chart = new ApexCharts(document.querySelector("#circlechart"), options);
chart.render();

 }

 function donutChart(){    
var options = {
  series: [44, 55, 41, 17, 15],
  chart: {
  width: 380,
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
  formatter: function(val, opts) {
    return val + " - " + opts.w.globals.series[opts.seriesIndex]
  }
},
title: {
  text: 'Gradient Donut with custom Start-angle'
},
responsive: [{
  breakpoint: 480,
  options: {
    chart: {
      width: 200
    },
    legend: {
      position: 'bottom'
    }
  }
}]
};

var chart = new ApexCharts(document.querySelector("#most_popular_food"), options);
chart.render();    
 }

 function columnChart(){
  var options = {
  series: [{
  name: 'Net Profit',
  data: [44, 55, 57, 56, 61, 58, 63, 60, 66]
}],
  chart: {
  type: 'bar',
  height: 350
},
plotOptions: {
  bar: {
    horizontal: false,
    columnWidth: '55%',
    endingShape: 'rounded'
  },
},
dataLabels: {
  enabled: false
},
stroke: {
  show: true,
  width: 2,
  colors: ['transparent']
},
xaxis: {
  categories: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct'],
},
yaxis: {
  title: {
    text: '$ (thousands)'
  }
},
fill: {
  opacity: 1
},
tooltip: {
  y: {
    formatter: function (val) {
      return "$ " + val + " thousands"
    }
  }
}
};
var chart = new ApexCharts(document.querySelector("#most_popular_time"), options);
chart.render();

 }
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
               data: [12,3]
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
               categories: date
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
     width: 380,
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
       return val+"-"+opts.w.globals.series[opts.seriesIndex]
     }
   },
   title: {
     text: 'Most popular Days'
   },
   responsive: [{
     breakpoint: 480,
     options: {
       chart: {
         width: 200
       },
       legend: {
         position: 'bottom'
       }
     }
   }]
   };

   var chart = new ApexCharts(document.querySelector("#popular_day_chart"), options);
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
    </style>
</head>
<body >
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
 <?php include_once "dashboard_common.php";?>

         <div class="row">

            <div class="col-sm col-xl-4">
                    <span class="title_dashboard">
                    <h4>Current Balance</h4>
                    </span>
                    <div class="card">
                            <div class="card-title">
                                <!-- <h5>Earning This month</h5> -->
                            </div>
                            <div class="card_body">
                                <span class="row1" id="row1">
                                <div class="earning_this_month">
                                  <div id="popular_day_chart"></div>
                                </div>
                                </span>
                            </div>
                      </div>
                      <div class="card">
                            <div class="card-title">
                                <h5>Earning This month</h5>
                            </div>
                            <div class="card_body">
                                <span class="row1" id="row1">
                                <div class="earning_this_month">This month</div>
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
                <div class="col-sm col-xl-8">
                    <div class="card">
                       <div class="card-title">
                            asd
                       </div>
                    </div>
                </div>
           </div>
</div>
    </div>
</body>
</html>

<?php 
}
if($_SESSION['role'] === "reception"){?>
    <?php
// include_once "../admin/layout/header.php";
include_once "../classes/order_db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>  
      <link href="../layout/css/dashboard.css" rel="stylesheet">
    <script src="../layout/js/dashboard_reception.js">
       </script>
</head>
<body>
    <div>
        <div style="margin-bottom:7px;">
            <button class="btn btn-primary" onclick="location.href='../order/take_order.php'">Place order</button>
            <button class="btn btn-primary" >Room Check in</button>
            <button class="btn btn-primary" >Schedule Booking</button>
            <button class="btn-primary" >Check out</button>

        </div>
        <?php include_once "dashboard_common.php";?>
        <div class="row">
            <div class="col-sm col-md tble">
                <span class="row"><h5>Trending Dishes</h5></span>
                <span class="row" id='top_sales'></span>
            </div>
            <div class="col-sm col-md tble">
                <span class="row">
                <h5>Payment received by cashier
             </h5>
             <span class="row" id="payment_history"></span>
             </span>
             <span class="row"></span>
            </div>
            <div class="col-sm col-md tble">
                <span class="row">
                    <h5>Payment Mode</h5>
                    <span class="row" id="payment_mode"></span>
                </span>
                <span class="row"></span>
            </div>
            
        </div>
        <div class="container">
        <div class="row">
        <div class="col-md-6 col-sm circleInfo border-c-blue">
            <span class="number" id="customer_number" >
                <?php
                    $sql="select COUNT(DISTINCT time1) from sold_items where date1='".date("Y-m-d")."'";
                    $order=new Order();
                    $result1=$order->get_temp_tables($sql,1);
                    if(count($result1)>0){
                         foreach($result1 as $a)
                        echo $a['COUNT(DISTINCT time1)'];
                    }
                ?>
            </span><br>
            <span class="text">
                Todays Customers Count
            </span>
        </div>
        <div class="col-md-6 col-sm circleInfo border-c-green">
            <span class="number" id="available__number">

            </span><br>
            <span class="text">
                Available Tables
            </span>
        </div>
        <div class="col-md-6 col-sm circleInfo border-c-pink">
            <span class="number" id="occupied_number">

            </span>
            <span class="text"><br>
                 Occupied Tables
            </span>
        </div>
        <div class="col-md-6 col-sm circleInfo border-c-yellow">
            <span class="number" id="booking_number">

            </span>
            <span class="text"><br>
                Booked tables
            </span>
        </div>
        </div>

    </div>
    </div>
</body>
</html>
<?php
}
require_once "../layout/footer.php";
?>