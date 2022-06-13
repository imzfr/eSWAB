<?php
include 'assets/includes/connect.php';
session_start();

if (isset($_POST["add"])) {

    $username = $_POST["username"];
    $NRIC_PP = $_POST["IC"];
    $Gender = $_POST["gender"];
    $Race = $_POST["Race"];
    $Results_ID = $_POST["Results_ID"];
    $Results_Date = $_POST["Date"];
    $Results_Time = $_POST["Time"];
    $Results_Status = $_POST["status"];

    $sql = "INSERT INTO tblresults (username, IC, Gender,Race, Results_ID, Results_Date,Results_Time,Results_Status)
    VALUES ('$username','$NRIC_PP','$Gender','$Race','$Results_ID','$Results_Date','$Results_Time','$Results_Status' )";

    $query = mysqli_query($data, $sql);

    if ($query) {
        echo '<script> alert("Results have been submitted!")</script>';
        header('location: results-lab.php');
    } else {
        echo '<script> alert("Submission not successful!")</script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-small.png">
    <title>Results</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
            <div class="header-left">
                <a class="logo">
                    <img src="assets/img/logo-small.png" width="35" height="35" alt=""> <span>E-Swab</span>
                </a>
            </div>
            <ul class="nav user-menu float-right">
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
                            <span class="status online"></span>
                        </span>
                        <span>Lab</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li>
                            <a href="dashboard-lab.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="active">
                            <a href="results-lab.php"><i class="fa fa-flask"></i> <span>Test Results</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <h4 class="page-title">Add Results</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <form method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Results ID </label>
                                    <input class="form-control" type="text" name="Results_ID">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Patient Username</label>
                                    <input class="form-control" type="text" name="username">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Date</label>
                                        <input class="form-control" type="date" name="Date">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>NRIC/PP No.</label>
                                    <input class="form-control" type="text" name="IC">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Time</label>
                                    <div class="time-icon">
                                        <input type="text" class="form-control" id="datetimepicker3" name="Time">
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Race</label>
                                    <select class="select" name="Race">
                                        <option>Select</option>
                                        <option>Malay</option>
                                        <option>Chinese</option>
                                        <option>Indian</option>
                                        <option>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <select class="select" name="gender">
                                        <option>Select</option>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Result</label>
                                    <select class="select" name="status">
                                        <option>Select</option>
                                        <option>Positive</option>
                                        <option>Negative</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea class="form-control" rows="3" cols="30"></textarea>
                        </div>
                        <div class="m-t-20 text-center">
                            <input type="submit" class="btn btn-primary account-btn" name="add" value="Submit Results"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
        $(function() {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'

            });

        });
    </script>
</body>



</html>