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
	`dateRegistered` TEXT,
	`timeRegistered` TEXT,
	`residentID` TEXT UNIQUE,
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
	`homeNumberB` VARCHAR(11),
	`residentType` TEXT,
	`residentStatus` TEXT,
	`encoder` TEXT,
	`encoderPosition` TEXT,
	`imageLocation` TEXT
);";

$createOfficialsTable = "CREATE TABLE IF NOT EXISTS `officials`(
	`dateRegistered` TEXT,
	`timeRegistered` TEXT,
	`idNumber` TEXT UNIQUE,
	`nameLast` TEXT,
	`nameFirst` TEXT,
	`nameMiddle` TEXT,
	`nameAlias` TEXT,
	`birthMonth` VARCHAR(2),
	`birthDay` VARCHAR(2),
	`birthYear` VARCHAR(4),
	`placeOB` TEXT,
	`gender` TEXT,
	`civilStatus` TEXT,
	`position` TEXT,
	`cityAddress` TEXT,
	`provAddress` TEXT,
	`purok` TEXT,
	`mobileNumberA` VARCHAR(11),
	`mobileNumberB` VARCHAR(11),
	`homeNumberA` VARCHAR(11),
	`homeNumberB` VARCHAR(11),
	`email` TEXT,
	`username` TEXT,
	`officialPassword` TEXT,
	`imageLocation` TEXT
);";

$createLogs = "CREATE TABLE IF NOT EXISTS `logs`(
	`log_date` TEXT,
	`log_time` TEXT,
	`log_timestamp` TEXT,
	`log_event` TEXT,
	`log_transactionID` TEXT UNIQUE,
	`log_encoder` TEXT,
	`log_encoderPosition` TEXT,
	`log_personID` TEXT,
	`log_personName` TEXT,
	`log_purok` TEXT
);";

//EXECUTION FOR CREATING TABLE AND COLUMNS
mysqli_query($conn, $createResidentTable);
mysqli_query($conn, $createOfficialsTable);
mysqli_query($conn, $createLogs);