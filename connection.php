<?php
$host = "localhost"; // Database host
$username = "root"; // Database username (default is root for localhost)
$password = ""; // Database password (default is empty for localhost)
$dbname = "db_ramen"; // Your database name

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
