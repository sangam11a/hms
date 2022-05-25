$(document).ready(function(){
    var getdate=new Date();var x;
    if(getdate.getMonth()<=10)
    {x=getdate.getFullYear()+"-0"+Number(getdate.getMonth()+1)+"-"+getdate.getDate();}
    else 
    { x=getdate.getFullYear()+"-"+getdate.getMonth()+"-"+getdate.getDate();}
   ajax_post("total_orders","Select Count(DISTINCT time1) from `sold_items`","Count(DISTINCT time1)");
   ajax_post("pending_order","Select Count(DISTINCT time1) from temp_table","Count(DISTINCT time1)")
   ajax_post("total_transaction","Select sum(total) from sold_items","sum(total)");
   ajax_post("available_rooms","Select count(roomnumber) from roomnumber","count(roomnumber)");
   ajax_post("occupied_rooms","Select count(*) from `roomnumber` where isempty='false'","count(*)");
   var ddd="Select sum(total) from sold_items where date1='"+x+"'";
    console.log(ddd);
  ajax_post("today_transaction",ddd,"sum(total)");

//   var rooms=ajax_post("available_rooms","Select ");
//    var bookings;

    function ajax_post(id1,sql,indx){
        $.ajax({
        url:"../ajax/ajax_post.php",
        method:"post",
        data:{sql:sql},
        success:function(data){
            data=JSON.parse(data);
            console.log(sql);
                console.log(Object.keys(data).length);
               document.getElementById(id1).innerHTML=data[0][indx];
        },
        error:function(error){
            console.log(error);
        }
    });
    }
});