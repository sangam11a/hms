<?php
include_once "dbh.class.php";
date_default_timezone_set('Asia/Kolkata');
class Order extends Dbh{
    private $host = "localhost";
    //private $user = "root";
   // private $pwd = "";
    private $dbName = "thapasan_hotel_eternity";

    public function __construct()
    {
        try{$sql="create table if not exists payment_mode (
            id int not null auto_increment unique,
              payment_mode varchar(30) not null
            );";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            
        }
        catch(Exception $e){
            echo $e;
        }

    }

    public function create_order($table_number,$order_name,$quantity){
        $sql="Insert into `orders`(table_number,food_name,quantity,order_time,order_date) values(?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $ordered_time=date("H:i:s");
        $ordered_date=date("Y/d/j");
        $stmt->execute([$table_number,$order_name,$quantity,$ordered_time,$ordered_date]);
    }

    public function add_menu($item_name,$price,$target_dir,$menu_category){
        $sql="Insert into `menu`(`item_name`,`price`,`menu_photo`,`category`) values(?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$item_name,$price,$target_dir,$menu_category]);
        echo "<Script>console.log('added"."')</script>";
    }

    public function get_menu_items($key="",$value=""){
        if($value==""){
            $sql="Select * from `menu`";
        }
        else{
            $sql="Select * from `menu` where $key=?";
        }
        $stmt=$this->connect()->prepare($sql);
        if($value==""){
            $stmt->execute();
        }
        else{
            $stmt->execute([$value]);
        }
        while($result=$stmt->fetchAll()){
            return $result;
        }
    }

    public function add_table($table_number){
        $sql="Insert into `table_details`(table_number,status) values(?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$table_number,"empty"]);
    }

    public function get_tables_info($table_number=""){
        if($table_number==""){
            $sql="Select distinct(table_number),status from `table_details`";
        }
        else{
            $sql="Select * from `table_details` where `table_number`='$table_number'";
        }
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute();
         while($result=$stmt->fetchAll()){
            return $result;
        }
    }

    public function change_table_status($table_number,$status=""){
        $change="";
        $result=$this->get_tables_info($table_number);
        if($status=="")
        {
            foreach($result as $a){
                $status=$a["status"];
            }
            // if($status=='empty'){
            //     $change='occupied';
            // }
            // else{
                $change="empty";
            // }
        }
        else if($status=="occupied") $change="empty";
        else if($status=="empty") $change="occupied";
        else{
            $change='occupied';
        }
        $sql="Update `table_details` set `status`='$change' where `table_number`='$table_number'";
        $stmt=$this->connect()->prepare($sql);
        echo "<script>alert('$sql')</script>";
        if($stmt->execute()){
            echo "<script>location.href=location.href;document.getElementById('information').innerHTML='Status of table $table_number changed sucessfully';</script>";
        
        }
    }
    public function create_temp_table(){
        try{$sql="Create table if not exists temp_table(id int not null auto_increment unique,table_number varchar(11) not null,food_item varchar(11) not null,price double not null,quantity int not null,date1 varchar(13) not null,time1 varchar(15) not null,total double not null,table_number varchar(10) not null)";
            $stmt=$this->connect()->prepare($sql);
            if($stmt->execute()){
                echo "<script>console.log('Temp table newly created');</script>)";
            }
            else{
                echo "<script>console.log('Temp table not created');</script>)";
            }
                
        }
        catch(Exception $e){
            echo $e;
        }
    }

    public function insertion_temp_table($food_item,$price,$quantity,$table_number){
        $total=0.0;
        $total=$quantity*$price;
        $sql="Insert into temp_table(
            `table_number`,`food_item`,`price`,`quantity`,`date1`,`time1`,`total`) values(?,?,?,?,?,?,?)";
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $stmt=$this->connect()->prepare($sql);
        if($stmt->execute([$table_number,$food_item,$price,$quantity,$date,$time,$total])){
            return 1;
        }
        else return 0;
    }

    public function insert_temp_table($food_item,$price,$quantity,$table_number,$name,$room_number){
        $total=0.0;
        $total=$quantity*$price; 
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $sql="Insert into temp_table(`table_number`,`food_item`,`price`,`quantity`,`date1`,`time1`,`total`,`customer_name`,`room_number`) values('$table_number','$food_item','$price',$quantity,'$date','$time',$total,'$name','$room_number')";
        
        $stmt=$this->connect()->prepare($sql);
        if($stmt->execute()){
            return 1;
        }
        else return 0;
    }
    public function insert_print_table($food_item,$price,$quantity,$table_number,$name,$room_number){
        $total=0.0;
        $total=$quantity*$price; 
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $sql="Insert into temp_table(`table_number`,`food_item`,`price`,`quantity`,`date1`,`time1`,`total`,`customer_name`,`room_number`) values('$table_number','$food_item','$price',$quantity,'$date','$time',$total,'$name','$room_number')";
        
        $stmt=$this->connect()->prepare($sql);
        if($stmt->execute()){
            return 1;
        }
        else return 0;
    }


    public function own_query($sql){
        try{
            $stmt=$this->connect()->prepare($sql);
        $stmt->execute();
         $result=$stmt->fetchAll();
         return $result;
        }
        catch(Exception $e){
            return [];
        }
    }
    public function get_temp_tables($sql,$count=0){

        $stmt=$this->connect()->prepare($sql);
        $stmt->execute();
        try{
            $result=$stmt->fetchAll();
            if ($count==0)
            return json_encode($result);
            else
            return $result;
        }
        catch(Exception $error){
            return (0);
           // return $error;
        }
        // while($result=$stmt->fetchAll()){
        //         echo $result;
        //          return $result;
        //      }
        // if($result=$stmt->fetchAll()){
        //     return $result;
        // }
        // else{
        //     return 0;
        // }
    }

    public function create_sold_record(){
       try{ $sql="create table if not exists sold_items(
            id int not null auto_increment unique,
            table_number varchar(10) not null,
            customer_name varchar(40) not null,
              food_item varchar(60) not null,
              quantity int not null,
             price float not null,
              date1 varchar(15) not null,
              time1 varchar(15) not null,
              user varchar(15) not null,
              total double not null
            )";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
       }
       catch(Exception $e){
           echo $e;
       }
    }

    public function create_new_database($sql){
           try{
               $stmt=$this->connect()->prepare($sql);
             $stmt->execute();
               
            }
            catch(Exception $e){
           echo $e;
       }
    }

    public function add_sold_record($customer_name,$table_number,$food_item,$quantity,$price,$payment_mode){
       try{ $this->create_sold_record();
            $date=date("Y-m-d");
            $time=date("H:i:s");
            $user="";
            $total=$quantity*$price;
            $sql="Insert into sold_items(`table_number`,`customer_name`,`food_item`,`quantity`,`price`,`date1`,`time1`,`user`,`total`,`payment_mode`,`day1`) values(?,?,?,?,?,?,?,?,?,?,?)";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$table_number,$customer_name,$food_item,$quantity,$price,$date,$time,$user,$total,$payment_mode,date("D")]);
            echo "<script>location.href=location.href;</script>";
           
       }
       catch(Exception $e){
           echo $e;
       }
    }

    public function delete_temp_data($table_number){
        try{$sql="delete from temp_table where `table_number`=?";
            $stmt=$this->connect()->prepare($sql);
            if($stmt->execute([$table_number])){
                echo "<script>console.log('payment sucessful');</script>";
            }
        }
        catch(Exception $e){
           echo $e;
       }
    }

    public function add_new_category($category){
        try{
            $sql="CREATE table if not exists categories(
               `id` int not null auto_increment unique,
                `category` varchar(38) not null primary key
            )";
            $stmt=$this->connect()->prepare($sql);
            if($stmt->execute()){
                $sql="Insert into categories(`category`) values(?)";
               $stmt= $this->connect()->prepare($sql);
                $stmt->execute([$category]);
                
            echo "<script>location.href=location.href;</script>";
            }
            
        }
        catch(Exception $e){
           echo $e;
       }
    }
    public function get_all_categories(){
        try{
                $sql="Select * from categories";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            while($result=$stmt->fetchAll()){
                return $result;
            }
        }
        catch(Exception $e){
           echo $e;
       }
    }
    public function delete_menu_items($menu_photo){
       try{ $sql="Delete from `menu` where `menu_photo`='$menu_photo'";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            unlink($menu_photo);
            echo "<script>location.href=location.href;</script>";
           
       }
       catch(Exception $e){
           echo $e;
       }
    }

    public function get_payment_mode(){
        try{$sql="select * from `payment_mode`";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            while($result=$stmt->fetchAll()){
                return $result;
            }
                
        }
        catch(Exception $e){
           echo $e;
       }
    }
    public function print_table($sql){
        $stmt=$this->connect()->prepare($sql);
       try{
        $stmt->execute();
       }
       catch(Exception $error){
           echo "Some error is there in executing Statements";
       }
    }
    
    public function updating_roomnumber($sql){
        // echo "<script>alert('$sql')</script>";
        $stmt=$this->connect()->prepare($sql);
       try{
        $stmt->execute();
        return(1);
       }
       catch(Exception $error){
           echo "Some error is there in executing Statements";
           return(0);
       }
    }
    

    public function insert_to_booking($sql){
        $stmt=$this->connect()->prepare($sql);
        try{
            $stmt->execute();
            return 1;
        }
        catch(Exception $error){
            echo "<script>alert('Some error is there in executing Statements');</script>";// echo "<script>console.log($error)</script>";
        }
    }

    public function insert_to_booking_normal($room_number,$check_in_date,$check_out_date,$customer_name,$email,$contact,$address,$certification_type,$document_number,$extra_bed,$laundry,$taxi_km){
        $time1=date("H:i:s");
        $sql="Insert into booking(
            room_number,check_in_date,customer_name,email,contact,address,certification_type,
            document_number,check_in_time,check_out_date,check_out_time,extra_bed,laundry,taxi_km) 
            values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
         $stmt=$this->connect()->prepare($sql);
         try{
            $stmt->execute([$room_number,$check_in_date,$customer_name,$email,$contact,$address,$certification_type,$document_number,$time1,$check_out_date,"0",$extra_bed,$laundry,$taxi_km]);
            return(1);
            }
         catch(Exception $error){
            //  echo "Some error is there in Assigning room 'insertion'";//.$error;// echo "<script>console.log($error)</script>";
             return(0);
         }
     }


     public function update_inventory($name){
        $sql="Update `inventory` set `quantity`=`quantity`-1 where name='$name'";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute();
     }
}

