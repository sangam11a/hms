<style>
    table{
        width:97%;
        border-collapse:collapse;
    }
    
    tr{
        border-bottom: 1px solid black;
    }

     td{
        padding:10px 28px;
                
    }
    tr:nth-child(even){
        /* background-color: rgba(29, 28, 26,0.7); */
        background-color: rgba(171, 163, 211, 0.47);
        color: #213e47;
        font-weight:400;
    }
    tr:nth-child(odd){
        
        background-color: rgb(229, 224, 250);
        /* rgba(154, 158, 216, 0.55); */
        color: rgb(32, 28, 28);
    }
    tr:first-child{ 
            font-size: 18px;
            color: #fff;
            padding: 8px 16px;
            line-height: 1.4;
            background-color: #6c7ae0;
            
    }
    tr:first-child  td:first-child, tr:first-child th:first-child{            
        border-radius: 10px 0 0 0;  
    }
    tr:first-child  td:last-child, tr:first-child th:last-child{            
        border-radius: 0 10px 0 0;  
    }
    tr:last-child  td:first-child{     
        border-radius:  0 0 0px 10px;  
    }
    tr:last-child  td:last-child{            
        border-radius: 0 0 10px 0;  
    }
    tr:last-child{
        border-bottom: 0px;
    }
   .first-  tr:hover{
    background-color: #6c7ae0;
    color:white;
    }
     tr:hover{
        color:rgb(15, 14, 14);
        background-color: rgba(201, 201, 245, 0.8);
   
        }
        .pagination{
           list-style-type:none;
           display: flex;
           text-decoration: none;
        }
        .pagination li{         
           margin-right:12px;         
           text-decoration: none;
        }
        .pagination li a{
           text-decoration: none;
           
           /* white; */
           padding: 4px 6px;
           border-radius: 2px;
           border-top-left-radius: 4px;
           border-bottom-right-radius: 4px;
        }
        .enabled{
            background-color: rgb(240, 122, 122);
           color:#260c0c;
        }
        .disabled{
            background-color: rgba(240, 122, 122,0.2);
            color: rgb(38, 12, 12,0.6);
        }
        .time-slots{
            background-color: white;
        }
</style>
<?php
  include_once "../classes/dynamic.class.php";
function table($caption,$title,$values,$total_rows,$table_name,$total_pages="10"){
   $conn=new Dynamic();
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
            } 
            else {
            $pageno = 1;
        }         
        $no_of_records_per_page = $total_pages;       
        $offset = ($pageno-1) * $no_of_records_per_page;
        $temp_count=$conn->own_query("Select count(*) from $table_name");
        // echo $temp_count;
        $total_rows=$temp_count[0]["count(*)"];
        $total_pages = ceil($total_rows / $no_of_records_per_page);
        $result=$conn->total_rows($table_name,"*"," order by id LIMIT $offset, $no_of_records_per_page ");
        $id=$pageno;
        if($total_rows==0){
            print("<p style='color:red;font-size:19px;'>No data available</p>");
        }
        else{
            // echo "<input type='text' value='$values'>";
        echo " <caption><h3>$caption</h3></caption>
        <table class='table'><tr>
        ";
        $can=0;
        $reason=0;//reason
        for($i=0;$i<count($title);$i++){
            echo "<td>";
                echo "$title[$i]";
                if($title[$i]=="Cancelled On"){
                    $can=$i;
                }
                if($title[$i]=="Reasons"){
                    $reason=1;
                }
            echo "</td>";      
        }
        echo "</tr>";
        $pp=1;
        // print_r($values);
                foreach($result as $row){
                    echo "<tr>";
                    
                    if($title[0]=='S.N') {echo "<td>".intval($offset)+$pp."</td>";$pp++;}
                    for($j=1;$j<count($values);$j++){
                        
                        if($can==$j) {
                            echo "<td>".date("Y/m/d H:i:s",$row[$values[$j]])."</td>";
                           }
                       else if($title[$j]=='Created On') echo "<td>".date("Y/m/d H:i:s",$row[$values[$j]])."</td>";
                      else if($reason==1){
                          echo "<td>";
                                if(strlen($row[$values[$j]])<30){
                                    echo $row[$values[$j]];
                                }
                                else{
                                    echo substr($row[$values[$j]],0,30).".....";
                                }
                          echo "</td>";
                      } 
                       else echo "<td>".$row[$values[$j]]."</td>";
                    }
                    if(count($title)!=count($values)){
                        echo "<td><button class='edit_btn1' onclick='option_click(\"edit\",\"".implode('^',$row)."\")'>Edit</button>
                        <button  onclick='option_click(\"delete\",\"".implode('^',$row)."\")'>Delete</button></td>";
                    }
                    echo "</tr>";
                }
        echo" </table>";
        

?>
<ul class="pagination">
        <li><a class='pagination_buttons <?php if($pageno==1) echo'disabled'; else echo 'enabled'; ?>' href="?pageno=1">First</a></li>
        <li>
            <a class="pagination_buttons <?php if($pageno <= 1){ echo 'disabled'; } else echo 'enabled';?>" href="<?php if($pageno <= 1){ echo '#'; } else { echo "?pageno=".($pageno - 1); } ?>">Prev</a>
        </li>
        <li class="">
            <a class="pagination_buttons <?php if($pageno >= $total_pages){ echo 'disabled'; } else echo 'enabled'; ?>" href="<?php if($pageno >= $total_pages){ echo '#'; } else { echo "?pageno=".($pageno + 1); } ?>">Next</a>
        </li>
        <li><a class='pagination_buttons <?php if($pageno==1 || $pageno==$total_pages) echo'disabled'; else echo 'enabled'; ?>' href="?pageno=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
<?php
}
}
?>
