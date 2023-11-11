<?php
// Replace these variables with your actual database credentials
require_once('Config.php');


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Assuming you have a variable $driverId representing the ID of the driver whose image you want to fetch
$driverId = 1; // Replace with the actual driver ID

// Query to fetch the image from the database
$sql = "SELECT PermittoOperate FROM driverstbl WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $driverId);
$stmt->execute();
$stmt->bind_result($imageData);
$stmt->fetch();
$stmt->close();

// Display the image on the website
header("Content-Type: image/jpeg"); // Change the content type based on your image type (e.g., image/png for PNG images)
echo $imageData;

// Close the database connection
$conn->close();
?>
