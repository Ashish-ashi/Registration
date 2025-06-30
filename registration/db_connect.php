<?php
$host = "localhost";
$user = "root";
$password = "Ashish@2005";
$database = "std";
$con = mysqli_connect($host, $user, $password, $database);
if (!$con) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
