<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "case-management"; // Change this to your actual database name

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



?>