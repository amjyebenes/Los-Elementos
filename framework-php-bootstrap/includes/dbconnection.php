<?php

//La base de datos primero llamando al script createdatabase.php.

$servername = "localhost";
$database = "eletickets";
$username = "dwes";
$password = "abc123.";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection

if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

?>