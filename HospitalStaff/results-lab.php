<?php
include 'assets/includes/connect.php';
session_start();
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
                        <li >
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
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Swab Test Results</h4>
                    </div>
                    <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="add-results.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Add Results</a>
                </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table">
								<thead>
									<tr>
                                    <th>Patient Username</th>
                                    <th>NRIC/PP.No</th>
                                    <th>Gender</th>
                                    <th>Race</th>
                                    <th>Results ID</th>
                                    <th>Results Date</th>
                                    <th>Results Time</th>
                                    <th>Results Status</th>
									</tr>
								</thead>
								<tbody>
                                <?php
                                $sql = "SELECT username, IC, Gender, Race, Results_ID, Results_Date, Results_Time, Results_Status FROM tblresults";
                                $result = $data->query($sql);

                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr><td>" . $row["username"]  . "</td>". "<td>" . $row["IC"]  . "</td>". "<td>" . $row["Gender"]  . "</td>". "<td>" . $row["Race"]  . "</td>". "<td>" . $row["Results_ID"]  . "</td>". "<td>" . $row["Results_Date"]  . "</td>". "<td>" . $row["Results_Time"]  . "</td>". "<td>" . $row["Results_Status"] . "</td></tr>";
                                    }
                                    echo "</table>";
                                } else {
                                    echo "0 result";
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



</html>