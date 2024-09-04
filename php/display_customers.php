<!-- php/display_customers.php -->

<?php
include 'db.php';

// Fetch and display customer data
$query = "SELECT * FROM `Customer`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Contact Number</th><th>Email</th><th>DOB</th><th>Gender</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['customer_ID']}</td>";
        echo "<td>{$row['first_name']}</td>";
        echo "<td>{$row['last_name']}</td>";
        echo "<td>{$row['contact_number']}</td>";
        echo "<td>{$row['email_address']}</td>";
        echo "<td>{$row['date_of_birth']}</td>";
        echo "<td>{$row['gender']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No customer data available.';
}

$conn->close();
?>
