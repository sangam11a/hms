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
                       document.getElementById(id1).innerHTML=data[0][indx];
                },
                error:function(error){
                    console.log(error);
                }
            });
            }
           function ajax_call(url){
            $.ajax({
                url:url,
                method:"get",
                success:function(data){
                    data=JSON.parse(data);
                    console.log(data);
                    if(url=="../ajax/ajax_table.php"){
                        console.log(Object.keys(data).length);
                        handle_table(data);
                    }
                    if(url=="../ajax/ajax_sold_items.php"){
                        console.log(Object.keys(data).length);
                        handle_sold_items(data);
                    }
                    if(url=="../ajax/ajax_payment_history.php"){
                        console.log(Object.keys(data).length);
                        handle_payment_history(data);
                    }
                    if(url=="../ajax/ajax_payment_mode.php"){
                        console.log("payment");
                        handle_payment_mode(data);
                    }
                },
                error:function(error){
                    console.log(error);
                }
            });
           }

           function handle_payment_mode(data){
            var x="<table class='table table-striped table-hover'><thead><th>S.N</th><th>Payment Modes</th><th>Total Trans.</th></thead>";
                for(i=0;i<data.length;i++){
                    x+="<tr><td>"+Number(i+1)+"</td><td>"+data[i]['payment_mode']+"</td><td>"+data[i]["count(payment_mode)"]+"</td></tr>";
               
                }
                x+="</table>";
                console.log(x);
                document.getElementById('payment_mode').innerHTML=x;
           }
           

           function handle_payment_history(data){
            var x="<table class='table table-striped table-hover'><thead><th>S.N</th><th>Name</th><th>Paid Amount</th></thead>";
                for(i=0;i<data.length;i++){
                    x+="<tr><td>"+Number(i+1)+"</td><td>"+data[i]['food_item']+"</td><td>"+data[i]['total']+"</td></tr>";
                }
                x+="</table>";
                console.log(x);
                document.getElementById('payment_history').innerHTML=x;
            }

           function handle_table(data){
               var occupied=0.0,empty=0.0,booked=0.0;
            for(i=0;i<data.length;i++)
            {
                if(data[i]["status"]=="empty"){
                    empty++;
                }
                else if(data[i]["status"]=="occupied"){
                    occupied++;
                }
                else{
                    booked++;
                }
            }
            document.getElementById("booking_number").innerHTML=booked;
            document.getElementById("occupied_number").innerHTML=occupied;
            document.getElementById("available__number").innerHTML=data.length;
           }
           function handle_sold_items(data){
                var x="<table class='table table-striped table-hover'><thead><th>S.N</th><th>Name</th></thead>";
                for(i=0;i<data.length;i++){
                    x+="<tr><td>"+Number(i+1)+"</td><td>"+data[i]['food_item']+"</td></tr>";
                }
                x+="</table>";
                console.log(x);
                document.getElementById('top_sales').innerHTML=x;
           }
           ajax_call("../ajax/ajax_sold_items.php");
          ajax_call("../ajax/ajax_table.php");
          ajax_call("../ajax/ajax_payment_history.php");
           ajax_call("../ajax/ajax_payment_mode.php");

           
        });