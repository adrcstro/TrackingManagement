<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Display</title>
</head>
<body>

<?php
require_once('Config.php');

if (isset($_GET['DriversPermittoOperate'])) {
    $username = $_GET['DriversPermittoOperate'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT PermittoOperate FROM driverstbl WHERE DriversPermittoOperate = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Set the appropriate content type for an image
        header('Content-Type: image/jpeg'); // Adjust the content type based on your image format

        // Output the image data
        echo $row["PermittoOperate"];
    } else {
        // If no image is found for the given username
        echo "Image not found";
    }

    $conn->close();
} else {
    // If no username is provided in the URL
    echo "Username not specified";
}
?>

</body>
</html>
