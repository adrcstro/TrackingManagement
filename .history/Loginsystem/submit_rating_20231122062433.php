<?php
// Replace with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

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

// Insert data into the ratings table
$sql = "INSERT INTO rating (DriverName, Rate, Comments) VALUES ('$driverName', '$rate', '$Comments')";

if ($conn->query($sql) === TRUE) {
    echo "Rating submitted successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
