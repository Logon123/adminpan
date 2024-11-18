<?php
$servername = "localhost"; // or your server name
$username = "apanel"; // replace with your database username
$password = "password"; // replace with your database password
$dbname = "adminpanel"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>