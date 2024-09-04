<!-- php/display_inventory.php -->

<?php
include 'db.php';

// Fetch and display inventory data
$query = "SELECT * FROM `Inventory`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Device ID</th><th>Quantity</th><th>Purchase Date</th><th>Cost Per Unit</th><th>Supplier ID</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['inventory_ID']}</td>";
        echo "<td>{$row['device_ID']}</td>";
        echo "<td>{$row['quantity']}</td>";
        echo "<td>{$row['purchase_Date']}</td>";
        echo "<td>{$row['cost_per_Unit']}</td>";
        echo "<td>{$row['supplier_ID']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No inventory data available.';
}

$conn->close();
?>
