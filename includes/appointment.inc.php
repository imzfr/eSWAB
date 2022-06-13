<?php

if(isset($_POST['submit']))
{
$username = $_POST['username'];
$swabCentre = $_POST['swabCentre'];
$swabTest = $_POST['swabTest'];
$date = $_POST['date'];
$time = $_POST['time'];

require_once 'config.php';
require_once 'functions.inc.php';

createAppointment($conn, $username, $swabCentre, $swabTest, $date, $time);
}
else {
header("location: ../appointment.php");
exit();

}