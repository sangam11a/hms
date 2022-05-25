<?php
class Database {

    // localhost
    private $host = "localhost";
    private $user = "root";
    private $pwd = "";
    private $dbName;

    public function __construct($dbName){
        $this->dbname=$dbName;
    }

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

    public function add_to_table($table_name,$field,$value){
        $what="";
        $field_name="";
        $i=0;
        $sql="";
        $values="";
        try{
            $count=count($field);
            echo $count;
            if(count($field)==count($value)){
                for($i=0;$i<$count;$i++){
                   
                    if($i!=$count-1)
                    {
                        $what.="?,";
                        $values.="\"".$value[$i]."\",";
                        $field_name.="`".$field[$i]."`,";
                    }
                    else{
                        $what.="?";                        
                        $values.="\"".$value[$i]."\"";
                        $field_name.="`".$field[$i]."`";
                    }
                }
                $sql="Insert into `".$table_name."`(".$field_name.") values(".$values.");";
                echo $sql;
                $stmt=$this->connect()->prepare($sql);
             if($stmt->execute()){
                echo "<script>alert('Added to db ');</script>";
            }
            }
            
        }
        catch(Exception $error){
            echo "<script>console.log('$error')</script>";
        }
    }


    public function get_from_table($table_name,$field="",$value=""){
        if($field==""||$value==""){
            $sql="Select* from ".$table_name;
        }
        else{
            $sql="Select * from $table_name where $field=?";
        }
        $stmt=$this->connect()->prepare($sql);
        if($field==""||$value==""){
         $stmt->execute([$value]);
        }
        else{
            $stmt->execute();
        }
        while($result=$stmt->fetchAll()){
            return $result;
        }
    }


    protected function update_table($table_name,$field,$value){
      try{
        $sql="Update $table_name set $field='$value'";
        $stmt=$this->connect()->prepare($sql);
        $stmt->execute();
      }
      catch(Exception $error){
          echo "<script>console.log('$error')</script>";
      }
    }

    protected function delete_from_table($table_name,$field,$value){
        try{
            $sql="Delete from $table_name where $field='$value'";
            $stmt=$this->connect()->prepare($sql);
            $stmt->execute();
        }
        catch(Exception $error){
            echo "<script>console.log('$error')</script>";
        }
    }

}
$generic=new Database("peaceresort");
$generic->add_to_table("table_details",["table_number","status"],[99,"empty"]);
?>