
text/x-generic automated_email.php ( ASCII text, with CRLF line terminators )
      <?php
      include_once "../classes/order_db.php";
      $order=new Order();
      $sum1=$order->get_temp_tables("Select sum(price) from sold_items");
      $sum2=$order->get_temp_tables("Select sum(amount_to_pay) from booking where still_exist='1'");
      $sum3=$order->get_temp_tables("Select count(customer_name,table_number,substring(time1,0,3),date1) from sold_items");
    $sum4= $order->get_temp_tables("Select count(*) from sold_items ");
    print_r($sum1);
    print_r($sum2);
    print_r($sum3);
    print_r($sum4);
      $to = "tniroj1206@yahoo.com";
         $subject = "Daily Report";
         $message = "<h1>This email is automatically generated do not reply to this email.</h1><br>";
         $message.="Total transactions : ".doubleval($sum1[0]["sum(price)"])+doubleval($sum2[0]["sum(amount_to_pay)"]);
         $message.="Total customer visit:".$sum3[0]["count(*)"];
         $message.="Total Orders : ".$sum4[0]["count(*)"];
         
         $header = "From:Automated Email from Webhost \r\n";
         $header .= "Cc:sangam.thapa218@gmail.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         echo $message;
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>