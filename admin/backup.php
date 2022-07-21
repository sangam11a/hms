<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = '';
   
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' );
   }
	
   $table_name = "sold_items";
   $backup_file  = "backup1.sql";
   $sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   
   mysqli_select_db($conn,'thapasan_hotel_eternity');
   $retval = mysqli_query($conn,$sql );
   
   if(! $retval ) {
      die('Could not take data backup: ' );
   }
   
   echo "Backedup  data successfully\n";
   
   mysqli_close($conn);
?>