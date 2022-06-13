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

	<title>eSWAB | Results</title>

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
						<h1 class="text-capitalize mb-5 text-lg">Swab Test Results</h1>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="col-lg-8">
		<div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5"><br>
			<h2 class="mb-2 title-color">Results</h2><br>

			<?php
			$currentUSer = $_SESSION['username'];
			$sql = "SELECT * FROM tblresults WHERE username = '$currentUSer' ";

			$gotResults = mysqli_query($conn, $sql);

			if ($gotResults) {
				if (mysqli_num_rows($gotResults) > 0) {
					while ($row = mysqli_fetch_array($gotResults)) {
			?>

						<div class="row">

							<div class="col-lg-6">
								<div class="form-group">
									<h3>NRIC/PP No</h3>
									<input name="IC" id="IC" class="form-control" value="<?php echo $row['IC']; ?>" readonly>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<h3>Gender</h3>
									<input name="Gender" id="Gender" class="form-control" value="<?php echo $row['Gender']; ?>" readonly>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<h3>Race</h3>
									<input name="Race" id="Race" type="text" class="form-control" value="<?php echo $row['Race']; ?>" readonly>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<h3>Results ID</h3>
									<input name="Results_ID" id="Results_ID" type="text" class="form-control" value="<?php echo $row['Results_ID']; ?>" readonly>
								</div>
							</div>


							<div class="col-lg-6">
								<div class="form-group">
									<h3>Results Date</h3>
									<input name="Results_Date" id="Results_Date" type="text" class="form-control" value="<?php echo $row['Results_Date']; ?>" readonly>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<h3>Results Time</h3>
									<input name="Results_Time" id="Results_Time" type="text" class="form-control" value="<?php echo $row['Results_Time']; ?>" readonly>
								</div>
							</div>

							<div class="col-lg-6">
								<div class="form-group">
									<h3>Results Status</h3>
									<input name="Results_Status" id="Results_Status" type="text" class="form-control" value="<?php echo $row['Results_Status']; ?>" readonly>
								</div>
							</div>
						</div>
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