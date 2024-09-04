<!-- php/display_contracts.php -->

<?php
include 'db.php';

// Fetch and display contract data
$query = "SELECT * FROM `Contract`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Contract Duration</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['Contract_ID']}</td>";
        echo "<td>{$row['Contract_Duration']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No contract data available.';
}

$conn->close();
?>
