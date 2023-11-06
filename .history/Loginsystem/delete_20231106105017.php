<?php
require_once('Config.php');
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedAdmin = $_POST['input1'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL to delete the entire row
    $sql = "DELETE FROM admintbl WHERE Admin = '$selectedAdmin'";

    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>