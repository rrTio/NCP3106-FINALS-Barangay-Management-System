<?php
require('./assets/fpdf184/fpdf.php');
include_once('./database/database.php');
session_start();
$idNumber = $_SESSION['PDFIdNumber'];
$lastName = $_SESSION['PDFLastName'];
$firstName = $_SESSION['PDFFirstName'];
$middleName = $_SESSION['PDFMiddleName'];
$alias = $_SESSION['PDFAlias'];
$civilStatus = $_SESSION['PDFCivilStatus'];
$nationality = $_SESSION['PDFNationality'];
$encoder = $_SESSION['PDFEncoder'];
$encoderPosition = $_SESSION['PDFEncoderPosition'];
$residentType = $_SESSION['PDFResidentType'];
$purok = $_SESSION['PDFPurok'];
$gender = $_SESSION['PDFGender'];
$cityAddress = $_SESSION['PDFCityAddress'];

$logoDirectory = "../assets/images/pdfLogo.png";

$orNumber = substr(hexdec(uniqid()), 8);
$cedulla = substr(hexdec(uniqid()), 8);
$orDate = date("Y-m-d");
$cedullaDate = date("Y-m-d");

if($gender == "Male"){
    $pronoun = "he";
    $nextPronoun = "his";
}
if($gender == "Female"){
    $pronoun = "she";
    $nextPronoun = "her";
}

$date = date("F d, Y");

$pdf = new FPDF('L','mm','A4');
$pdf->AddPage();
$pdf->SetFont('Arial','B',14);
$pdf->Image('./assets/images/pdfLogo.png' ,130,2,-400);
$pdf->Cell(0,5,'',0,3,'C');
$pdf->Cell(0,5,'',0,4,'C');
$pdf->Cell(0,5,'',0,5,'C');
$pdf->Cell(0,5,'',0,6,'C');
$pdf->Cell(0,5,'',0,7,'C');
$pdf->Cell(0,5,'Republic of the Philippines',0,8,'C');

$pdf->SetFont('Arial','B',14);
$pdf->Cell(0,5,$purok,0,9,'C');;

$pdf->SetFont('Arial','B',30);
$pdf->Cell(0,5,'',0,10,'C');
$pdf->Cell(0,5,'',0,11,'C');
$pdf->Cell(0,5,'',0,12,'C');
$pdf->Cell(0,5,'Barangay Clearance',0,13,'C');

$pdf->SetFont('Arial','',16);
$pdf->Cell(0,5,'',0,14,'C');
$pdf->Cell(0,5,'',0,15,'C');
$pdf->Cell(0,5,'    This is to certify that, ' . $firstName ." ". $middleName ." ". $lastName . ' of legal age,',0,16,'C');
$pdf->Cell(0,5,  $nationality. ' and a bonafide resident of purok '. $purok . ' and that has no derogatory',5,17,'C');
$pdf->Cell(0,5, 'records in the purok prior to the date of issuance of this certificate.', 0,18,'C');
$pdf->Cell(0,5, '',0,19,'C');
$pdf->Cell(0,5, '',0,20,'C');
$pdf->Cell(0,5, '   This certificate is issued in '. $pronoun .' request for ' . $nextPronoun . ' valid reason',0,21,'C');
$pdf->Cell(0,5,'Issued this '. $date . '.',0,22,'C');
$pdf->Cell(0,5, '',0,23,'C');
$pdf->Cell(0,5, '',0,24,'C');
$pdf->Cell(0,5, '_______________',0,25,'L');
$pdf->Cell(0,5, 'Signature',0,26,'L');
$pdf->Cell(0,5, $encoder,0,25,'R');
$pdf->Cell(0,5, '_______________',0,26,'R');
$pdf->Cell(0,5, $encoderPosition,0,27,'R');
$pdf->Cell(0,5, 'OR NUMBER: '. $orNumber ,0,28,'L');
$pdf->Cell(0,5, 'OR Date Issued: ' . $orDate ,0,29,'L');
$pdf->Cell(0,5, 'Cedulla Number: ' . $cedulla ,0,28,'R');
$pdf->Cell(0,5, 'Cedulla Date Issued: ' . $cedullaDate ,0,29,'R');

$pdf->Output('D','BR_'.$idNumber.$lastName.'.pdf');
?>