     
        <?php
        require_once "../helpers/funtions.php";
        checkLogin();
require('fpdf184/fpdf.php');

$conn=mysqli_connect("localhost","root","","peaceresort");
date_default_timezone_set('Asia/Kolkata');
                
/*A4 width : 219mm*/

$pdf = new FPDF('P','mm',[76.2,152.4]);
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

// $pdf->Image('logo.png',7,3,15);
$pdf->SetFont('Arial','B',14);
$pdf->Cell(48 ,3,'Peace garden Resort',0,1,'C');
$pdf->Ln();
// // 
// $pdf->SetFont('Arial','B',14);
// $pdf->Cell(0 ,3,'Talpona Beach, MDR48, Canacona, Goa, 403702',0,1,'C');
// $pdf->Ln();
$pdf->SetFont('Arial','I',11);
$pdf->Cell(1,4);
$pdf->Cell(0,6,'Talpona Beach, MDR48, Canacona');
$pdf->Ln();

$pdf->SetFont('Arial','I',12);
$pdf->Cell(3,6);
$pdf->Cell(0,6,'Whatsapp/Phone');
$pdf->Ln();

$pdf->Cell(3,0);
$pdf->Cell(0,6,'+91-9168350727');
$pdf->Ln();
$pdf->SetFont("Arial",'B',12);
$pdf->cell(0,5,'',0,1);
$pdf->Cell(15,4,'Bill no:',0,0,'L');
$pdf->Cell(0,4,$billnumber,0,0);

$pdf->SetFont("Arial",'B',12);
$pdf->cell(-15,4,'Date:',0,0,'R');
  $date=date("Y-m-d");
  $pdf->cell(0,4,$date,0,1);

$pdf->SetFont("Arial",'B',12);
$pdf->Cell(11,4,'Name :',0,0);
$pdf->Cell(29,4,$name);

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
$pdf->cell(15,5,'AMT',1,1);
$p=3;
$x=0;
$total=0.0;
$tax=0.0;
$discount=0.0;
$sql="SELECT * FROM `print_table`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result))            
{$x++;
    $pdf->SetFont("Arial",'',8);
    $pdf->cell(8,5,$x,1,0);
    $pname=$row['name'];
    $qty=$row['quantity'];
    $price=$row['price'];
    $subtotal=$row['subtotal'];
    $discount=$row['discount'];
    $tax=$row["tax"];
    $pdf->cell(29,5,$pname,1,0);
$pdf->cell(10,5,$qty,1,0);
$pdf->cell(15,5,$subtotal,1,1);
$total=$total+(float)$subtotal;
}
$tax=(($tax/100)*$total);
$discount=($discount/100)*$total;
$pdf->cell(25,5,'',0,0,'L');
$pdf->cell(22,5,'Sub-Total',0,0);
$pdf->cell(15,5,$total,1,1,'C');

$pdf->cell(25,5,'',0,0,'L');
$pdf->cell(22,5,'Discount',0,0);
$pdf->cell(15,5,$discount,1,1,'C');

$pdf->cell(35,5,'',0,0,'L');
$pdf->cell(12,5,'Tax',0,0);
$pdf->cell(15,5,$tax,1,1,'C');
$total=$total+$tax-$discount;
$pdf->cell(35,5,'',0,0,'L');
$pdf->cell(12,5,'Total',0,0);
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