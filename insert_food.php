<?php
// Database credentials
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
// Prepare and bind
$stmt = $conn->prepare("INSERT INTO food_items (item_no, food_name, category, food_price, table_no) VALUES ( ?, ?, ?, ?, ?)");
$stmt->bind_param("sssss", $item_no, $foodname, $category, $food_price, $table_no);

// Set parameters and execute
$item_no = $_POST['fodno'];
$foodname = $_POST['fodname'];
$category = $_POST['category'];
$food_price = $_POST['fodprice'];
$table_no = $_POST['tableno'];

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