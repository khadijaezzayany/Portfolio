<?php
$servername = "localhost";
$username = "username";
$password = "";
$ndb ="porfolio";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$ndb);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>