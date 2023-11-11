<?php
// Database connection details
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'plate-to-place-v-tracking';

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if a file is submitted through a form
if ($_FILES['permitToOperateFile']['error'] == UPLOAD_ERR_OK) {
    // Get the file data
    $permitToOperateFile = file_get_contents($_FILES['permitToOperateFile']['tmp_name']);

    // Insert the file data into the database
    $sql = "INSERT INTO driverstbl (PermittoOperate) VALUES (?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("b", $permitToOperateFile); // "b" represents a blob

    if ($stmt->execute()) {
        echo "Image uploaded and stored in the database.";
    } else {
        echo "Error uploading image: " . $stmt->error;
    }

    $stmt->close();
} else {
    echo "No file uploaded or an error occurred.";
}

// Close the database connection
$conn->close();
?>