class Temptable{
    private $host = "localhost";
    //private $user = "root";
   // private $pwd = "";
    private $user = "root";
    private $pwd = "";
    private $dbName = "thapasan_temp_hotel_eternity";

    protected function connect () {
        $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbName;
        try {
            $pdo = new PDO($dsn, $this->user, $this->pwd);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        }
        catch (PDOException $e) {
            echo "Connection failed". $e->getMessage();
        }
        return $pdo;
    }

    public function create_temp_table($name){
      try{  $sql="Create table if not exists $name(id int not null auto_increment unique,order_name varchar(60) not null,quantity int not null,price double not null,date1 varchar(12) not null,time1 varchar(12) not null);";
             // echo "<script>alert('".$name."')</script>";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
              
      }
        catch(Exception $e){
           echo $e;
       }
    }
    // public function insert_print_table($name,$table_number){
    //     $sql="INSERT INTO `kitchen_print`(`table_number`, `customer_name`) values ('$table_number','$name')";
    //     echo $sql;
    //     $stmt=$this->connect()->prepare($sql);
    //     if($stmt->execute()){
    //        return 1;
    //     }
    //     else{
    //         return(0);
    //     }
    // }
    
    public function delete_negative_order($tablename,$order_name){
        try{
            $sql="Delete from $tablename where order_name=? and quantity=1";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute([$order_name]);
               
       }
       catch(Exception $e){
           echo "<Script>alert('Some error occured removing negative values');</script>";
       }
    }
    
