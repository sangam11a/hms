<?php
// require_once "../helpers/funtions.php";
// checkLogin();
date_default_timezone_set('Asia/Kathmandu');
require('fpdf184/fpdf.php');

$pdf = new FPDF('P', 'mm', array(80,80));

$pdf->AddPage();
/*output the result*/
$pdf->SetMargins($left=3,$top=1);
$pdf->SetFont('Arial','B',12);    
$pdf->Cell(12,4,'');
$pdf->Cell(0,5,'Invoice','',1);
$pdf->Cell(-3,2,'');
$pdf->Cell(0,2,'***************************************************',0,1);
$pdf->SetFont('Arial','B',14);  

$pdf->Image('logo.png',4,18,15);
$pdf->Cell(18,6,'');
$pdf->Cell(28,6,'Hotel Eternity','');
$pdf->Ln();
// // 
// $pdf->SetFont('Arial','B',14);
// $pdf->Cell(0 ,3,'Talpona Beach, MDR48, Canacona, Goa, 403702',0,1,'C');
// $pdf->Ln();
$pdf->SetFont('Arial','',11);
// $pdf->Cell(2,4);/

$pdf->Cell(18,6,'');
$pdf->Cell(0,4,'Sipadol , Bhaktapur');
$pdf->Ln();

$pdf->SetFont('Arial','',11);
// $pdf->Cell(2,4);

$pdf->Cell(18,6,'');
$pdf->Cell(0,5,'Contact : 9851312121','',1);

$pdf->Cell(-3,2,'');
$pdf->Cell(0,2,'***************************************************',0,1);
// $pdf->Ln();

$pdf->Cell(0,5,'Date: 24 Jun 2021');
$pdf->Ln();
$pdf->SetFont('Arial','B',5);
$pdf->Cell(45,0,'Bill To: Customer name');
$pdf->SetFont('Arial','I',5);
$pdf->Cell(0,0,'Invoice No: 454');
$pdf->Ln(2);
$header = array('Item', 'Qty', 'Rate', 'Amount');
$data = array(['Momo maniac', 2, 90, 2*90],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70]);
foreach($header as $col){
    $pdf->SetFont('Arial', 'B',5);
    $pdf->Cell(17,3,$col,1,0,'C');
}
    $pdf->Ln();
    // Data
    foreach($data as $row)
    {
    $pdf->SetFont('Arial', 'I',5);
        foreach($row as $col){
        $pdf->Cell(17,3,$col,1,0,'C');            
    }
    $pdf->Ln();
}
$pdf->Cell(34);
$pdf->Cell(17,3,'Sub-Total',0,0,'R');
$pdf->Cell(17,3,'Rs.'.'5000',1,0,'C');
$pdf->Ln();
$pdf->Cell(34);

$pdf->Cell(17,3,'Tax',0,0,'R');
$pdf->Cell(17,3,'5%',1,0,'C');
$pdf->Ln();
$pdf->Cell(34);
$pdf->Cell(17,3,'Total',0,0,'R');
$pdf->Cell(17,3,'Rs. '.'5020',1,0,'C');
$pdf->Ln();
$pdf->Cell(50,0,'Thank You For Your Visit',0,0,'C');





$pdf->Output('I', 'printing.php');
?>