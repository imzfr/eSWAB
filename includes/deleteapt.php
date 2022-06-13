<?php
if(isset($_GET['id'])) {

    $id= $_GET['id'];

    require_once 'config.php';

    $query = "DELETE FROM appointment WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        echo "Appointment Cancelled.";
        header("location: ../details.php?error=appointmentCancelled");
    }
    else
    {
        echo '<script> alert("Appointment cannot be cancelled"); </script>';
    }
}
?>