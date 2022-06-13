<?php
session_start();

if (isset($_SESSION["username"]) && $_SESSION["username"] === true) {
    header("location: index.php");
    exit;
}

require_once "includes/config.php";

$username = $password = "";
$username_err = $password_err = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (empty(trim($_POST["username"]))) {
        $username_err = "Please enter username.";
    } else {
        $username = trim($_POST["username"]);
    }

    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    if (empty($username_err) && empty($password_err)) {

        $sql = "SELECT id, username, password FROM patient WHERE username = ?";

        if ($stmt = mysqli_prepare($conn, $sql)) {
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            $param_username = $username;

            if (mysqli_stmt_execute($stmt)) {
                mysqli_stmt_store_result($stmt);
                if (mysqli_stmt_num_rows($stmt) == 1) {
                    mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                    if (mysqli_stmt_fetch($stmt)) {
                        if (password_verify($password, $hashed_password)) {
                            session_start();

                            $_SESSION["username"] = true;
                            $_SESSION["username"] = $username;

                            header("location: index.php");
                        } else {
                            $password_err = "The password you entered was not valid.";
                        }
                    }
                } else {
                    $username_err = "No account found with that username.";
                }
            } else {
                echo "Oops! Something went wrong. Please try again later.";
            }
        }
        mysqli_stmt_close($stmt);
    }
    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>eSWAB | Login</title>

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
                        <h1 class="text-capitalize mb-5 text-lg">Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-lg-8">
        <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5"></br>
            <h2 class="mb-2 title-color">Log in your account.</h2>
            <p>Don't have an account? <a href="register.php">Register Here</a>.</p>
            <form action="" method="post" class="appoinment-form">


                <div class="col-lg-6">
                    <div class="form-group">
                        <input name="username" id="username" type="text" class="form-control" placeholder="Username" required="">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="form-group">
                        <input name="password" id="password" type="password" class="form-control" placeholder="Password" required="">
                    </div>
                </div></br>

                </br>
                <div class="form-group">
                    <input id="submit" name="submit" value="Login" type="submit" class="btn btn-main btn-round-full">
                </div>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>

</html>