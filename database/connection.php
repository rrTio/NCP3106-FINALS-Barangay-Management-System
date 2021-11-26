<?php

$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = '';
$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

//CREATION OF DATABASE
$createDB = "CREATE DATABASE ncp3106finals";
if(mysqli_query($conn, $createDB)){}
else{}

//CONNECTING TO CREATED DATABASE
mysqli_select_db($conn, "ncp3106finals");
if(!$conn){die("mysqli_connect_error()");}

//QUERIES FOR CREATING TABLE AND COLUMNS
$createResidentTable = "CREATE TABLE IF NOT EXISTS `residents`(
	`residentID` VARCHAR(16),
	`nameFirst` TEXT,
	`nameMiddle` TEXT,
	`nameLast` TEXT,
	`nameAlias` TEXT,
	`birthMonth` VARCHAR(2),
	`birthDay` VARCHAR(2),
	`birthYear` VARCHAR(4),
	`placeOB` TEXT,
	`gender` TEXT,
	`civilStatus` TEXT,
	`voterStatus` TEXT,
	`ifActive` TEXT,
	`religion` TEXT,
	`nationality` TEXT,
	`occupation` TEXT,
	`sector` TEXT,
	`cityAddress` TEXT,
	`provAddress` TEXT,
	`purok` TEXT,
	`email` TEXT,
	`mobileNumberA` VARCHAR(11),
	`mobileNumberB` VARCHAR(11),
	`homeNumberA` VARCHAR(11),
	`homNumberB` VARCHAR(11),
	`residentType` TEXT,
	`residentStatus` TEXT,
	`encoder` TEXT,
	`encoderPosition` TEXT
);";

$createOfficialsTable = "CREATE TABLE IF NOT EXISTS `officials`(
	`nameFirst` TEXT,
	`nameLast` TEXT,
	`nameMiddle` TEXT,
	`nameAlias` TEXT,
	`email` TEXT,
	`officialPassword` TEXT,
	`contactNumber` VARCHAR(11),
	`address` TEXT,
	`purok` TEXT,
	`position` TEXT,
	`birthMonth` VARCHAR(2),
	`birthDay` VARCHAR(2),
	`birthYear` VARCHAR(2),
	`civilStatus` VARCHAR(2),
	`gender` TEXT,
	`nationality` TEXT
);";

//EXECUTION FOR CREATING TABLE AND COLUMNS
if(mysqli_query($conn, $createResidentTable) && mysqli_query($conn, $createOfficialsTable)){echo "Table creation success <br>";}
else{echo "Error creating table: " . mysqli_error($conn). "<br>";}
?>