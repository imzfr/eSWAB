<!DOCTYPE html>
<html lang="zxx">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
	<meta name="author" content="themefisher.com">

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
	<header>
		<?php if (isset($_SESSION['username'])) { ?>
			<div class="header-top-bar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<ul class="top-bar-info list-inline-item pl-0 mb-0">
								<li class="list-inline-item">Welcome :</li>
								<li class="list-inline-item"><?php echo htmlentities($_SESSION["username"]); ?></li>
							</ul>
						</div>

						<div class="col-lg-6">
							<div class="text-lg-right top-right-bar mt-2 mt-lg-0">
								<a href="profile.php"><span>My Profile</span></a> |
								<a href="logout.php"><span>Log out</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } else { ?>

			<div class="header-top-bar">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6">
							<ul class="top-bar-info list-inline-item pl-0 mb-0">
								<li class="list-inline-item"><a href="../HospitalStaff/login.php">Staff Login</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>

		<!-- Top Header -->


		<?php if (isset($_SESSION['username'])) { ?>

			<nav class="navbar navbar-expand-lg navigation" id="navbar">
				<div class="container">
					<a class="navbar-brand" href="index.php">
						<img src="images/logo.png" alt="" class="img-fluid">
					</a>

					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icofont-navigation-menu"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarmain">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About <i class="icofont-thin-down"></i></a>
								<ul class="dropdown-menu" aria-labelledby="dropdown02">
									<li><a class="dropdown-item" href="aboutus.php">About Us</a></li>
									<li><a class="dropdown-item" href="aboutswab.php">About Swab Test Kits</a></li>
								</ul>
							</li>

							<li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>

							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" href="department.html" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Appointment <i class="icofont-thin-down"></i></a>
								<ul class="dropdown-menu" aria-labelledby="dropdown02">
									<li><a class="dropdown-item" href="appointment.php">Book Appointment</a></li>
									<li><a class="dropdown-item" href="details.php">View Appointment Details</a></li>
								</ul>
							</li>

							<li class="nav-item"><a class="nav-link" href="results.php">Results</a></li>

						</ul>
					</div>
				</div>
			</nav>

		<?php } else { ?>

			<nav class="navbar navbar-expand-lg navigation" id="navbar">
				<div class="container">
					<a class="navbar-brand" href="index.php">
						<img src="images/logo.png" alt="" class="img-fluid">
					</a>

					<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain" aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icofont-navigation-menu"></span>
					</button>

					<div class="collapse navbar-collapse" id="navbarmain">
						<ul class="navbar-nav ml-auto">
							<li class="nav-item active">
								<a class="nav-link" href="index.php">Home</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About <i class="icofont-thin-down"></i></a>
								<ul class="dropdown-menu" aria-labelledby="dropdown02">
									<li><a class="dropdown-item" href="aboutus.php">About Us</a></li>
									<li><a class="dropdown-item" href="aboutswab.php">About Swab Test Kits</a></li>
								</ul>
							</li>

							<li class="nav-item"><a class="nav-link" href="faq.php">FAQ</a></li>

							<li class="nav-item"><a class="nav-link" href="login.php">Sign In</a></li>
						</ul>
					</div>
				</div>
			</nav>

		<?php } ?>
	</header>
</head>

</html>