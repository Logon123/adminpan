<?php
$servername = "localhost"; 
$username = "apanel"; 
$password = "password"; 
$dbname = "adminpanel"; 

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO employees (first_name, last_name, email, phone_number, designation, types, restaurant) VALUES (?, ?, ?, ?, ?, ?, ?)");
$stmt->bind_param("sssssss", $first_name, $last_name, $email, $phone_number, $designation, $types, $restaurant);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$designation = $_POST['designation'];
$types = $_POST['types'];
$restaurant = $_POST['restaurant'];

if ($stmt->execute()) {
    sleep(3);
    echo "New record created successfully";
    header("Location: staff.php");
} else {
    echo "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>
