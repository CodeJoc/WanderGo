<?php

$server = "localhost";
$port = "3307";
$username = "root";
$password = "";
$dbname = "ToursandTravels";

// Attempt to connect to the MySQL database on the specified port
$conn = mysqli_connect($server, $username, $password, $dbname, $port);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// You can proceed with your database operations here

?>
