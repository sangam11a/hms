<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Gradient Donut</title>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- <link href="../../assets/styles.css" rel="stylesheet" /> -->
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <style>
      
        #chart {
      max-width: 380px;
      margin: 35px auto;
      padding: 0;
    }
    
    .apexcharts-legend-text tspan:nth-child(1) {
      font-weight: lighter;
      fill: #999;
    }
    
    .apexcharts-legend-text tspan:nth-child(3) {
      font-weight: bold;
    }
      
    </style>

    <script>
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/eligrey-classlist-js-polyfill@1.2.20171210/classList.min.js"><\/script>'
        )
      window.Promise ||
        document.write(
          '<script src="https://cdn.jsdelivr.net/npm/findindex_polyfill_mdn"><\/script>'
        )
    </script>

    
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    

    <script>
      
    </script>

    
  </head>

  <body>
     <div id="popular_day_chart"></div>

    <script>
      $("document").ready(function(){
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

    
  </body>
</html>
