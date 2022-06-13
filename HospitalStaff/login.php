<?php
include 'assets/includes/connect.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST["username"];
    $password = md5($_POST['password']);

    $query = "SELECT * from admin where username= '".$username."' AND password= '".$password."'";
    $result=mysqli_query($data,$query);
    $row=mysqli_fetch_array($result);

    if($row["department"]==1)
    {
       header('location:dashboard-lab.php');
    }
    else if($row["department"]==2)
    {
        header('location:dashboard-admin.php');
    }
    else if($row["department"]==3)
    {
        header('location:dashboard-medical.php');
    }
    else 
    {
        echo '<script> alert("Incorrect username or password!")</script>';
    }
}


?>
<!DOCTYPE html>
<html lang="en">


<!-- login23:11-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-small.png">
    <title>Hospital Staff Login</title>
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
            <h3 class="account-title">Hospital Staff Login</h3>
                <div class="account-box">
                    <form action="#" class=" form-signin" method="post">
                        <div class="account-logo">
                            <a><img src="assets/img/logo-swab.png" alt=""></a>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" autofocus="" class="form-control" name="username" required="required">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password" required="required">
                        </div>
                        <div class="form-group text-right">
                            <a href="forgot-password.php">Forgot your password?</a>
                        </div>
                        <div class="form-group text-center">
                            <input type="submit" class="btn btn-primary account-btn" name="login" value="Login"></input>
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


<!-- login23:12-->

</html>

