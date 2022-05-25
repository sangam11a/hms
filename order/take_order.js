$("document").ready(function(){
    $(".category_filter").click(function(){
      var id=$(this).attr('id');
      if(id=="all"){
        sql="Select * from menu";
      }
      else{
        sql="Select * from menu where category='"+id+"'";
      }
      console.log(id,sql);
      $.ajax({
        url:"../ajax/ajax_post.php",
        data:{sql:sql},
        method:"post",
        success:function(data){
          data=JSON.parse(data);
          var button="";
            for(i=0;i<data.length;i++){
                button+="<div class='col-sm-4 ' style='margin-top:8px;'><div class='card' >";
                button+="<div class='card-title '>";
                button+="<img src='../order/"+data[i]['menu_photo']+"' width=90% height=90% style='padding-left:5%;'><br></div>";
                button+="<div class='card-body'><h4>";
                button+=data[i]['item_name'];
                button+="<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#take_order_modal' onclick=\"takeOrder('"+data[i]['item_name']+"','"+data[i]['price']+"')\" style='float:right;'>"+"Order</button>";
                button+="</h4></div></div></div>";
                }
                $("#menus").html(button);
        },
        error:function(error){
          alert("Some error is there while filtering");
        }
      });
    });
    $('#searching_menu').keyup(function(){
      var value=$(this).val();
      sql="Select * from menu where item_name LIKE '%"+value+"%'";
      $.ajax({
        url:"../ajax/ajax_post.php",
        data:{sql:sql},
        method:"post",
        success:function(data){
          data=JSON.parse(data);
          console.log(data);
          var button="";
            for(i=0;i<data.length;i++){
                button+="<div class='col-sm-4 ' style='margin-top:8px;'><div class='card' >";
                button+="<div class='card-title '>";
                button+="<img src='../order/"+data[i]['menu_photo']+"' width=90% height=90% style='padding-left:5%;'><br></div>";
                button+="<div class='card-body'><h4>";
                button+=data[i]['item_name'];
                button+="<button class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#take_order_modal' onclick=\"takeOrder('"+data[i]['item_name']+"','"+data[i]['price']+"')\" style='float:right;'>"+"Order</button>";
                button+="</h4></div></div></div>";
                }
                $("#menus").html(button);
        },error:function(error){
          alert("Some error while searching");
        }
      });
    })
  });