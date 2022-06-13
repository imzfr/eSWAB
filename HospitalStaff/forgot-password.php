<?php
include 'assets/includes/connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $new_password = md5($_POST['new-password']);
    $confirm_password = md5($_POST['confirm-password']);

    if (empty($email) || empty($new_password) || empty($confirm_password)) {
        echo '<script> alert("No details are inserted.")</script>';
    } else 
     {
        $check_email = "SELECT email FROM admin WHERE email='$email' ";
        $check_email_run = mysqli_query($data, $check_email);
        $row = mysqli_fetch_array($check_email_run);

        if ($row > 0) {
           
            $resetPassword = "UPDATE admin SET password = '".$new_password."' where email = '".$email."' ";
                $reset = mysqli_query($data, $resetPassword);
                echo '<script> alert("Password reset successfully.")</script>';
                header('location:login.php');            
        } else {
            echo '<script> alert("Passwords not match!")</script>';
        }
        
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">


<!-- forgot-password24:03-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-small.png">
    <title>Forgot password</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
            <div class="account-center">
            <h3 class="account-title">Forgot Password</h3>
                <div class="account-box">
                    <form class="form-signin" action="#" method="post">
                        <div class="account-logo">
                            <a><img src="assets/img/logo-swab.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Enter Your Email Address</label>
                            <input type="text" class="form-control" autofocus name="email"></input>
                        </div>
                        <div class="form-group">
                            <label>New Password</label>
                            <input type="password" class="form-control" autofocus name="new-password">
                        </div>
                        <div class="form-group">
                            <label>Confirm New Password</label>
                            <input type="password" class="form-control" autofocus name="confirm-password">
                        </div>
                        <div class="form-group text-center">
                            <input class="btn btn-primary account-btn" type="submit" value="Reset Password" name="Reset Password"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- forgot-password24:03-->

</html>