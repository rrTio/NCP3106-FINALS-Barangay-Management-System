<?php

$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = '';
$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

$createDB = "CREATE DATABASE ncp3106finals";
if(mysqli_query($conn, $createDB)){}
else{}

mysqli_select_db($conn, "ncp3106finals");
if(!$conn){die("mysqli_connect_error()");}

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
	`residentStatus` TEXT
);";

$createOfficialsTable = "CREATE TABLE IF NOT EXISTS `officials`(
	`nameFirst` TEXT,
	`nameLast` TEXT,
	`nameMiddle` TEXT,
	`nameAlias` TEXT,
	`email` TEXT,
	`contactNumber` VARCHAR(11),
	`cityAddress` TEXT,
	`provAddress` TEXT,
	`purok` TEXT,
	`position` TEXT,
	`birthMonth` VARCHAR(2),
	`birthDay` VARCHAR(2),
	`birthYear` VARCHAR(2),
	`civilStatus` VARCHAR(2),
	`gender` TEXT,
	`religion` TEXT
	`nationality` TEXT
);";

if(mysqli_query($conn, $createResidentTable)){echo "Table creation success <br>";}
else{echo "Error creating table: " . mysqli_error($conn). "<br>";}

if(mysqli_query($conn, $createOfficialsTable)){echo "Table creation success <br>";}
else{echo "Error creating table: " . mysqli_error($conn). "<br>";}

?>