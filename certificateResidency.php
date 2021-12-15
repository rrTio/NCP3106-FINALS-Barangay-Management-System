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

if($gender == "Male"){
    $pronoun = "he";
}
if($gender == "Female"){
    $pronoun = "she";
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
$pdf->Cell(0,5,'Certificate of Residency',0,13,'C');

$pdf->SetFont('Arial','',16);
$pdf->Cell(0,5,'',0,14,'C');
$pdf->Cell(0,5,'',0,15,'C');
$pdf->Cell(0,5,'    This is to certify that, ' . $firstName . " " . $middleName . " " . $lastName . ' of legal age,',0,16,'C');
$pdf->Cell(0,5,$civilStatus.', '. $nationality. ' whose specimen signature appears below as '. $residentType . ' resident',5,17,'C');
$pdf->Cell(0,5, 'of this purok named ' . $purok . '.', 0,18,'C');
$pdf->Cell(0,5, '',0,19,'C');
$pdf->Cell(0,5, '',0,20,'C');
$pdf->Cell(0,5, '   Based on records of this office, ' . $pronoun . ' has been residing at ',0,21,'C');
$pdf->Cell(0,5,$cityAddress.'.',0,22,'C');
$pdf->Cell(0,5, '',0,23,'C');
$pdf->Cell(0,5, '',0,24,'C');
$pdf->Cell(0,5, '   This CERTIFICATION is being issued upon the request of the',0,25,'C');
$pdf->Cell(0,5, 'above-named person for whatever legal purpose it may serve.',0,26,'C');
$pdf->Cell(0,5, '',0,27,'C');
$pdf->Cell(0,5, '',0,28,'C');
$pdf->Cell(0,5, '   Issued this ' . $date . ' at purok ' . $purok . '.',0,29,'C');
$pdf->Cell(0,5, '',0,30,'C');
$pdf->Cell(0,5, '',0,31,'C');
$pdf->Cell(0,5, '',0,32,'C');
$pdf->Cell(0,5, '',0,33,'C');
$pdf->Cell(0,5, $encoder,0,34,'R');
$pdf->Cell(0,5, $encoderPosition,0,35,'R');

$pdf->Output('D','COR_'.$idNumber.$lastName.'.pdf');
?>