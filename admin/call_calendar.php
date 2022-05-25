<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
       function call1(month="",year=""){
            // var 
            var date=new Date();
      var room_type=document.getElementById("rooom_name33").value;
        var xhr = new XMLHttpRequest();
       if(month==""){
        month=date.getMonth();
        month++;
       }
       else{

       }
        console.log(month)
       if(year==""){
        year=date.getFullYear();
       }
       else{

       }
       
        var url="calendar.php?room_type="+room_type+"&month="+month+"&year="+year;
        console.log(url);
        xhr.open("GET", url);
                xhr.onload = function () {
                        if (this.status >= 200 && this.status < 300) {
                            data=JSON.parse(xhr.responseText);var j=0;
                            var table="<table><tr><th>Sun</th><th>Mon</th><th>Tue</th><th>Wed</th><th>Thur</th><th>Fri</th><th>Sat</th></tr>";
                            console.log(data)
                            var arr=[];
                            if(data.length>=2){
                                for(i=0;i<data[0]["gap"];i++){
                                    if(j%7==0) table+="<tr>";
                                    table+="<td></td>";
                                    if(++j%7==0) table+="</tr>";
                                }
                                var jk=0;
                                for(i=1;i<=data[1]["end"];i++){
                                    fontcolor="#2cb67d";
                                    if(j==0) table+="<tr>";
                                    for(k=2;k<data.length;k++){
                                        if(i>=data[k]["checkin_day"]&&i<=data[k]["checkout_day"]){
                                            fontcolor="#fa5246";
                                            break;
                                        }
                                }
                            table+="<td style='color:"+fontcolor+";font-weight:bolder;background-color:#fff;'>"+i+"</td>";
                            j++;
                            if(j==7) table+="</tr>";
                            j=j%7;
                        }
                                table+="</table>";console.log(table);
                        document.getElementById("calendars").innerHTML=table;
                    }
                } 
                // else {
                //     reject({
                //     status: this.status,
                //     statusText: xhr.statusText
                //     });
                // }
                };
                xhr.send();
        }
        // window.onload=function(){
        //     var http = new XMLHttpRequest();
        //     http.onreadystatechange = function () {
        //          if (this.readyState == 4) {
        //             console.log('Request has been sent, ' + this.response);
        //          }
        //         };

        //     http.open('GET', 'calendar.php?month=2&year=2022&room_type=100', true);
        //     http.send();
        // }
    </script>
</head>
<body onload="call1()">
<div id="calendars"></div>
  
     <input type="text" id="rooom_name33" value='100'>

</div>
</body>
</html>