<!-- php/display_devices.php -->

<?php
include 'db.php';

// Fetch and display device data
$query = "SELECT * FROM `Device`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Device Name</th><th>Brand</th><th>Model</th><th>Manufacturer</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['device_ID']}</td>";
        echo "<td>{$row['device_name']}</td>";
        echo "<td>{$row['brand']}</td>";
        echo "<td>{$row['model']}</td>";
        echo "<td>{$row['manufacturer']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No device data available.';
}

$conn->close();
?>