    public function insert_print_table($order,$quantity,$table_number){
        // $name = str_replace(' ', '_', $name);
       try{ $time=date("H:i:s");
            $sql="Insert into temp_table_print(`order_name`,`quantity`,`table_number`,`time`) values('$order','$quantity','$table_number','$time');";        
            // echo $sql;
            $stmt=$this->connect()->prepare($sql);
            if($stmt->execute()){
               return 1;
            }
            else{
                return 0;
            }
               
       }
       catch(Exception $e){
           echo "<Script>alert('".$e."')</script>";
       }
    }

    public function insert_temp_table($name,$order,$quantity,$price){
        try{
            $name = str_replace(' ', '_', $name);
            $sql="Insert into $name(`order_name`,`quantity`,`price`,`date1`,`time1`) values(?,?,?,?,?);";        
            $stmt=$this->connect()->prepare($sql);
            $date=date("Y/m/d");
            $time=date("H:i:s");
            if($stmt->execute([$order,$quantity,$price,$date,$time])){
               return 1;
            }
            else{
                return 0;
            }
        }
        catch(Exception $e){
           echo "<Script>alert('".$e."')</script>";
       }
    }
    public function get_temp_tables($sql,$var=0){
        try{$stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll();
           if($var==0) return json_encode($result);
           else return $result;
        }
        catch(Exception $e){
           echo "<Script>alert('".$e."')</script>";
       }
    }
    public function check_table_existence($sql){
       try{
               $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
            $result=$stmt->fetchAll();
            if($result>0) return 1;
            else return 0;
           
       }
        catch(Exception $e){
           echo "<Script>alert('".$e."')</script>";
       }
    }
    public function any_stmt($sql){
       try{ 
           $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
           
       }
        catch(Exception $e){
           echo "<Script>alert('".$e."')</script>";
       }
    }
}
?>