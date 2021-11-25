<?php
include_once('connection.php');

if(isset($_POST['btnLogin'])){
    $adminUsername = $_POST['username'];
    $adminPassword = $_POST['password'];
    $name = "ADMIN";
    $purok = "PUROK SAMPLE";
    //more codes
    if(isset($_POST["btnLogin"])){
        if($adminUsername == "admin" && $adminPassword == "admin"){
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['purok'] = $purok;
            header("Location: ../dashboard.php");
        }
    }
}

if(isset($_POST['btnRegisterResident'])){
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $middleName = $_POST['middleName'];
    $alias = $_POST['alias'];
    $birthMonth = $_POST['bMonth'];
    $birthDay = $_POST['bDay'];
    $birthYear = $_POST['bYear'];
    $placeOfBirth = $_POST['pob'];
    $gender = $_POST['gender'];
    $civilStatus = $_POST['cStatus'];
    $voterStatus = $_POST['vStatus'];
    $ifActive = $_POST['voteActive'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $occupation = $_POST['occupation'];
    $sector = $_POST['sector'];
    $cityAddress = $_POST['cityAdd'];
    $provAddress = $_POST['provAdd'];
    $purok = $_POST['purok'];
    $email = $_POST['email'];
    $mobileNumberA = $_POST['mNumOne'];
    $mobileNumberB = $_POST['mNumTwo'];
    $houseNumberA = $_POST['hNumOne'];
    $houseNumberB = $_POST['hNumTwo'];
    $residentType = $_POST['resType'];
    $residetnStatus = $_POST['resStat'];
}
?>