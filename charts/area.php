<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
        #chart {
  max-width: 650px;
  margin: 35px auto;
} 
.transaction_button{
            border-top-right-radius: 10px;
            border-bottom-left-radius: 10px;
            font-size: 16px;
            font-weight:400;
            background-color:royalblue;
            color: rgb(255, 255, 255);
            padding:4px 8px;
        }
        .activated{
            font-size:18px;
            background-color: indianred;
        }

    </style>
    <script>
     $(document).ready(function(){
         console.log("ready");
         var byyear="select year(date1),sum(total) from sold_items group by year(date1);";
         var daily="select day(date1),sum(total) from sold_items group by day(date1);";
         var weekly="select week(date1),sum(total) from sold_items group by week(date1);";
         var monthly="select monthname(date1),sum(total) from sold_items group by month(date1);";

                            var options1 = {
                    chart: {
                        height: 320,
                        type: "area"
                    },
                    dataLabels: {
                        enabled: false
                    },
                    series: [1,2],
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
                        categories: []
                    }
                    };

                    var chart = new ApexCharts(document.getElementById('chart'), options1);
                    createChart(chart);
                   function createChart(chart){ chart.render();charts("first");}
                   $(".transaction_button").click(function(){
                       var value=$(this).attr("id");
                       $(this).addClass("activated");
                      charts(value);
                    
                   });
                   $(".transaction_button").blur(function(){
                    $(this).removeClass("activated");
                   });
                   function charts(value){
                    var indx="",sql;var first=1;
                       if(value=="weekly"){
                        indx="week(date1)";
                        sql=weekly;
                       }
                       else if(value=="yearly"){
                        indx="year(date1)";
                        sql=byyear;
                       }
                       else if(value=="daily"||value=="first"){
                        indx="day(date1)";
                        sql=daily;
                       }
                       else {
                        indx="monthname(date1)";
                        sql=monthly;
                       }
                      
                    $.ajax({
                        url:"../ajax/ajax_post.php",
                        data:{sql:sql},
                        method:"post",
                        success:function(data){
                            data=JSON.parse(data);
                            console.log(data)
                            var arr1=[],arr2=[];
                            for(i=0;i<data.length;i++){
                                arr1.push(data[i]["sum(total)"]);
                                arr2.push(data[i][indx]);
                            }
                            console.log(arr1,arr2);
                            destroyChart(chart,arr1,arr2,first);
                        },
                        error:function(error){
                            alert(error);
                        }
                    });
                   }

                   function destroyChart(chart,data,date,first){
                       console.log(first);
                       chart.destroy();
                       var options1 = {
                    chart: {
                        height: 320,
                        type: "area"
                    },
                    dataLabels: {
                        enabled: false
                    },
                    series: [
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

                       chart=new ApexCharts(document.getElementById('chart'), options1);
                       
                       chart.render();
                       chart.resetSeries();
                       chart.updateSeries([{
                           data:data
                       }],
                       );
                    
                   }
    //   }
   
     });
     </script>
</head>
<body>
    <div id="chart"></div>
    <div class="row2">
        <button class="transaction_button" id="daily">Daily</button>
        <button class="transaction_button" id="weekly">Weekly</button>
        <button class="transaction_button" id="monthly">Monthly</button>
        <button class="transaction_button" id="yearly">Yearly</button>
    </div>
</body>
</html>