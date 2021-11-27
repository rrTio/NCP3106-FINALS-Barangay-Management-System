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
	`id` INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
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
	`id` INT(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
	`nameLast` TEXT,
	`nameFirst` TEXT,
	`nameMiddle` TEXT,
	`nameAlias` TEXT,
	`birthMonth` VARCHAR(2),
	`birthDay` VARCHAR(2),
	`birthYear` VARCHAR(2),
	`placeOB` TEXT,
	`gender` TEXT,
	`civilStatus` VARCHAR(2),
	`position` TEXT,
	`officialPassword` TEXT,
	`cityAddress` TEXT,
	`provAddress` TEXT,
	`purok` TEXT,
	`email` TEXT,
	`password` TEXT,
	`mobileNumberA` VARCHAR(11),
	`mobileNumberB` VARCHAR(11),
	`homeNumberA` VARCHAR(11),
	`homeNumberB` VARCHAR(11)
);";

//EXECUTION FOR CREATING TABLE AND COLUMNS
if(mysqli_query($conn, $createResidentTable)){}
if(mysqli_query($conn, $createOfficialsTable)){}
else{echo "Error creating table: " . mysqli_error($conn). "<br>";}
