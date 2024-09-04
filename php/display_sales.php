<!-- php/display_sales.php -->

<?php
include 'db.php';

// Fetch and display sale data
$query = "SELECT * FROM `Sale`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Customer ID</th><th>Employee ID</th><th>Device ID</th><th>Plan ID</th><th>Sale Date</th><th>Total Price</th><th>Payment Method</th><th>Contract ID</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['Sale_ID']}</td>";
        echo "<td>{$row['Customer_ID']}</td>";
        echo "<td>{$row['Employee_ID']}</td>";
        echo "<td>{$row['Device_ID']}</td>";
        echo "<td>{$row['Plan_ID']}</td>";
        echo "<td>{$row['Sale_Date']}</td>";
        echo "<td>{$row['Total_Price']}</td>";
        echo "<td>{$row['Payment_Method']}</td>";
        echo "<td>{$row['Contract_ID']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No sale data available.';
}

$conn->close();
?>
