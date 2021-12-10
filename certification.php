<?php
require('./assets/fpdf184/fpdf.php');
include_once('./database/database.php');

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
$cityAddress = $_SESSION['PDFCityAddress'];
$email = $_SESSION['PDFEmail'];

$date = date("M d, Y");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(80,10,$idNumber,0,"C");
$pdf->Cell(20,10,$lastName);
$pdf->Cell(40,10,$firstName);
$pdf->MultiCell(40,10,$middleName);
$pdf->Cell(40,10,$date,2);
$pdf->Output();
?>