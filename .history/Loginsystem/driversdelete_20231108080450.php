<?php
require_once('Config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['SelectDriver'])) {
        $selectedDriver = $_POST['SelectDriver'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            echo json_encode(array('type' => 'error', 'message' => 'Connection failed. Please try again.'));
        } else {
            // SQL to delete a record
            $sql = "DELETE FROM driverstbl WHERE Username = '$selectedDriver'";

            if ($conn->query($sql) === TRUE) {
                echo json_encode(array('type' => 'success', 'message' => 'The selected record has been deleted.'));
            } else {
                echo json_encode(array('type' => 'error', 'message' => 'Error deleting record. Please try again.'));
            }

            $conn->close();
        }
    } else {
        echo json_encode(array('type' => 'error', 'message' => 'No data received.'));
    }
}
?>
