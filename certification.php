<?php
require('./assets/fpdf184/fpdf.php');
include_once('./database/database.php');

$name = $_SESSION['name'];

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Hello World!');
$pdf->Cell(40,10,$name);
$pdf->Output();
?>