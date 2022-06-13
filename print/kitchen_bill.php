<?php
include_once "../helpers/funtions.php";
checkLogin();
require('fpdf184/fpdf.php');
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
$url = "https://";   
else  
$url = "http://";   
// Append the host(domain name, ip) to the URL.   
$url.= $_SERVER['HTTP_HOST'];   

// Append the requested resource location to the URL   
$url.= $_SERVER['REQUEST_URI'];    
$this_url=explode("/print",$url);
$conn=mysqli_connect("localhost","thapasan_sangam11","S@ng@m865421","thapasan_temp_hotel_eternity");

                
/*A4 width : 219mm*/

$pdf = new FPDF('P','mm',[56,280]);
$bill_number=0;
$name="";
$result=mysqli_query($conn,"Select * from temp_table_print");
$pdf->AddPage();
/*output the result*/

// $pdf->Image('logo.png',7,3,15);
$pdf->SetLeftMargin(1);
$pdf->SetTopMargin(1);
$pdf->SetFont('Arial','',12);
// $pdf->cell(0,1,"-----------------------------------------------------");
$pdf->Ln();
// $pdf->SetFont('Arial','',12);

// $pdf->Cell(48 ,2,'Kitchen Bill',0,1,'C');

$row1=mysqli_fetch_assoc($result);
$pdf->cell(4,4,'Table number : '.$row1["table_number"]);
$pdf->Ln();

// $pdf->SetX(2);
// $pdf->SetFont("Arial",'B',12);
$time=date("H:i a");
$pdf->Cell(4,5,' Time : '.$time,0,0);
// $pdf->cell(6,4,,0,0);
// $pdf->cell(60,4,'',0,1);
    $pdf->Ln();
    // $pdf->cell(0,2,"*********************************************************");
$pdf->Ln();
$pdf->SetFont("Arial",'B',12);
// $pdf->cell(8,5,'ID',0,0);

$pdf->cell(15,5,'QTY',"T,B",0);
$pdf->cell(38,5,"Item' name","T,B",1);
$pdf->SetFont("Arial",'',8);
// $pdf->cell(10,5,'Time',0,0);
$p=3;
$x=0;
$total=0.0;
$tax=0.0;
$discount=0.0;
$sql="SELECT * FROM `temp_table_print`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))            
{$x++;
    // $pdf->Ln();
    $pdf->SetFont("Arial",'',10);
    // $pdf->cell(8,4,$x,0,0);
    
    $qty=$row['quantity'];
    $pname=$row['order_name'];
    $table_number=$row["table_number"];
    $time=$row["time"];
    // $price=$row['price'];
    // $subtotal=$row['subtotal'];
    // $discount=$row['discount'];
    // $tax=$row["tax"];
    
    $pdf->Cell(8,4,$qty,0,0);
    // $get_x=$pdf->GETX();
    // $get_y=$pdf->GETY();
    $pdf->MultiCell(49,5,$pname,0,"L");
    // $new_y=$pdf->GETY();
    
    // $pdf->Ln();
    $pdf->cell(0,0,"","T",1);
    // $pdf->cell(15,5,$table_number,1,1);
// $pdf->cell(15,5,$time,1,1);
// $total=$total+(float)$subtotal;
}

$pdf->Ln();
// $pdf->cell(0,3,"*********************************************************");

$pdf->Ln();

$pdf->SetFont("Arial",'U',11);
$pdf->Write(5,"Goto Overall Orders",$this_url[0]."/order/Overall_orders.php");
// $pdf->Ln();
// $pdf->SetFont("Arial",'',8);
// // $pdf->cell(0,0,"-----------------------------------------------------");
try{
    $pdf->output('I', 'bill.php');
    mysqli_query($conn,"Truncate table `temp_table_print`");
}
catch(Exception $error){
//  echo "<Script>alert('Error occured plz try again ');//location.href='../order/Overall_orders.php';</script>";
echo $error;
}

?>