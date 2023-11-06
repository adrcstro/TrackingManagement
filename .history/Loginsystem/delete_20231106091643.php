<?php
require_once('Config.php');

?>




<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['input1'])) {
        $selectedAdmin = $_POST['input1'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind
        $stmt = $conn->prepare("DELETE FROM admintbl WHERE Admin = ?");
        $stmt->bind_param("s", $selectedAdmin);

        // Execute the statement
        if ($stmt->execute() === TRUE) {
            echo "success";
        } else {
            echo "error";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "error";
    }
}
?>
