
<?php
$servername = "localhost";
$username = "root";
$password = ""; // Default password is often empty
$dbname = "phonestore"; // Replace with your actual database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
