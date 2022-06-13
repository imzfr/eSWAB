<?php
session_start();
error_reporting(0);
include('includes/config.php');

?>

<?php
include 'assets/includes/connect.php';
session_start();
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
    <meta name="author" content="themefisher.com">

    <title>eSWAB | Appointment Details</title>

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
                        <h1 class="text-capitalize mb-5 text-lg">Appointment Details</h1>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="col-lg-8">
        <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5"><br>
            <h2 class="mb-2 title-color">Details</h2><br>

            <?php
            $currentUSer = $_SESSION['username'];
            $sql = "SELECT * FROM appointment WHERE username = '$currentUSer' ";

            $gotResults = mysqli_query($conn, $sql);


            if ($gotResults) {
                if (mysqli_num_rows($gotResults) > 0) {
                    while ($row = mysqli_fetch_array($gotResults)) {
            ?>

                        <div class="row">

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h3>Swab Centre</h3>
                                    <input name="swabCentre" id="swabCentre" class="form-control" value="<?php echo $row['swabCentre']; ?>" readonly>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h3>Date</h3>
                                    <input name="date" id="date" class="form-control" value="<?php echo $row['date']; ?>" readonly>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h3>Time</h3>
                                    <input name="time" id="time" type="text" class="form-control" value="<?php echo $row['time']; ?>" readonly>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h3>Type of Swab Test</h3>
                                    <input name="swabTest" id="swabTest" type="text" class="form-control" value="<?php echo $row['swabTest']; ?>" readonly>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h3>Status</h3>
                                    <?php if ($row['statusApproval'] == 0) {
                                        echo "Pending";
                                    }
                                    if ($row['statusApproval'] == 1) {
                                        echo "Approved";
                                    }
                                    if ($row['statusApproval'] == 2) {
                                        echo "Declined";
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <h3>Attendance</h3>
                                    <?php if ($row['patientStatus'] == 0) {
                                        echo "Pending";
                                    }
                                    if ($row['patientStatus'] == 1) {
                                        echo "Done";
                                    }
                                    if ($row['patientStatus'] == 2) {
                                        echo "Cancelled";
                                    }
                                    ?>
                                </div>
                            </div>
                            <a href="includes/deleteapt.php?id=<?= $row['id'] ?>" class="btn btn-main-2 btn-round-full btn-icon">Cancel Appointment</a>
                        </div>
                        <br>
            <?php
                    }
                }
            }
            ?>
        </div>
    </div>

    <!-- Footer -->
    <?php include('includes/footer.php'); ?>
</body>

</html>