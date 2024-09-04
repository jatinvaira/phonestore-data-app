<!-- php/display_addresses.php -->

<?php
include 'db.php';

// Fetch and display address data
$query = "SELECT * FROM `Address`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Address</th><th>Customer ID</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['Address_ID']}</td>";
        echo "<td>{$row['Address']}</td>";
        echo "<td>{$row['customer_ID']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No address data available.';
}

$conn->close();
?>
