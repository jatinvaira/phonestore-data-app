<!-- php/display_suppliers.php -->

<?php
include 'db.php';

// Fetch and display supplier data
$query = "SELECT * FROM `Supplier`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Supplier Information</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['supplier_ID']}</td>";
        echo "<td>{$row['supplier_information']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No supplier data available.';
}

$conn->close();
?>
