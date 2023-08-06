<?php
$servername = "mybooks-db";
$username = "root";
$password = "P@ssw0rd1234";
$database="mybooks_db";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// Set character set to utf8mb4
if (!$conn->set_charset("utf8mb4")) {
  die("Error setting character set: " . $conn->error);
}   
?>