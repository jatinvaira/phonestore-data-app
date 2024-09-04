<!-- php/display_employees.php -->

<?php
include 'db.php';

// Fetch and display employee data
$query = "SELECT * FROM `Employee`";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    echo '<table>';
    echo '<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Contact Number</th><th>Email</th><th>Position</th><th>Salary</th><th>Date of Joining</th><th>Branch ID</th></tr>';
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>{$row['employee_ID']}</td>";
        echo "<td>{$row['first_name']}</td>";
        echo "<td>{$row['last_name']}</td>";
        echo "<td>{$row['contact_number']}</td>";
        echo "<td>{$row['email_address']}</td>";
        echo "<td>{$row['position']}</td>";
        echo "<td>{$row['salary']}</td>";
        echo "<td>{$row['date_of_joining']}</td>";
        echo "<td>{$row['branch_ID']}</td>";
        echo "</tr>";
    }
    echo '</table>';
} else {
    echo 'No employee data available.';
}

$conn->close();
?>
