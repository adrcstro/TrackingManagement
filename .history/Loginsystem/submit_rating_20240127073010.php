<?php
// Replace with your actual database credentials
require_once('Config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$driverName = $_POST['SearchDriver'];
$rate = $_POST['Rate'];
$Comments = $_POST['comments'];

// Use prepared statements to prevent SQL injection
$stmt = $conn->prepare("INSERT INTO rating (DriverName, Rate, Comments) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $driverName, $rate, $Comments);

// Execute the prepared statement
if ($stmt->execute()) {
    // Rating submitted successfully
    echo "Rating submitted successfully";
} else {
    // Error occurred
    echo "Error: " . $stmt->error;
}

// Close the prepared statement and connection
$stmt->close();
$conn->close();
