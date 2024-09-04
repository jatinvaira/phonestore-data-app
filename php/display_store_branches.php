<!-- php/display_store_branches.php -->

<?php
include 'db.php';

// Fetch and display store branch data
$query = "SELECT * FROM `Store_Branch`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Branch Name</th><th>Location</th><th>Contact Number</th><th>Manager ID</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['branch_ID']}</td>";
        echo "<td>{$row['branch_name']}</td>";
        echo "<td>{$row['location']}</td>";
        echo "<td>{$row['contact_number']}</td>";
        echo "<td>{$row['manager_ID']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No store branch data available.';
}

$conn->close();
?>
