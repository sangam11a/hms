<?php
require_once "../helpers/funtions.php";
checkLogin();
require('fpdf184/fpdf.php');

$pdf = new FPDF('P', 'mm', array(57,50));
$pdf->AddPage();
// Logo
 $pdf->Image('logo.png',38,2,10);
 // Arial bold 15
 $pdf->SetFont('Arial','B',5);
 // Title
 $pdf->Cell(0,0,'Peace Garden Restaurant');
 // Line break
 $pdf->Ln();
$pdf->SetFont('Arial','I',5);
$pdf->Cell(0,5,'Baluwatar, Kathmandu');
$pdf->Ln();
$pdf->Cell(0,0,'Phone (+977) 6566-56565');
$pdf->Ln();
$pdf->Cell(23,0);
$pdf->Cell(0,0,'Date: 24 Jun 2021');
$pdf->Ln();
$pdf->SetFont('Arial','B',5);
$pdf->Cell(23,5,'Bill To: Customer name');
$pdf->SetFont('Arial','I',5);
$pdf->Cell(0,5,'Invoice No: 454');
$pdf->Ln(5);
$header = array('Item', 'Qty', 'Rate', 'Amount');
$data = array(['Momo maniac', 2, 90, 2*90],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70],['Chowmein', 3, 70, 3*70]);
foreach($header as $col){
    $pdf->SetFont('Arial', 'B',4);
    $pdf->Cell(9.9,3,$col,1,0,'C');
}
    $pdf->Ln();
    // Data
    foreach($data as $row)
    {
    $pdf->SetFont('Arial', 'I',4);
        foreach($row as $col){
        $pdf->Cell(9.9,3,$col,1,0,'C');            
    }
    $pdf->Ln();
}
$pdf->Cell(19.9);
$pdf->Cell(9.9,3,'Sub-Total',0,0,'R');
$pdf->Cell(9.9,3,'Rs.'.'5000',1,0,'C');
$pdf->Ln();
$pdf->Cell(19.9);

$pdf->Cell(9.9,3,'Tax',0,0,'R');
$pdf->Cell(9.9,3,'5%',1,0,'C');
$pdf->Ln();
$pdf->Cell(19.9);
$pdf->Cell(9.9,3,'Total',0,0,'R');
$pdf->Cell(9.9,3,'Rs. '.'5020',1,0,'C');
$pdf->Ln();
$pdf->Cell(20,0,'Thank You For Your Visit',0,0,'C');





$pdf->Output('I', 'printing.php');
?>