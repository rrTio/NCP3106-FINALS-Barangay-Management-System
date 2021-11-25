<?php

$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = '';
$DB_NAME = '';

$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_NAME);

$createDB = "CREATE DATABASE finals";
if(mysqli_query($conn, $createDB)){
    
}
if($conn === false){
    die("ERROR: Could not connect." . mysqli_connect_error());
}



?>