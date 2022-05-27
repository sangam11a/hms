     
<?php
require_once "../helpers/funtions.php";
checkLogin();
require('fpdf184/fpdf.php');

$conn=mysqli_connect("localhost","root","","temporary_data_peaceresort");
date_default_timezone_set('Asia/Kathmandu');
                
/*A4 width : 219mm*/

$pdf = new FPDF('P','mm',[76.2,152.4]);
$bill_number=0;
$name="";
$result=mysqli_query($conn,"Select * from temp_table_print");
$pdf->AddPage();
/*output the result*/

// $pdf->Image('logo.png',7,3,15);

$pdf->SetFont('Arial','B',14);
$pdf->cell(0,10,"-----------------------------------------------------");
$pdf->Ln();
$pdf->SetFont('Arial','B',14);

// $pdf->Cell(48 ,2,'Kitchen Bill',0,1,'C');

$pdf->cell(47,5,'Order for table number : ',0,0,'C');
// $pdf->cell(47,10,$result[0]["table_number"]);
$pdf->Ln();


$pdf->SetFont("Arial",'B',12);
$pdf->Cell(42,4,'Time:',0,0,'R');
$time=date("H:i a");
$pdf->cell(6,4,$time,0,0);
$pdf->cell(60,4,'',0,1);

$pdf->SetFont("Arial",'B',12);
$pdf->cell(8,5,'ID',1,0);
$pdf->cell(29,5,"Item' name",1,0);
$pdf->cell(10,5,'QTY',1,0);
// $pdf->cell(10,5,'Time',1,0);
$p=3;
$x=0;
$total=0.0;
$tax=0.0;
$discount=0.0;
$sql="SELECT * FROM `temp_table_print`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))            
{$x++;
    $pdf->Ln();
    $pdf->SetFont("Arial",'',8);
    $pdf->cell(8,5,$x,1,0);
    $pname=$row['order_name'];
    $qty=$row['quantity'];
    $table_number=$row["table_number"];
    $time=$row["time"];
    // $price=$row['price'];
    // $subtotal=$row['subtotal'];
    // $discount=$row['discount'];
    // $tax=$row["tax"];
    $pdf->cell(29,5,$pname,1,0);
    $pdf->cell(10,5,$qty,1,0);
    // $pdf->cell(15,5,$table_number,1,1);
// $pdf->cell(15,5,$time,1,1);
// $total=$total+(float)$subtotal;
}


$pdf->Ln();

$pdf->SetFont("Arial",'U',11);
$pdf->Write(20,"Goto Overall Orders","http://localhost/hmsss/order/Overall_orders.php");
$pdf->Ln();
$pdf->SetFont("Arial",'',8);
$pdf->cell(0,0,"-----------------------------------------------------");
try{
    $pdf->output('I', 'bill.php');
    mysqli_query($conn,"Truncate table `temp_table_print`");
}
catch(Exception $error){
 echo "<Script>alert('Error occured plz try again ');</script>";
}

?>