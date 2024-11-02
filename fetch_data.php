<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch employee details
$employee_query = "SELECT first_name, last_name, email, phone_number, designation FROM employees"; 
$employee_result = $conn->query($employee_query);
$employees = [];

if ($employee_result && $employee_result->num_rows > 0) {
    while ($row = $employee_result->fetch_assoc()) {
        $employees[] = $row;
    }
}

// Fetch food details
$food_query = "SELECT item_no, food_name, category, food_price, table_no FROM food_items"; 
$food_result = $conn->query($food_query);
$foods = [];

if ($food_result && $food_result->num_rows > 0) {
    while ($row = $food_result->fetch_assoc()) {
        $foods[] = $row;
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="style.css"> <!-- Adjust as needed -->
</head>
<body>
    <div class="employee-details">
        <h3>Employee Details</h3>
        <table>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phone Number</th>
                <th>Designation</th>
            </tr>
            <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?php echo htmlspecialchars($employee['first_name']); ?></td>
                    <td><?php echo htmlspecialchars($employee['last_name']); ?></td>
                    <td><?php echo htmlspecialchars($employee['email']); ?></td>
                    <td><?php echo htmlspecialchars($employee['phone_number']); ?></td>
                    <td><?php echo htmlspecialchars($employee['designation']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <div class="food-details">
        <h3>Food Details</h3>
        <table>
            <tr>
                <th>Item No</th>
                <th>Food Name</th>
                <th>Category</th>
                <th>Food Price</th>
                <th>Table No</th>
            </tr>
            <?php foreach ($foods as $food): ?>
                <tr>
                    <td><?php echo htmlspecialchars($food['item_no']); ?></td>
                    <td><?php echo htmlspecialchars($food['food_name']); ?></td>
                    <td><?php echo htmlspecialchars($food['category']); ?></td>
                    <td><?php echo htmlspecialchars($food['food_price']); ?></td>
                    <td><?php echo htmlspecialchars($food['table_no']); ?></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</body>
</html>
