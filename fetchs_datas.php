<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'db.php';

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
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
    

    <div class="food-details">
        <h3 style="color:blue; font-size: 20px; text-align:center; border-style: solid; border-color: #92a2b1; border-radius:20px; margin-left:350px;margin-right:350px">Food Details retrieve from DB</h3>
        <table style="border-style: solid; border-color: #52fab8; ">
            <tr style="background-color:blue;">
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
