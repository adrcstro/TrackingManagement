
<?php
// Replace with your database credentials
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

$id = 1; // Assuming the image you want to display has an ID of 1
$sql = "SELECT image_data, image_type FROM DriversLicense WHERE id = $id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['image_data'];
    $imageType = $row['image_type'];

    // Display the image
    header("Content-type: $imageType");
    echo $imageData;
} else {
    echo "Image not found.";
}
$conn->close();
?>
