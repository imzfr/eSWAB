<?php
include 'assets/includes/connect.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<!-- patients23:17-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-small.png">
    <title>Patients</title>
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
                    <span>Admin</span>
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
                        <li >
                            <a href="dashboard-admin.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
                        <li class="active">
                            <a href="patients.php"><i class="fa fa-user"></i> <span>Patients</span></a>
                        </li>
                        <li>
                            <a href="appointments.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
						<li>
                            <a href="results.php"><i class="fa fa-flask"></i> <span>Test Results</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table">
								<thead>
									<tr>
										<th>PatientID</th>
										<th>Name</th>
										<th>Date of birth</th>
										<th>Identification Number/Passport Number</th>
										<th>Address</th>
										<th>Phone</th>
										<th>Email</th>
										<th>Registered Date</th>
									</tr>
								</thead>
								<tbody>
                                    <?php
                                    $sql = "SELECT id, fname, dob, ic, address, phoneNo, email, regDate from patient";
                                    $result = $data->query($sql);

                                    if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<tr><td>".$row["id"]."</td><td>".$row["fname"]."</td><td>".$row["dob"]."</td><td>".$row["ic"]."</td><td>"
                                            .$row["address"]."</td><td>".$row["phoneNo"]."</td><td>".$row["email"]."</td><td>".$row["regDate"]."</td></tr>";
                                        }
                                    }

									?>	
								</tbody>
							</table>
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
</body>


<!-- patients23:19-->
</html>