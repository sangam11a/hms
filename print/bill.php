<?php
include_once "../helpers/funtions.php";
checkLogin();
require('fpdf184/fpdf.php');
date_default_timezone_set('Asia/Kathmandu');
try{
    
    $username="root";//"thapasan_sangam11"
    $password="";//"S@ng@m865421"
    $conn=mysqli_connect("localhost",$username,$password,"thapasan_hotel_eternity");          
    /*A4 width : 219mm*/

    $pdf = new FPDF('P','mm',[76.2,399]);
    $bill_number=0;
    $result=mysqli_query($conn,"Select Count(Distinct time1) from sold_items");
    while($bill=mysqli_fetch_assoc($result)){
      $billnumber=$bill["Count(Distinct time1)"];
    }
    $name="";
    $result=mysqli_query($conn,"Select customer_name from print_table");
    while($bill=mysqli_fetch_assoc($result)){
      $name=$bill["customer_name"];
    }
    $pdf->AddPage();
    /*output the result*/
    $pdf->SetMargins($left=3,$top=1);
    // $pdf->Image('logo.png',7,3,15);
    $pdf->SetFont('Arial','B',12);    
    $pdf->Cell(12,4,'');
    $pdf->Cell(0,5,'Tax Invoice','',1,);
    $pdf->Cell(-3,2,'');
    $pdf->Cell(0,2,'***************************************************',0,1);
    $pdf->SetFont('Arial','B',14);  
    $pdf->Cell(0,6,'Hotel Eternity','');
    $pdf->Ln();
    // // 
    // $pdf->SetFont('Arial','B',14);
    // $pdf->Cell(0 ,3,'Talpona Beach, MDR48, Canacona, Goa, 403702',0,1,'C');
    // $pdf->Ln();
    $pdf->SetFont('Arial','',11);
    $pdf->Cell(2,4);
    $pdf->Cell(0,4,'Sipadol, Suryabinayak-8, Bhaktapur');
    $pdf->Ln();

    $pdf->SetFont('Arial','',11);
    $pdf->Cell(2,4);
    $pdf->Cell(0,5,'Contact : 9851312121','',1);
    
    $pdf->Cell(-3,2,'');
    $pdf->Cell(0,2,'***************************************************',0,1);
    // $pdf->Ln();

    // $pdf->Cell(3,0);
    // $pdf->Cell(0,6,'+977');
    // $pdf->Ln();
    $pdf->SetFont("Arial",'B',12);
    $pdf->cell(0,1,'',0,1);
    $pdf->Cell(15,4,'Bill no:',0,0,'L');
    $pdf->Cell(0,4,$billnumber,0,0);

    $pdf->SetFont("Arial",'B',11);
    $date=date("Y/m/d");
    $pdf->cell(0,4,'Date : '.$date,0,0,'R');
    $pdf->Ln();
    $pdf->SetFont("Arial",'B',12);
    $pdf->Cell(11,5,'Name : '.$name,0,0);
    // $pdf->Cell(55,4,'$name');

    $pdf->Ln();

    $pdf->SetFont("Arial",'',10);
    $time=date("H:i a");
    $pdf->Cell(37,5,'Time : '.$time,0,0);
    $pdf->Cell(42,5,'PAN : 1232132');
    $pdf->Ln();

    $pdf->SetFont("Arial",'B',12);
    $pdf->cell(8,5,'S.N',"T,B",0);
    $pdf->cell(32,5,"Item' name","T,B",0);
    $pdf->cell(10,5,'QTY',"T,B",0);
    $pdf->cell(20,5,'AMT',"T,B",1);
    $p=3;
    $x=0;
    $total=0.0;
    $tax=0.0;
    $discount=0.0;
    $sql="SELECT * FROM `print_table`";
    $result=mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>=1)
      {
      while($row=mysqli_fetch_assoc($result))          
        {$x++;
          $pdf->SetFont("Arial",'',10);
          $pdf->cell(7,6,$x,0,0);
          $pname=$row['name'];
          $qty=$row['quantity'];
          $price=$row['price'];
          $subtotal=$row['subtotal'];
          $discount=$row['discount'];
          $tax=$row['tax'];
          $x_val=$pdf->GETX();
          $y_val=$pdf->GETY();
          $pdf->MultiCell(32,6,$pname,0,'L');    
          $y_new_val=$pdf->GETY();
          $pdf->SetXY($x_val+32,$y_val);
          $pdf->cell(10,6,$qty,0,0,"C");
          $pdf->cell(15,6,$subtotal,0,1);
          $pdf->SETY($y_new_val);
          // $pdf->Ln();
          $pdf->cell(70,1,"","B",1);
          $total=$total+(float)$subtotal;
          }
      $tax=(($tax/100)*$total);
      $discount=($discount/100)*$total;
      $pdf->cell(32,5,'',0,0,'L');
      $pdf->cell(34,5,'Sub-Total : '.$total,"B",0);
    //   $pdf->cell(15,5,$total,1,"B",'C');
        $pdf->Ln();
      $pdf->cell(32,5,'',0,0,'L');
      $pdf->cell(34,5,'Discount : '.$discount,"B",0);
    //   $pdf->cell(15,5,$discount,1,"B",'C');
        $pdf->Ln();
      $pdf->cell(32,5,'',0,0,'L');
      $pdf->cell(34,6,'Tax : '.$tax,"B",0);
    //   $pdf->cell(15,5,$tax,1,"B",'C');
      $pdf->Ln();
      $total=$total+$tax-$discount;
      $pdf->cell(32,5,'',0,0,'L');
      $pdf->cell(34,5,'Total : '.$total,"B",0);
    //   $pdf->cell(15,5,$total,1,"B",'C');
        $pdf->Ln();
       $pdf->Ln();
    $pdf->Cell(-3,2,'');
       $pdf->Cell(0,2,'***************************************************',0,1);
      $pdf->cell(78,5,'Thank you for visiting us!',0,0,'C');
    }
    else{
      throw new Exception("myError");
    }

    $pdf->output('I', 'bill.php');
    mysqli_query($conn,"TRUNCATE TABLE print_table");//empty table after each receipt is printed
}
catch(Exception $error){
 if($error=="myError") echo "<Script>alert('Error occured plz try again ');location.href='../order/Overall_orders.php'</script>";
  else echo "<Script>alert('Empty table There is some error please follow above process again.');location.href='../order/Overall_orders.php'</script>";//Empty table There is some error please follow above process again
}

?>