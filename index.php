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

	<title>eSWAB | COVID-19 Swab Test</title>

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

	<!-- Slider Start -->
	<section class="banner">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12 col-xl-7">
					<div class="block">
						<div class="divider mb-3"></div>
						<span class="text-uppercase text-sm letter-spacing ">COVID-19 Swab Test</span>
						<h1 class="mb-3 mt-3">Easy and Convenient.</h1>

						<p class="mb-4 pr-5">Get your location and date of testing now!</p>
						<div class="btn-container ">
							<?php if (isset($_SESSION['username'])) { ?>
								<a href="appointment.php" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appointment<i class="icofont-simple-right ml-2  "></i></a>
							<?php } else { ?>
								<a href="login.php" target="_blank" class="btn btn-main-2 btn-icon btn-round-full">Make appointment<i class="icofont-simple-right ml-2  "></i></a>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Features -->
	<section class="features">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="feature-block d-lg-flex">
						<div class="feature-item mb-5 mb-lg-0">
							<div class="feature-icon mb-4">
								<i class="icofont-surgeon-alt"></i>
							</div>
							<span>24 Hours Service</span>
							<h4 class="mb-3">Online Appointment</h4>
							<p class="mb-4">Immediate appointment reservation.</p>
							<?php if (isset($_SESSION['username'])) { ?>
								<a href="appointment.php" class="btn btn-main btn-round-full">Make a appointment</a>
							<?php } else { ?>
								<a href="login.php" class="btn btn-main btn-round-full">Make a appointment</a>
							<?php } ?>
						</div>

						<div class="feature-item mb-5 mb-lg-0">
							<div class="feature-icon mb-4">
								<i class="icofont-ui-clock"></i>
							</div>
							<span>Timing schedule</span>
							<h4 class="mb-3">Working Hours</h4>
							<ul class="w-hours list-unstyled">
								<li class="d-flex justify-content-between">Mon - Fri : <span>8:00 - 17:00</span></li>
								<li class="d-flex justify-content-between">Sat - Sun : <span>10:00 - 17:00</span></li>
							</ul>
						</div>

						<div class="feature-item mb-5 mb-lg-0">
							<div class="feature-icon mb-4">
								<i class="icofont-support"></i>
							</div>
							<span>Emergency Cases</span>
							<h4 class="mb-3">03-964428649</h4>
							<p>Get connected with us for any urgency.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- About Swab -->
	<section class="section about">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4 col-sm-6">
					<div class="about-img">
						<img src="images/about/img-1.jpg" alt="" class="img-fluid">
						<img src="images/about/img-2.jpg" alt="" class="img-fluid mt-4">
					</div>
				</div>
				<div class="col-lg-4 col-sm-6">
					<div class="about-img mt-4 mt-lg-0">
						<img src="images/about/img-3.jpg" alt="" class="img-fluid">
					</div>
				</div>
				<div class="col-lg-4">
					<div class="about-content pl-4 mt-4 mt-lg-0">
						<h2 class="title-color">You can choose <br>your own swab test!</h2>
						<a href="aboutswab.php" class="btn btn-main-2 btn-round-full btn-icon">About Swab Test<i class="icofont-simple-right ml-3"></i></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Includes -->
	<?php include('includes/footer.php'); ?>

</body>

</html>