<?php
$servername = "localhost";
$username = "wesleynix@hotmail.com";
$password = "Ground012345!";

// Create connection
$conn = new mysqli($servername, $username, $password);


// Check connection
if (mysqli_connect_error()) {
  die("Database connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>