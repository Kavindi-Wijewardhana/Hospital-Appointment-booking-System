<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointment_db";

// සම්බන්ධතාවය සාදාගැනීම
$conn = mysqli_connect($servername, $username, $password, $dbname);

// සම්බන්ධතාවය පරීක්ෂා කිරීම
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>