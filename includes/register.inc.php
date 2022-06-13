<?php

if(isset($_POST["submit"])){

    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dob = $_POST['dob'];
    $race = $_POST['race'];
    $ic = $_POST['ic'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $phoneNo = $_POST['phoneNo'];

    require_once 'config.php';
    require_once 'functions.inc.php';


    if(invalidUsername($username) !== false) {
        header("location: ../register.php?error=invalidusername");
        exit();
    }

    if(invalidEmail($email) !== false) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }

    if(usernameExists($conn, $username, $email) !== false) {
        header("location: ../register.php?error=usernametaken");
        exit();
    }

    createPatient($conn, $fname, $email, $username, $password, $dob, $race, $ic, $gender, $address, $phoneNo);
    }
    else {
    header("location: ../register.php");
    exit();
}
