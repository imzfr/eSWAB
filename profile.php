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

    <title>eSWAB | My Profile</title>

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
                        <h1 class="text-capitalize mb-5 text-lg">Profile</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-lg-8">
        <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5"></br>
            <h2 class="mb-2 title-color">Profile Details</h2> </br>
            <form action="includes/profileupdate.php" method="post" enctype="multipart/form-data">

                <?php
                $currentUSer = $_SESSION['username'];
                $sql = "SELECT * FROM patient WHERE username = '$currentUSer' ";

                $gotResults = mysqli_query($conn, $sql);

                if ($gotResults) {
                    if (mysqli_num_rows($gotResults) > 0) {
                        while ($row = mysqli_fetch_array($gotResults)) {
                ?>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Full Name</p>
                                        <input name="fname" id="fname" type="text" class="form-control" value="<?php echo $row['fname']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Email</p>
                                        <input name="email" id="email" type="text" class="form-control" value="<?php echo $row['email']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Username</p>
                                        <input name="username" id="username" type="text" class="form-control" value="<?php echo $row['username']; ?>" readonly>

                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Password</p>
                                        <input name="password" id="password" type="password" class="form-control" value="<?php echo $row['password']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>IC Number</p>
                                        <input name="ic" id="ic" type="text" class="form-control" value="<?php echo $row['ic']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Race</p>
                                        <input class="form-control" name="race" id="race" id="exampleFormControlSelect1" value="<?php echo $row['race']; ?>" readonly>
                                    </div>
                                </div>


                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Gender</p>
                                        <input class="form-control" name="gender" id="gender" id="exampleFormControlSelect1" value="<?php echo $row['gender']; ?>" readonly>
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Phone Number</p>
                                        <input name="phoneNo" id="phoneNo" type="text" class="form-control" value="<?php echo $row['phoneNo']; ?>">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Date of Birth</p>
                                        <input class="form-control" type="date" name="dob" id="dob" value="<?php echo $row['dob']; ?>">
                                    </div>
                                </div>
                                <div class="col-lg-6"></div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <p>Address</p>
                                        <input name="address" id="address" size="100" type="text" value="<?php echo $row['address']; ?>" class="resizedTextbox">
                                    </div></br></br>
                                </div>
                            </div>

                            <?php
                            if (isset($_GET["error"])) {

                                if ($_GET["error"] == "invalidemail") {
                                    echo "<h3>Invalid email!<h3>";
                                } else if ($_GET["error"] == "none") {
                                    echo "<h3>Your profile succesfully updated .<h3>";
                                }
                            }
                            ?>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    </br></br><input type="submit" name="submit" id="submit" value="Save Update" class="btn btn-main-2 btn-round-full btn-icon">
                                </div>
                            </div>
            </form>
        </div>
    </div>
<?php
                        }
                    }
                }
?>


<!-- Footer -->
<?php include('includes/footer.php'); ?>

</body>

</html>