<?php

$host="localhost";
$user = "root";
$password = "";
$db="eswab";

$data=mysqli_connect($host,$user,$password,$db);
if($data===false)
{
    die("Failed to connect database");
}
