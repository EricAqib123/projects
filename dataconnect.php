<?php
$servername = "localhost";
$username = "mediscopedia";
$password = "123";
$db= "mediscopedia";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";
?>