<?php
$servername = "localhost";
$username = "apanel"; 
$password = "password"; 
$dbname = "adminpanel"; 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>