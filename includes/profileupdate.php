<?php
session_start();

if(isset($_POST["submit"])){

    $fnameNew = $_POST['fname'];
    $emailNew = $_POST['email'];
    $passwordNew = $_POST['password'];
    $dobNew = $_POST['dob'];
    $icNew = $_POST['ic'];
    $passportNew = $_POST['passport'];
    $addressNew = $_POST['address'];
    $phoneNoNew = $_POST['phoneNo'];

    require_once 'config.php';
    require_once 'functions.inc.php';
    
    updatePatient($conn, $fnameNew, $emailNew, $passwordNew, $dobNew, $icNew,  $passportNew, $addressNew, $phoneNoNew);
    header("location: ../profile.php");
    exit();
}