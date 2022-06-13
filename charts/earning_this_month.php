<!--DOCTYPE html-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        $("document").ready(function(){
            var arr1=[],arr2=[];
            var sql="select sum(total),date1 from sold_items group by date1 limit 31;";
            $.ajax({
                url:"../ajax/ajax_post.php",
                method:"post",
                data:{sql:sql},
                success:function(data){
                    data=JSON.parse(data);
                    for(i=0;i<data.length;i++){
                        arr1.push(data[i]["sum(total)"]);
                        arr2.push(data[i]["date1"]);
                    }
                    monthly_transaction(arr1,arr2);
                },
                error:function(error){
                    alert("Error in monthly earning chart");
                }
            })
        });

        function monthly_transaction(data,date){
            var options = {
          series: [{
          name: "Monthly earning",
          data: data
        }],
          chart: {
          type: 'area',
          height: 250,
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
          text: 'Earning this month',
          align: 'left'
        },
       
        labels: date,
        xaxis: {
          type: 'datetime',
        },
        yaxis: {
          opposite: true
        },
        legend: {
          horizontalAlign: 'left'
        }
        };

        var chart = new ApexCharts(
            document.querySelector("#monthlyIncome"),
            options
        );

        chart.render();
        }
     </script>
</head>
<body>
    <div id="monthlyIncome"></div>
    
</body>
</html>