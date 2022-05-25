<?php

include_once "dbh.class.php";
include_once "rooms.class.php";
class Rooms extends Dbh {

    public function getAll() {
        $sql = "SELECT * FROM rooms";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()) {
            return $result;
        }
    }

    public function getAll_room_type(){
        $sql = "SELECT * FROM room_type";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();

        while($result = $stmt->fetchAll()) {
            return $result;
        }
    } 

    public function find_room($room_name) {
        $sql = "SELECT * FROM `rooms` WHERE room_name = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$room_name]);
        $result = $stmt->fetch();
        return $result;
    }

    public function find($id) {
        $sql = "SELECT * FROM `rooms` WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
        $result = $stmt->fetch();
        return $result;
    }

    public function addRoom($room_name, $room_type, $room_price, $newFileName) {
        $sql = "INSERT INTO `rooms`(`room_name`, `room_type`, `room_price`, room_photo) VALUES ( ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$room_name, $room_type, $room_price, $newFileName]);
    }

    // public function updateRoom($room_name, $room_type, $room_price, $total_rooms, $newFileName, $id) {
    //     $sql = "UPDATE `rooms` SET room_name= ?, room_type = ?, room_price= ?, total_rooms = ?, room_photo = ? WHERE id = ?";
    //     $stmt = $this->connect()->prepare($sql);
    //     $stmt->execute([$room_name, $room_type, $room_price, $total_rooms, $newFileName, $id]);
    // }
    public function updateRoom($room_name, $room_type, $room_price, $newFileName, $id) {
        $sql = "UPDATE `rooms` SET room_name= ?, room_type = ?, room_price= ?, room_photo = ? WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$room_name, $room_type, $room_price, $newFileName, $id]);
    }

    public function delete($id) {
        $sql = "DELETE FROM rooms WHERE id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$id]);
    }
    public function insert_to_booking_normal($room_number,$check_in_date,$check_out_date,$customer_name,$email,$contact,$address,$certification_type,$document_number){
        $time1=date("H:i:s");
        $sql="Insert into booking(room_number,check_in_date,customer_name,email,contact,address,certification_type,document_number,check_in_time,check_out_date,check_out_time) values(?,?,?,?,?,?,?,?,?,?,?)";
         $stmt=$this->connect()->prepare($sql);
         try{
             $stmt->execute([$room_number,$check_in_date,$customer_name,$email,$contact,$address,$certification_type,$document_number,$time1,$check_out_date,"0"]);
            return(1);
            }
         catch(Exception $error){
             echo "Some error is there in Assigning room''insertion'";// echo "<script>console.log($error)</script>";
             return(0);
         }
     }
     

}