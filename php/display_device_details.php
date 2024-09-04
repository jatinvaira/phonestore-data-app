<!-- php/display_device_details.php -->

<?php
include 'db.php';

// Fetch and display device details data
$query = "SELECT * FROM `Device_Details`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Price</th><th>Warranty Information</th><th>Technical Specifications</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['device_ID']}</td>";
        echo "<td>{$row['price']}</td>";
        echo "<td>{$row['warranty_information']}</td>";
        echo "<td>{$row['technical_specifications']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No device details data available.';
}

$conn->close();
?>
