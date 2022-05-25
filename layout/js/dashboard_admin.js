
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