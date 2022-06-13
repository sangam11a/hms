<?php 
if(session_status()==PHP_SESSION_NONE){
  session_start();
}
    include_once "../layout/header.php";
    include_once "../classes/order_db.php";
    // //require_once "../includes/init.php";
  
    $rooms = new Rooms();
    $roomNumber = new RoomNumber();
    $order=new Order();
    if($_SERVER['REQUEST_METHOD'] == "POST"){

      if(isset($_POST["delete_room_types"])){
          $to_delete=$_POST["to_delete"];
          echo "<script>alert('"."$to_delete"."')</script>";
          $sql="Delete from room_type where roomtype='$to_delete'";
          if($order->updating_roomnumber($sql)){
            echo "<div class='alert alert-success'>Deletion Successful</div>";
          }
          else{
            echo "<div class='alert alert-warning'>Deletion Failed</div>";

          }
      }

      if(isset($_POST["roomTypesAdd"])){
        $room_type=$_POST["room_types"];
        $sql="Insert into room_type(roomtype) values('$room_type')";
        $order->insert_to_booking($sql);
      }

        if(isset($_POST['roomNoAdd'])) {
            
            $err = "";
            $room_num = clean($_POST['roomnumber']);
            $roomtype = clean($_POST['roomtype']);
            $room_name=clean($_POST['roomname']);
            if(empty($room_num)) {
                $err .= "Room number required<br>";
            }else{
                if($roomNumber->find_room($room_num) > 0 ){
                    $err .= "Room number already exists.<br>";
                }
                
            }  
            if(empty($room_num)) {
              $err .= "Room number required<br>";
          }else{
              if($roomNumber->find_room($room_num) > 0 ){
                  $err .= "Room number already exists.<br>";
              }
          }  

            if(empty($err)) {

                $roomNumber->addRoomNumber($room_num, $roomtype,$room_name);
                echo "
                <div class='alert alert-success alert-dismissible fade show' role='alert'>
                  <strong></strong> $room_num has been added successfully to room type $room_name
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                  ";

            }else{
                echo "
                <div class='alert alert-danger alert-dismissible fade show' role='alert'>
                  <strong>Error:</strong> $err
                  <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                  ";
            }

        }


        if(isset($_POST['toggleBook'])) {
        
          $err = "";
          $book = $_POST['book'];
          $roomnumber = $_POST['roomnumber'];
          if(empty($book)){
            $err .= "Empty.<br>";
          }
          if(empty($roomnumber)){
            $err .= "Empty.<br>";
          }
          if(empty($err)){
            $roomNumber->toggleBook($book, $roomnumber);
            echo "<script>window.location.replace('reloader.php?loc=roomnumber.php')</script>";
            die;
          }
          else{
            echo $err;
          }
      }
    }        

?>
<script>
  function delete1(id){
    alert(id.value)
   document.getElementById("to_delete").value=id;
   
  }
  // $(".delete_room_types").click(function(){
  //   var id1=$(this).val();
  //   alert(id1);
  // });
</script>
<h2><u>Dashboard</u></h2>

<!-- Admin -->
<?php
if($_SESSION['role'] === 'admin'):
?>
<!-- Button trigger modal -->
<div class="text-center">
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#roomNumber">
        Add Room Number
    </button>
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#room_types">
        Add Room Types
    </button>
    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#view_room_types">
       View Room Types
    </button>
</div>


<div class="modal fade" id="view_room_types" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">View Room Types</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <table class="table">
                  <thead>
                    <th>S.N</th>
                    <th>Room types</th>
                    <th>Action</th>
                  </thead>
                  <?php
                  $i=0;
                  $result=$order->get_temp_tables("Select * from room_type",1);
                    if($result>0){
                      foreach($result as $row){
                        $i++;
                        echo "<tbody><td>".$i."</td><td>".$row['roomtype']."</td><td>"."<button class='delete_room_types' id='".$row['roomtype']."' onclick=delete1('".$row['roomtype']."')><i class='fas fa-trash-alt'></i></button>"."</td></tbody>";
                      }
                     echo " <input type='hidden' id='to_delete' name='to_delete'>";
                    }
                    else{
                      echo "<div class='alert alert-warning'><h2>Please add room types before viewing</h2></div>";
                    }
                  ?>
                </table>
                       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>      
        </form>
      </div> 
    </div>
  </div>
</div>


<div class="modal fade" id="room_types" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Room Types</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Room Types</label>
                <input type="text" name="room_types" class="form-control" required>
                       
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="roomTypesAdd" class="btn btn-success">Save changes</button>
            </div>      
        </form>
      </div> 
    </div>
  </div>
</div>




