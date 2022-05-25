<?php
include_once "../classes/dbh.class.php";
class Inventory extends Dbh{
    function __construct(){
        // $sql="Create table if not exists inventory_details(id int not null auto_increment unique,name varchar(40) not null primary,barcode double not null unique);";
        // $sql.="Create table if not exists utilized_inventory(id int not null auto_increment unique,name varchar(30) not null primary,quantity int not null,selling_price float not null,barcode int not null,date1 varchar(12) not null,time1 varchar(12) not null,profit value not null);";
        // $stmt=$this->connect()->prepare($sql);
        // $stmt->execute();

    }

    public function insert_to_utilized_inventory($name,$barcode,$quantity,$selling_price,$date1,$time1,$cost_price){
        $profit=$selling_price-$cost_price;
        $sql="Insert into `inventory`(`name`,`barcode`,`quantity`,`selling_price`,`date1`,`time1`,`profit`) values (?,?,?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$name,$barcode,$quantity,$selling_price,$date1,$time1,$profit]);
    }

    public function get_utilized_inventory($key="",$value=""){
        if($value==""){
            $sql="Select * from `utilized_inventory`";
        }
        else{
            $sql="Select * from `utilized_inventory` where $key=?";
        }
        $stmt=$this->connect()->prepare($sql);
        if($value==""){
            $stmt->execute();
        }
        else{
            $stmt->execute([$value]);
        }
        while($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function delete_utilized_inventory($key,$value){
      $sql="Delete from `utilized_inventory` where $key=?";
      $stmt=$this->connect()->prepare($sql);
      $stmt->execute($value);
    }

    public function update_to_utilized_inventory($key,$value,$condition1,$value1){
        $sql="Update `utilized_inventory` set $key=? where $condition1=$value1";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$value]);
    }


    public function add_inventory($name,$quantity,$price,$barcode,$minimum_stocks){
        $sql="Insert into `inventory`(`name`,`quantity`,`price`,`barcode`,`minimum_stocks`) values (?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$name,$quantity,$price,$barcode,$minimum_stocks]);
    }

    public function get_inventory($key="",$value=""){
        if($value==""){
            $sql="Select * from `inventory` order by name ";
        }
        else{
            $sql="Select * from `inventory` where $key=?";
        }
        $stmt=$this->connect()->prepare($sql);
        if($value==""){
            $stmt->execute();
        }
        else{
            $stmt->execute([$value]);
        }
        while($result = $stmt->fetchAll()) {
            return $result;
        }
    }
    public function update_inventory($array,$condition1,$value1){
       if(count($array)){
           $key="";
           $quantity=floatval($array[2])+floatval($array[3]);
           $key="`name`='".$array[0]."',`price`='".$array[1]."',`quantity`='".$quantity."',`barcode`='".$array[4]."',`minimum_stocks`='".$array[5]."'";
        $sql="Update `inventory` set $key where $condition1='$value1'";
        echo $sql;
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute();
        
        $sql="Insert into `update_inventory`(`inventory_name`,`date1`,`time1`,`user`,`initial_quantity`,`final_quantity`) values(?,?,?,?,?,?) ";
        $stmt=$this->connect()->prepare($sql);
        $date=date("Y-m-d");$time=date("H:i:s");
        $user="";
        $stmt->execute([$array[0],$date,$time,$user,$array[2],$array[3]]);
        echo "<script>location.href=location.href</script>";
       }
    }

    public function delete_inventory($key,$value){
        $sql="Select * from `inventory` where $key=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$value]);
        $result1=$stmt->fetchAll();
        foreach($result1 as $result){
            $sql="Insert into `delete_inventory`(`inventory_name`,`time1`,`date1`,`user`,`quantity`) values(?,?,?,?,?)";
            $stmt=$this->connect()->prepare($sql);
            $user="";
            $stmt->execute([$result["name"],date("H:i:s"),date("Y-m-d"),$user,$result["quantity"]]);
        }
        $sql="Delete from `inventory` where $key=?";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute([$value]);
    }
    public function deleted_inventory($inventory_name,$user,$quantity){
        $sql="Insert into delete_inventory(`inventory_name`,`time1`,`date1`,`user`,`quantity`) values=(?,?,?,?,?)";
        $stmt=$this->connect()->prepare($sql);
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $stmt->execute([$inventory_name,$time,$date,$user,$quantity]);
    }
}
?>