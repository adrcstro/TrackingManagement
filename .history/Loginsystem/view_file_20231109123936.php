<?php
require_once('Config.php');


if(isset($_GET['file'])){
    $fileId = $_GET['file'];

    // Replace with your database connection details

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the file content from the database
    $sql = "SELECT file_data FROM driverstbl WHERE file_id = $fileId";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
        // Fetch the row
        $row = $result->fetch_assoc();

        // Display the file content
        echo '<pre>' . htmlspecialchars($row['file_data']) . '</pre>';
    } else {
        echo "File not found.";
    }

    $conn->close();
} else {
    echo "No file specified.";
}
?>
