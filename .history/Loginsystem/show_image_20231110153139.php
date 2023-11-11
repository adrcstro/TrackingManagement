<?php
require_once('Config.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT PermittoOperate FROM driverstbl WHERE ID = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();

        // Set the appropriate content type for an image
        header('Content-Type: image/jpeg'); // Adjust the content type based on your image format

        // Output the image data
        echo $row["PermittoOperate"];
    }

    $conn->close();
}
?>
