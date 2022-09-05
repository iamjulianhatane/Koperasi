<?php
$servername = "localhost";
$database = "ksp_nesar";
$username = "root";
$password = "";
// Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// Check connection

$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>