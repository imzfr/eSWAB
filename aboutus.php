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

	<title>eSWAB | About Us</title>

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
						<h1 class="text-capitalize mb-5 text-lg">About Us</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section about-page">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">


					<img src="images/logo1.jpeg" alt="" class="img-fluid">
				</div>
				<div class="col-lg-8">
					<h2 class="title-color">eSWAB</h2>
					<p>e-Swab is a COVID-19 test management system which is a web based platform that allows individuals to book appointment for swab test. Due to COVID-19, we have build this website which helps the process in booking appointment swab test will be easier to all of the users especially to patient, medical staff and laboratory staff. By creating this system it helps in reducing COVID-19 cases where patient can book appointment easier. You will need to register first to our website to book your appointment for the swab test. </p>
				</div>
			</div>
		</div>
	</section>

	<div class="row justify-content-center">
		<div class="col-lg-6">
			<div class="section-title text-center">
				<h2 class="mb-4">How Swab & Testing Works</h2>
				<div class="divider mx-auto my-4"></div>
				<p>Below are flow on how to book your swab test appointment</p>
			</div>
		</div>
	</div>
	<section class="fetaure-page ">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="images/faq/2.png" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Register</h4>
						<p>You need to register to our website by filling all of the information needed</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="images/faq/5.png" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Login</h4>
						<p>Login to our website to start your booking appointment</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="about-block-item mb-5 mb-lg-0">
						<img src="images/faq/1.png" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Choose your swab test types and location</h4>
						<p>Go to Book Appointment to start your booking. Ensure that you read the swab test type first before proceed the booking. </p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="about-block-item">
						<img src="images/faq/6.png" alt="" class="img-fluid w-100">
						<h4 class="mt-3">Attend your appointment</h4>
						<p>Attend your appointment by confirming the booking. </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="section awards">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-4">
					<h2 class="title-color">Location for our Swab Test </h2>
					<div class="divider mt-4 mb-5 mb-lg-0"></div>
				</div>
				<div class="col-lg-8">
					<div class="row">
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="award-img">
								<img src="images/swabCentre/bp.jpg" alt="" class="img-fluid">

							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="award-img">
								<img src="images/swabCentre/sunway.jpg" alt="" class="img-fluid">
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="award-img">
								<p>BP Specialist Centre Cheras</p>
							</div>
						</div>

						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="award-img">
								<p>BP Specialist Centre Klang</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="award-img">
								<p>BP Diagnostic Kepong</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6">
							<div class="award-img">
								<p>BP Diagnostic Kajang</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>


	<section class="section testimonial">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 offset-lg-6">
					<div class="section-title">
						<h2 class="mb-4">What they say about us</h2>
						<div class="divider  my-4"></div>
					</div>
				</div>
			</div>
			<div class="row align-items-center">
				<div class="col-lg-6 testimonial-wrap offset-lg-6">
					<div class="testimonial-block">
						<div class="client-info ">
							<h4>Convenient!</h4>
							<span>Adam Yusuf</span>
						</div>
						<p>
							A very convenient platform to get an immediate swab test appointment booking without the need to go to a clinic or hospital. Thank you for your wonderful service. It's definitely reliable.
						</p>
						<i class="icofont-quote-right"></i>

					</div>

					<div class="testimonial-block">
						<div class="client-info">
							<h4>Great Service!</h4>
							<span>Muhammad Naufal</span>
						</div>
						<p>
							They provide great service where the swab test session are going smooth without any delay.
						</p>
						<i class="icofont-quote-right"></i>
					</div>

					<div class="testimonial-block">
						<div class="client-info">
							<h4>Great Website!</h4>
							<span>Nurul Natasha</span>
						</div>
						<p>
							I just book my appointment wihtout any difficulities and the website are easy to use.
						</p>
						<i class="icofont-quote-right"></i>
					</div>


				</div>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<?php include('includes/footer.php'); ?>

</body>

</html>