<?php
require_once "../helpers/funtions.php";
checkLogin();
require('fpdf184/fpdf.php');

$conn=mysqli_connect("localhost","root","","peaceresort");
date_default_timezone_set('Asia/Kathmandu');
                
/*A4 width : 219mm*/

$pdf = new FPDF('P','mm',[76,390]);
// $bill_number=0;
// $pdf->MakeFont();
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
$pdf->SetMargins($left=2,$top=1);
// $pdf->Image('logo.png',7,3,15);
$pdf->SetFont('Courier','B',14);
$pdf->Cell(48 ,3,'Hotel Eternity',0,1,'C');
$pdf->Ln();
// // 
// $pdf->SetFont('Courier','B',14);
// $pdf->Cell(0 ,3,'Talpona Beach, MDR48, Canacona, Goa, 403702',0,1,'C');
// $pdf->Ln();
// $pdf->SetFont('Courier','I',11);
// $pdf->Cell(1,4);
// $pdf->Cell(0,6,'Sipadol, Su Na Pa-8, Bhaktapur');
// $pdf->Ln();

// $pdf->SetFont('Courier','I',12);
// $pdf->Cell(3,6);
// $pdf->Cell(0,6,'Phone');
// $pdf->Ln();

$pdf->Cell(3,0);
$pdf->Cell(0,6,'+977');
$pdf->Ln();
$pdf->SetFont("Courier",'B',12);
$pdf->cell(0,5,'',0,1);
$pdf->Cell(19,4,'Bill no : '.$billnumber,0,0,'L');
// $pdf->Cell(0,4,$billnumber,0,0);

$pdf->SetFont("Courier",'B',10);
$date=date("Y/m/d");
$pdf->cell(0,4,'Date : '.$date,0,0,'R');
$pdf->Ln();
$pdf->SetFont("Courier",'B',12);
$pdf->Cell(11,5,'Name : '.$name,0,0);
// $pdf->Cell(55,4,'$name');

$pdf->Ln();

$pdf->SetFont("Courier",'',10);
$time=date("H:i a");
$pdf->Cell(42,5,'Time :  '.$time,0,0);
$pdf->Ln();

// $pdf->SetFont("Courier",'B',12);
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
// while($row=mysqli_fetch_assoc($result)) 
$x=0;
while($x<9)           
{$x++;
    $pdf->SetFont("Courier",'',8);
    $pdf->cell(7,5,$x,0,0);
    $pname="\$row['name'] sadsadasd asd asd sa as";
    $qty=$x;//"\$row['quantity']";
    $price="\$row['price']";
    $subtotal="\$row['subtotal']";
    $discount="\$row['discount']";
    $tax="\$row['tax']";
    $x_val=$pdf->GETX();
    $y_val=$pdf->GETY();
    $pdf->MultiCell(32,3,$pname,0,0);    
    $y_new_val=$pdf->GETY();
    $pdf->SetXY($x_val+32,$y_val+1);
$pdf->cell(10,5,$qty,0,0,"C");
$pdf->cell(15,5,$subtotal,0,1);
$pdf->SETY($y_new_val);
// $pdf->Ln();
$pdf->cell(70,0,"","B",1);
$total=$total+(float)$subtotal;
}
$pdf->Cell(8,3,"1","B");
$x_val=$pdf->GETX();
$y_val=$pdf->GETY();
$pdf->MultiCell(32,3,"asdasde",0,0);    
$y_new_val=$pdf->GETY();
$pdf->SetXY($x_val+32,$y_val);
$pdf->cell(10,5,$qty,0,0,"C");
$pdf->cell(15,5,$subtotal,0,1);
$pdf->SETY($y_new_val);
$tax=10;// $tax=(($tax/100)*$total);
$discount=10;// $discount=($discount/100)*$total;
$pdf->cell(34,5,'',0,0,'L');
$pdf->cell(16,5,'Sub-Total',0,0);
$pdf->cell(15,5,$total,1,1,'C');

$pdf->cell(34,5,'',0,0,'L');
$pdf->cell(16,5,'Discount',0,0);
$pdf->cell(15,5,$discount,1,1,'C');

$pdf->cell(34,5,'',0,0,'L');
$pdf->cell(16,5,'Tax',0,0);
$pdf->cell(15,5,$tax,1,1,'C');
$total=$total+$tax-$discount;
$pdf->cell(34,5,'',0,0,'L');
$pdf->cell(16,5,'Total',0,0);
$pdf->cell(15,5,$total,1,1,'C');

$pdf->cell(47,5,'!!!!Thank you for visiting us!!!!',0,0,'C');
try{
    $pdf->output('I', 'bill.php');
    mysqli_query($conn,"TRUNCATE TABLE print_table");//empty table after each receipt is printed
}
catch(Exception $error){
 echo "<Script>alert('Error occured plz try again ');</script>";
}

?>