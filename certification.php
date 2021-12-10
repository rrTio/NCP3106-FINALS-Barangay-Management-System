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

$date = date("F d, Y");

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->MultiCell(80,10,$date);
$pdf->MultiCell(100,10,"Name: ".$lastName.", ".$firstName." ".$middleName);
$pdf->Cell(80,10,"Resident ID: ".$idNumber);

$pdf->Output('D', $idNumber.$lastName.'.pdf');
?>