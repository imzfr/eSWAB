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

  <title>eSWAB | Book Appointment</title>

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

  <style>
    table,
    td {
      border: 1px solid #333;
      padding: 10px;
    }

    thead,
    tfoot {
      background-color: #333;
      color: #fff;
    }
  </style>
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
            <span class="text-white"></span>
            <h1 class="text-capitalize mb-5 text-lg">Book Appointment</h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="appoinment section">
    <div class="col-lg-12">
      <div class="appoinment-wrap mt-5 mt-lg-0 pl-lg-5">
        <form method="post" action="includes/appointment.inc.php">

          <h3 class="mb-2 title-color">1. Enter Username</h3>
          <div class="col-lg-6">
            <div class="form-group">
              <input name="username" id="username" type="text" class="form-control" placeholder="Username">
            </div>
          </div>
          <br>
          
          <h3 class="mb-2 title-color">2. Choose location</h3>
          <div class="container">
            <div class="row">
              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5">
                  <img src="images/swabCentre/sunway.jpg" alt="" class="img-fluid">
                  <div class="content">
                    <h4 class="mt-4 mb-2 title-color">Sunway Medical Centre</h4>
                    <p class="mb-4">5, Jalan Lagoon Selatan, Bandar Sunway, 47500 Petaling Jaya, Selangor</p>
                    <a target="_blank" href="https://maps.google.com?q=Sunway Medical Centre - Bandar Sunway,Petaling Jaya">Location</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5">
                  <img src="images/swabCentre/bp.jpg" alt="" class="img-fluid">
                  <div class="content">
                    <h4 class="mt-4 mb-2  title-color">BP Specialist Centre Cheras</h4>
                    <p class="mb-4">No 37, 39, 41 & 43, Jalan 4/96A, Taman Cheras Makmur, Cheras, 56100 Kuala Lumpur</p>
                    <a target="_blank" href="https://maps.google.com?q=BP Specialist Centre Cheras">Location</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5">
                  <img src="images/swabCentre/bp.jpg" alt="" class="img-fluid">
                  <div class="content">
                    <h4 class="mt-4 mb-2 title-color">BP Specialist Centre Klang</h4>
                    <p class="mb-4">No. 29, Jalan Bayu Tinggi 1A/KS6, Taman Bayu Tinggi, 41200 Klang, Selangor</p>
                    <a target="_blank" href="https://maps.google.com?q=BP Specialist Centre Klang">Location</a>
                  </div>
                </div>
              </div>


              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5 mb-lg-0">
                  <img src="images/swabCentre/bp.jpg" alt="" class="img-fluid">
                  <div class="content">
                    <h4 class="mt-4 mb-2 title-color">BP Diagnostic Kajang</h4>
                    <p class="mb-4">No. 40 & 41, Jalan Tukang, 43000 Kajang, Selangor</p>
                    <a target="_blank" href="https://maps.google.com?q=BP Diagnostic Kajang">Location</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5 mb-lg-0">
                  <img src="images/swabCentre/bp.jpg" alt="" class="img-fluid">
                  <div class="content">
                    <h4 class="mt-4 mb-2 title-color">BP Diagnostic Kepong</h4>
                    <p class="mb-4">No. 23, Jalan Metro Perdana Barat 1, Kepong Utara,Kepong, 52100 Kuala Lumpur</p>
                    <a target="_blank" href="https://maps.google.com?q=BP Diagnostic Kepong">Location</a>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-block mb-5 mb-lg-0">
                  <img src="images/swabCentre/bp.jpg" alt="" class="img-fluid">
                  <div class="content">
                    <h4 class="mt-4 mb-2 title-color">BP Diagnostic Rawang</h4>
                    <p class="mb-4">No 7 & 9, Jalan Bandar Rawang 10, Pusat Bandar Rawang, 48000 Rawang, Selangor</p>
                    <a target="_blank" href="https://maps.google.com?q=BP Diagnostic Rawang">Location</a>
                  </div><br>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <select class="form-control" name="swabCentre" id="swabCentre">
                  <option>Select Location</option>
                  <option>Sunway Medical Centre</option>
                  <option>BP Specialist Centre Cheras</option>
                  <option>BP Specialist Centre Klang</option>
                  <option>BP Diagnostic Kajang</option>
                  <option>BP Diagnostic Kepong</option>
                  <option>BP Diagnostic Rawang</option>
                </select>
              </div>
            </div>

            <br>
            <h3 class="mb-2 title-color">3. Choose Swab Test Kits</h3>
            <div class="col-lg-6">
              <div class="form-group">
                <select class="form-control" name="swabTest" id="swabTest">
                  <option>Select Swab Test</option>
                  <option>RT-PCR (RM240)</option>
                  <option>RTK-Antigen (RM100)</option>
                </select>
              </div>
            </div>
            <br>
            <h3 class="mb-2 title-color">4. Choose Preferred Date and Time</h3>

            <div class="col-lg-6">
              <div class="form-group">
                <p>Appointment Date</p>
                <input class="form-control" type="date" name="date" id="date" required="">
                <br>

                <table>
                  <thead>
                    <tr>
                      <th colspan="2">
                        <center>Session Schedule</center>
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><b>Morning</b></td>
                      <td><b>Afternoon</b></td>
                    </tr>
                    <tr>
                      <td>10.00AM</td>
                      <td>14.00PM</td>
                    </tr>
                    <tr>
                      <td>10.30AM</td>
                      <td>14.30PM</td>
                    </tr>
                    <tr>
                      <td>11.00AM</td>
                      <td>15.00PM</td>
                    </tr>
                    <tr>
                      <td>11.30AM</td>
                      <td>15.30PM</td>
                    </tr>
                  </tbody>
                </table>
                <br>
                <p>Appointment Time</p>
                <input class="form-control" type="time" name="time" id="time" required="">
              </div>
            </div>
            <input type="submit" name="submit" id="submit" value="Make Appointment" class="btn btn-main-2 btn-round-full btn-icon">
        </form>
      </div>

    </div>
    </div>
    </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include('includes/footer.php'); ?>

</body>

</html>