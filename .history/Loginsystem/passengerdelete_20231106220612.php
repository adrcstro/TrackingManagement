<?php
require_once('Config.php');
?>




<?php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedPassenger = $_POST['SelectPassenger'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo json_encode(array('type' => 'error', 'message' => 'Connection failed. Please try again.'));
    } else {
        // SQL to delete a record
        $sql = "DELETE FROM passengertbl WHERE Name = ' $selectedPassenger'";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(array('type' => 'success', 'message' => 'The selected admin has been deleted.'));
        } else {
            echo json_encode(array('type' => 'error', 'message' => 'Error deleting record. Please try again.'));
        }

        $conn->close();
    }
}
?>