<!-- Modal -->
<div class="modal fade" id="roomNumber" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Room Number</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Room Number</label>
                <input type="text" name="roomnumber" class="form-control" required>
                <label for="">Room Name</label>
                <select class="form-control" name="roomname" required>
                    <option value="">Select Room Name</option>
                    <?php 
                      if($rooms->getAll() > 0):
                        foreach($rooms->getAll() as $room):?>
                            <option value="<?=$room['room_name']?>"><?=$room['room_name']?></option>
                        <?php
                        endforeach;
                      endif;
                    ?>
                </select> 
                <label for="">Room Type</label>
                <select class="form-control" name="roomtype" required>
                    <option value="">Select Room Type</option>
                    <?php 
                      if($rooms->getAll_room_type() > 0):
                        foreach($rooms->getAll_room_type() as $room):?>
                            <option value="<?=$room['roomtype']?>"><?=$room['roomtype']?></option>
                        <?php
                        endforeach;
                      endif;
                    ?>
                </select>          
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" name="roomNoAdd" class="btn btn-success">Save changes</button>
            </div>      
        </form>
      </div> 
    </div>
  </div>
</div>


<div class="mt-2">
    <h4>All Rooms</h4>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Room No.</th>
      <th scope="col">Room Name</th>
      <th scope="col">Room Type</th>
      <th scope="col">Available</th>
      <th colspan="2" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        if($roomNumber->getAll() > 0):
            foreach($roomNumber->getAll() as $room): ?>
                 <tr>
                    <th scope="row"><?=$room['roomnumber']?></th>
                    <td><?=$room['roomname']?></td>
                    <td><?=$room['roomtype']?></td>
                    <?php 
                        if($room['isempty'] == "true"):?>
                            <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                    <?php
                        else:?>
                            <td><i class="fa fa-times text-danger" aria-hidden="true"></i></td>
                    <?php
                        endif;
                    ?>
                    <td><a class="btn btn-warning" href="editRoomNumber.php?id=<?=$room['roomnumber']?>">Edit</a></td>
                    <td><a class="btn btn-danger" href="roomnumberdelete.process.php?send=del&id=<?=$room['roomnumber']?>" onClick="return confirm('Do you want to delete??')">Delete</a></td>
                </tr>
        <?php
          endforeach;
        else:
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Alert: </strong> You should add some rooms first.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
        endif;
      ?>
  </tbody>
</table>
</div>

<?php
endif;
?>

<!-- end Admin -->

<!-- Reception -->

<?php
if($_SESSION['role'] === 'reception'):
?>
<div class="mt-2">
    <h4>All Rooms</h4>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Room No.</th>
      <th scope="col">Room Name</th>
      <th scope="col">Room Type</th>
      <th scope="col">Available</th>
      <th colspan="2" scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        if($roomNumber->getAll() > 0):
            foreach($roomNumber->getAll() as $room): ?>
                 <tr>
                    <th scope="row"><?=$room['roomnumber']?></th>
                    <td><?=$room['roomname']?></td>
                    <td><?=$room['roomtype']?></td>
                    <?php 
                        if($room['isempty'] == "true"):?>
                            <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                    <?php
                        else:?>
                            <td><i class="fa fa-times text-danger" aria-hidden="true"></i></td>
                    <?php
                        endif;
                    ?>
                    <?php if($room['isempty'] == 'true'):?>
                      <td>
                        <form action="" method="POST">
                          <input type="hidden" name="roomnumber" value="<?=$room['roomnumber']?>">
                          <input name="book" type="hidden" value="false">
                          <button class="btn btn-success" type="submit" name="toggleBook">Book</button>
                        </form>
                      </td>
                    <?php
                      else:
                        if($room['isempty'] == 'false'):?>
                          <td>
                            <form action="" method="POST">
                              <input type="hidden" name="roomnumber" value="<?=$room['roomnumber']?>">
                              <input name="book" type="hidden" value="true">
                              <button class="btn btn-danger" type="submit" name="toggleBook">Checkout</button>
                            </form>
                          </td>
                        <?php
                        endif;
                    ?>
                    <?php    
                    endif; 
                    ?>
                    <td></td>
                </tr>
        <?php
          endforeach;
        else:
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Alert: </strong> You should add some rooms first.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
        endif;
      ?>
  </tbody>
</table>
</div>

<?php endif; ?>

<!-- end Reception -->

<!-- Manager -->

<?php
if($_SESSION['role'] === 'manager'):
?>
<div class="mt-2">
    <h4>All Rooms</h4>
    <table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">Room No.</th>
      <th scope="col">Room Name</th>
      <th scope="col">Room Type</th>
      <th scope="col">Available</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        if($roomNumber->getAll() > 0):
            foreach($roomNumber->getAll() as $room): ?>
                 <tr>
                    <th scope="row"><?=$room['roomnumber']?></th>
                    <td><?=$room['roomname']?></td>
                    <td><?=$room['roomtype']?></td>
                    <?php 
                        if($room['isempty'] == "true"):?>
                            <td><i class="fa fa-check text-success" aria-hidden="true"></i></td>
                    <?php
                        else:?>
                            <td><i class="fa fa-times text-danger" aria-hidden="true"></i></td>
                    <?php
                        endif;
                    ?>
                </tr>
        <?php
          endforeach;
        else:
        ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>Alert: </strong> You should add some rooms first.
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php
        endif;
      ?>
  </tbody>
</table>
</div>

<?php endif; ?>

<!-- end manager -->



<?php include_once "../layout/footer.php" ?>