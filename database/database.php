<?php
include_once('connection.php');

if(isset($_POST['btnLogin'])){
    $adminUsername = $_POST['username'];
    $adminPassword = $_POST['password'];
    $purok = "TEXT SAMPLE";
    //more codes
    if(isset($_POST["btnLogin"])){
        if($adminUsername == "admin" && $adminPassword == "admin"){
            session_start();
            $_SESSION['sample'] = $purok;
            header("Location: ../dashboard.php");
        }
    }
}
?>