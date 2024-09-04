<!-- php/display_sale_devices.php -->

<?php
include 'db.php';

// Fetch and display sale device data
$query = "SELECT * FROM `Sale_Device`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>Sale ID</th><th>Device ID</th><th>Plan ID</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['sale_ID']}</td>";
        echo "<td>{$row['device_ID']}</td>";
        echo "<td>{$row['Plan_ID']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No sale device data available.';
}

$conn->close();
?>
