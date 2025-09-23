<?php
$servername = "sql101.infinityfree.com"; // use the host given in your MySQL settings
$username = "if0_40009151";
$password = "EduNest25";
$dbname = "if0_40009151_wandergo_db";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
