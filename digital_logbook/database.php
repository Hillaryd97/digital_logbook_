<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE siwes_logbook";
if (mysqli_query($conn, $sql)) {
    echo "database create";
} 
else {
    echo "Error creating database: " . mysqli_error($conn);
}
?>