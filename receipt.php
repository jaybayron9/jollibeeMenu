<?php
session_start();
require('core/functions.php');
require(core('connection'));
require(core('menu'));
$menu = new Menu();

date_default_timezone_set("Asia/Manila");
require("Public/receipt/fpdf.php");

$invoice = rand(1, 999);

$pdf = new FPDF ('P','mm',array(80,400));

$pdf->AddPage();

$pdf->SetFont('Courier','B',15);

$pdf->Cell(0,0,'Jollibee',0,0,'C');

$pdf->SetFont('Courier','',8);

$pdf->Cell(60,5,'',0,1,'C');
$pdf->Cell(60,5,'123 Main Street Bel Air 1200' ,0,1,'C');

//Line break
$pdf->Ln(1);

$pdf->SetFont('Courier','',8);
$pdf->Cell(10,4,'',0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'Bill To: ' . $invoice,0,0,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(10,4,'',0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(20,4,'Invoice no: ',0,0,'');
$pdf->SetFont('Courier','',8);
$pdf->Cell(40,4,'CST' . $invoice,0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(8,4,'Date: ',0,0,'');
$pdf->Cell(20,4,date("d/m/Y"),0,0,'');


$pdf->Cell(10,4,'Time: ',0,0,'');
$pdf->SetFont('Courier','',8);
$pdf->Cell(60,4,date("g:i a"),0,1,'');

$pdf->SetFont('Courier','',8);
$pdf->Cell(10,4,'',0,1,'');

// Purchase
foreach (Menu::receipt() as $row) {
    $pdf->SetFont('Courier','',6);
    $pdf->Cell(20,4,$row['purchase'],0,0,'');
    
    $pdf->SetFont('Courier','',8);
    $pdf->Cell(10,4,'',0,1,'');
    
    $pdf->SetFont('Courier','',7);
    $pdf->Cell(10,4,'Price: ',0,0,'');
    $pdf->Cell(20, 4, ' Php ' . number_format($row['price'], 2) , 20, 1, '');
}

$pdf->SetFont('Courier','',8);
$pdf->Cell(10,4,'',0,1,'');

// Total
$pdf->SetFont('Courier','B',7);
$pdf->Cell(10,4,'Total: ',0,0,'');
$pdf->Cell(20, 4, ' Php ' . $total_order = number_format(Menu::total_order(),2 ) , 20, 1, '');
// End Purchase

if ($total_order) {
    $query = Menu::$conn->query("UPDATE orders SET order_id = '{$row['id']}', customer_name = '{$invoice}'");
    
    if ($query) {
        transaction();
    }
}

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

$pdf->Output();



function transaction() {
    global $menu;
    $orders = Connection::$conn->query("SELECT * FROM orders LIMIT 1");
    $get_purchase = Connection::$conn->query("SELECT purchase FROM orders");

    $purchase = '';
    foreach ($get_purchase as $get) {
        $purchase .= $get['purchase'] . '| ';
    }

    foreach ($orders as $order) {
        $insert = Connection::$conn->query("
            INSERT INTO transactions 
                (order_id, customer_name, purchase, price, date) 
            VALUES 
                ('{$order['order_id']}', '{$order['customer_name']}', '$purchase', '{$order['price']}', '{$order['created_at']}')
        ");

        if ($insert) {
            $remove = Connection::$conn->query("DELETE FROM orders");
            if ($remove) 
                return $menu->alert('success', 'Transaction has been made!');
            } else {
                return $menu->alert('error', 'Something went wrong!');
        }
    }
}