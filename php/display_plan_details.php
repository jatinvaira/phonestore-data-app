<!-- php/display_plan_details.php -->

<?php
include 'db.php';

// Fetch and display plan details data
$query = "SELECT * FROM `Plan_Details`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>Data Limit</th><th>Minutes Limit</th><th>SMS Limit</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['plan_ID']}</td>";
        echo "<td>{$row['data_limit']}</td>";
        echo "<td>{$row['minutes_limit']}</td>";
        echo "<td>{$row['sms_limit']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No plan details data available.';
}

$conn->close();
?>
