<?php
$servername = "localhost";
$username = "id18297512_root";
$password = "Yt~a3Qq$%!1fu?4e";
$db = "id18297512_scandiweb";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>