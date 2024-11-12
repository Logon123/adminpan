<?php
$servername = "localhost"; 
$username = "apanel"; 
$password = "password"; 
$dbname = "adminpanel"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
