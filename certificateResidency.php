<?php
require('./assets/fpdf184/fpdf.php');
include_once('./database/database.php');
session_start();
$idNumber = $_SESSION['PDFIdNumber'];
$lastName = $_SESSION['PDFLastName'];
$firstName = $_SESSION['PDFFirstName'];
$middleName = $_SESSION['PDFMiddleName'];
$alias = $_SESSION['PDFAlias'];
$birthDate = $_SESSION['PDFDay'];
$birthMonth = $_SESSION['PDFMonth'];
$birthYear = $_SESSION['PDFYear'];
$encoder = $_SESSION['PDFEncoder'];
$encoderPosition = $_SESSION['PDFEncoderPosition'];
$residentType = $_SESSION['PDFResidentType'];
$residentStatus = $_SESSION['PDFResidentStatus'];
$purok = $_SESSION['PDFPurok'];

$date = date("F d, Y");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,$date,0,1);
$pdf->Cell(100,10,"Name: ".$lastName.", ".$firstName." ".$middleName,0,2);
$pdf->Cell(80,10,"Resident ID: ".$idNumber,0,3);
$pdf->MultiCell(100,10,"Purok: ".$purok,0,4);

$pdf->Output('D','Certificate_Of_Residency_'.$idNumber.$lastName.'.pdf');
?>