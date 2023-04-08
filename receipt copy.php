<?php
session_start();
require('core/functions.php');
require("core/connection.php");

date_default_timezone_set("Asia/Manila");
require("Public/receipt/fpdf.php");

$pdf = new FPDF ('P','mm',array(80,200));

$pdf->AddPage();

$pdf->SetFont('Courier','B',15);

$pdf->Cell(0,0,'Jollibee POS',0,0,'C');

$pdf->SetFont('Courier','',8);

$pdf->Cell(60,5,'',0,1,'C');
$pdf->Cell(60,5,'123 Main Street Bel Air 1200' ,0,1,'C');

//Line break
$pdf->Ln(1);

$pdf->SetFont('Courier','',8);
$pdf->Cell(10,4,'',0,1,'');

$pdf->SetFont('Courier','B',8);
$pdf->Cell(20,4,'Bill To: ' . rand(1, 199),0,0,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(10,4,'',0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'Service: ',0,0,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(10,4,'',0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'Invoice no: ',0,0,'');
$pdf->SetFont('Courier','B',8);
$pdf->Cell(40,4,rand(1, 199),0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(8,4,'Date: ',0,0,'');
$pdf->Cell(20,4,date("d/m/Y"),0,0,'');


$pdf->Cell(10,4,'Time: ',0,0,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(60,4,date("g:i a"),0,1,'');

// Product
$pdf->SetX(7);
$pdf->SetFont('Courier','',0);
$pdf->SetFillColor(208,208,208);
$pdf->Cell(34,5,'PRODUCT',1,0,'C'); 
$pdf->Cell(8,5,'PRC',1,0,'C');
$pdf->Cell(12,5,'TOTAL',1,1,'C');

$pdf->SetX(7);   
$pdf->SetFont('Courier','B',0);
$pdf->Cell(34,5,$_SESSION['product'],1,0,'L');
$pdf->Cell(8,5,$_SESSION['price'],1,0,'C');
$pdf->Cell(12,5,$_SESSION['price'],1,1,'C');

//product table code
$pdf->SetX(4);
$pdf->SetFont('courier','',8);
$pdf->Cell(20,5,'',0,0,'L');
$pdf->Cell(25,5,'TOTAL',1,0,'C');
$pdf->Cell(12,5,$_SESSION['price'],1,1,'C');

$pdf->Cell(20,5,'',0,1,'');

$pdf->SetX(7);
$pdf->SetFont('Courier','',8);
$pdf->Cell(65,5,'Thankyou for choosing',0,1,'C');

$pdf->SetX(3);
$pdf->SetFont('Courier','',12);
$pdf->Cell(75,5,'Orotskie Jollibee',0,1,'C');

$pdf->SetX(3);
$pdf->SetFont('Courier','',12);
$pdf->Cell(75,5,"Hope you liked it!",0,1,'C');

$pdf->SetX(7);
$pdf->Cell(20,7,'- - - - - - - - - - - - - ',0,1,'');

$pdf->SetX(3);
$pdf->SetFont('Courier','',8);
$pdf->Cell(75,5,'Developed By : Rico Orot',0,1,'C');

$pdf->SetX(3);
$pdf->SetFont('Courier','',8);
$pdf->Cell(75,5,'Contact at : +62 91234567912',0,1,'C');

$pdf->Output();

?>