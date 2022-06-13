<?php

function invalidUsername($username) {
   
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    }
    else {
        $result = false;
    }

    return $result;
}


function invalidEmail($email) {
  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else{
        $result =false;
    }

    return $result;
}

function usernameExists($conn, $username, $email) {
   $sql = "SELECT * FROM patient WHERE username = ? OR email = ?;" ;
   $stmt = mysqli_stmt_init($conn);
   if(!mysqli_stmt_prepare($stmt, $sql)){
    header("location: ../register.php?error=stmtfailed");
    exit();
   }

   mysqli_stmt_bind_param($stmt, "ss", $username, $email );
   mysqli_stmt_execute($stmt);

   $resultData = mysqli_stmt_get_result($stmt);

   if($row = mysqli_fetch_assoc($resultData)){
    return $row;
   }

   else{
    $result = false;
    return $result;
   }

   mysqli_stmt_close($stmt);
}



function createPatient($conn, $fname, $email, $username, $password, $dob, $race, $ic, $gender, $address, $phoneNo) {
    $sql = "INSERT INTO patient (fname, email, username, password, dob, race, ic, gender, address, phoneNo) 
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?);" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("location: ../register.php?error=stmtfail");
     exit();
    }
 
    $passwordHashed = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssssssssss", $fname, $email, $username, $passwordHashed, $dob, $race, $ic, $gender, $address, $phoneNo);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../login.php?error=registerSuccess");
    exit();


 }

 function createAppointment($conn, $username, $swabCentre, $swabTest, $date, $time) {

    $sql = "INSERT INTO appointment(username, swabCentre, swabTest, date, time)
    VALUES (?, ?, ?, ?, ?);" ;
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
     header("location: ../appointment.php?error=stmtfail");
     exit();
    }
 
    mysqli_stmt_bind_param($stmt, "sssss", $username, $swabCentre, $swabTest, $date, $time);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../details.php");
    exit();
 }

 function updatePatient($conn, $fnameNew, $emailNew, $passwordNew, $dobNew, $icNew,  $passportNew,  $addressNew, $phoneNoNew){

    $loggedInUser = $_SESSION['username'];
    $sql = "UPDATE patient SET fname='$fnameNew', email='$emailNew', password='$passwordNew', dob='$dobNew', ic='$icNew', passport='$passportNew', address='$addressNew', phoneNo='$phoneNoNew' WHERE username='$loggedInUser'";
    $results = mysqli_query($conn, $sql);
    header("location: ../profile.php?success=userUpdated");
    exit();
    }

?>
