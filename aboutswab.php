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

	<title>eSWAB | About Swab Test Kits</title>

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
						<h1 class="text-capitalize mb-5 text-lg">Types of Swab Test</h1>
					</div>
				</div>
			</div>
		</div>
	</section></br></br>


	<div class="section-title text-center">
		<h2 class="mb-4">Two types of Swab Test</h2>
		<div class="divider mx-auto my-4"></div>
	</div>

	<section class="section service-2">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-5">
					<div class="service-block mb-5 mb-lg-0">
						<img src="images/aboutswab/1.png" alt="" class="img-fluid">
						<div class="content">
							<h2 class="mb-2 title-color">RT-PCR </h2>
							<h4 class="mt-4 mb-2 title-color">Real-Time Reverse Transcription-Polymerase Chain Reaction</h4></br>
							<p class="btn btn-main btn-round-full"> Price RM 240</p>
							<p class="mb-4"><b>Objective:</b> Detect Covid-19 virus in the patient's body</p>
							<p class="mb-4"><b>MOH Recognition:</b> Gold standard for Covid-19 testing</p>
							<p class="mb-4"><b>Detects:</b> The virus's genetic material</p>
							<p class="mb-4"><b>Method:</b> Nasopharyngeal Swab</p>
							<p class="mb-4"><b>Result:</b> Positive means the individual is infected</p>
							<p class="mb-4"><b>Accuracy:</b> Typically high accuracy rates</p>
							<p class="mb-4"><b>Effectiveness:</b> Assist in Covid-19 verification</p>
							<p class="mb-4"><b>Turnaround time:</b> 24-72 hours</p></br></br>

						</div>
					</div>
				</div>

				<div class="col-lg-6 col-md-5">
					<div class="service-block mb-5 mb-lg-0">
						<img src="images/aboutswab/2.png" alt="" class="img-fluid">
						<div class="content">
							<h2 class="mb-2 title-color">RTK Antigen</h2>
							<h4 class="mt-4 mb-2 title-color">Rapid Test Kit Antigen</h4></br></br>
							<p class="btn btn-main btn-round-full"> Price RM 100</p>
							<p class="mb-4"><b>Objective:</b> Detect antigens in the body and Covid-19 virus in the body but is less sensitivity </p>
							<p class="mb-4"><b>MOH Recognition:</b> Recognised by Ministry of Health</p>
							<p class="mb-4"><b>Detects:</b> Specific proteins from the virus</p>
							<p class="mb-4"><b>Method:</b> Nasopharyngeal Swab</p>
							<p class="mb-4"><b>Result:</b> Positive means the individual is infected</p>
							<p class="mb-4"><b>Accuracy:</b> Usually high accuracy, but false negatives can occur. Negative results need to be confirmed with a molecular test.</p>
							<p class="mb-4"><b>Effectiveness:</b> Assist in Covid-19 verification</p>
							<p class="mb-4"><b>Turnaround time:</b> 15-30 minutes</p>
						</div>
					</div>
				</div>
			</div>
		</div><br>

		<!-- Footer -->
		<?php include('includes/footer.php'); ?>

</body>

</html>