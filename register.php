<?php
session_start();
error_reporting(0);
include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>eSWAB | Sign Up</title>

    <!-- Essential Scripts -->
    <!-- Main jQuery -->
    <script src="plugins/jquery/jquery.js"></script>

    <!-- Bootstrap 4.3.2 -->
    <script src="plugins/bootstrap/js/popper.js"></script>
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="plugins/counterup/jquery.easing.js"></script>

    <!-- bootstrap.min css -->
    <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">

    <!-- Icon Font Css -->
    <link rel="stylesheet" href="plugins/icofont/icofont.min.css">

    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body id="top">

    <!-- Header -->
    <?php include('includes/header.php'); ?>

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg">Registration</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-lg-8">
        <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5"></br>
            <h2 class="mb-2 title-color">Registration</h2> </br>
            <p class="mb-4">Please fill in the registration form below.</p>
            <form action="includes/register.inc.php" method="post">
                <div class="row">

                    <div class="col-lg-12">
                        <div class="form-group">
                            <input name="fname" id="fname" type="text" class="form-control" placeholder="Full Name" required="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input name="email" id="email" type="text" class="form-control" placeholder="Email" onBlur="checkAvailability()" required="">
                            <span id="user-availability-status" style="font-size:12px;"></span>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <input name="username" id="username" type="text" class="form-control" placeholder="Username" required="">

                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="">
                        </div>
                    </div>

                    
                    <div class="col-lg-6">
                        <div class="form-group">
                            <input name="ic" id="ic" type="text" class="form-control" placeholder="IC / Passport Number">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <p>Race</p>
                            <select class="form-control" name="race" id="race " id="exampleFormControlSelect1">
                                <option>Malay</option>
                                <option>Chinese</option>
                                <option>Indian</option>
                                <option>Others</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-lg-6">
                        <div class="form-group">
                            <p>Gender</p>
                            <select class="form-control" name="gender" id="gender" id="exampleFormControlSelect1">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <p>Phone Number</p>
                            <input name="phoneNo" id="phoneNo" type="text" class="form-control" placeholder="+60" required="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <p>Date of Birth</p>
                            <input class="form-control" type="date" name="dob" id="dob" required="">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <p>Address</p>
                            <input name="address" id="address" size="100" type="text" placeholder="Address" required=""class="resizedTextbox">
                        </div></br></br>
                    </div>
                </div>

                <?php
                if (isset($_GET["error"])) {

                    if ($_GET["error"] == "invalidusername") {
                        echo "<h3>Choose a proper username!<h3>";
                    } else if ($_GET["error"] == "invalidemail") {
                        echo "<h3>Invalid email!<h3>";
                    } else if ($_GET["error"] == "stmtfailed") {
                        echo "<h3>Something went wrong, please try again!<h3>";
                    } else if ($_GET["error"] == "usernametaken") {
                        echo "<h3>Username or email already taken!<h3>";
                    } else if ($_GET["error"] == "none") {
                        echo "<h3>Your account has been registered succesfully.<h3>";
                    }
                }
                ?>
                <div class="col-lg-6">
                    <div class="form-group">
                        </br></br><input type="submit" name="submit" id="submit" value="Create Account" class="btn btn-main-2 btn-round-full btn-icon">
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>

</body>

</html>