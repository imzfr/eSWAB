<?php
include 'assets/includes/connect.php';
session_start();

if(isset($_GET["action"]))
{
    if($_GET["action"]=="approve")
    {
        $appointmentId = $_GET["id"];
        $sql = "UPDATE appointment SET statusApproval = 1 WHERE id = '$appointmentId' ";
        $result = mysqli_query($data, $sql);

        if($result)
        {
            echo '<script>alert("The appointment has been approved.");</script>';
        }
    }

    if($_GET["action"]=="decline")
    {
        $appointmentId = $_GET["id"];
        $sql = "UPDATE appointment SET statusApproval = 2 WHERE id = '$appointmentId' ";
        $result = mysqli_query($data, $sql);

        if($result)
        {
            echo '<script>alert("Decline successful!");</script>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">


<!-- appointments23:19-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/logo-small.png">
    <title>Appointments</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
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
                        <li >
                            <a href="patients.php"><i class="fa fa-user"></i> <span>Patients</span></a>
                        </li>
                        <li class="active">
                            <a href="appointments.php"><i class="fa fa-calendar"></i> <span>Appointments</span></a>
                        </li>
                        <li>
                            <a href="results.php"><i class="fa fa-flask"></i> <span>Test Results</span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Appointments</h4>
                    </div>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-striped custom-table">
								<thead>
									<tr>
										<th>Appointment ID</th>
										<th>Patient's Username</th>
										<th>Appointment Date</th>
										<th>Appointment Session</th>
                                        <th>Swab Center</th>
                                        <th>Swab Test Type</th>
										<th>Approval Status</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
                                <?php
                                    $sql = "SELECT id, username, date, time, swabCentre, swabTest, statusApproval from appointment";
                                    $result = $data->query($sql);

                                   if($result->num_rows > 0){
                                        while($row = $result->fetch_assoc()){
                                            echo "<tr><td>".$row["id"]."</td><td>".$row["username"]."</td><td>".$row["date"]."</td><td>".$row["time"]."</td><td>"
                                            .$row["swabCentre"]."</td><td>".$row["swabTest"]."</td>";
                                            
                                            if ($row["statusApproval"] == 0)
                                            {
                                                echo "<td> Pending </td>";
                                            }
											if ($row["statusApproval"] == 1)
											{
												echo "<td> Approved </td>";
											}
											if ($row["statusApproval"] == 2)
											{
												echo "<td> Declined </td>";
											}	
                                        
											echo '<td><a href="appointments.php?action=approve&id='.$row["id"].'">Approve</a>/
                                            <a onclick="return decline()" href="appointments.php?action=decline&id='.$row["id"].'">Decline</a></td></tr>';	                                            
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
    <script src="assets/js/app.js"></script>
	<script>
            $(function () {
                $('#datetimepicker3').datetimepicker({
                    format: 'LT'
                });
				$('#datetimepicker4').datetimepicker({
                    format: 'LT'
                });
            });
     </script>

     <script>
        function decline(){
            return confirm('Are you sure you want to decline the appointment?');
        }
     </script>
</body>


<!-- appointments23:20-->
</html>