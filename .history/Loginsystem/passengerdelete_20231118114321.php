<?php
require_once('Config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['SelectPassenger'])) {
        // Delete passenger record
        $selectedPassenger = $_POST['SelectPassenger'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            echo json_encode(array('type' => 'error', 'message' => 'Connection failed. Please try again.'));
        } else {
            // SQL to delete a passenger record
            $sql = "DELETE FROM passengertbl WHERE Name = '$selectedPassenger'";

            if ($conn->query($sql) === TRUE) {
                echo json_encode(array('type' => 'success', 'message' => 'Passenger record deleted successfully.'));
            } else {
                echo json_encode(array('type' => 'error', 'message' => 'Error deleting passenger record. Please try again.'));
            }

            $conn->close();
        }
    } elseif (isset($_POST['Selectreport'])) {
        // Delete complaint report
        $selectedReport = $_POST['Selectreport'];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            echo json_encode(array('type' => 'error', 'message' => 'Connection failed. Please try again.'));
        } else {
            // SQL to delete a report
            $sql = "DELETE FROM complainttbl WHERE ComplaintID= '$selectedReport'";

            if ($conn->query($sql) === TRUE) {
                echo json_encode(array('type' => 'success', 'message' => 'report deleted successfully.'));
            } else {
                echo json_encode(array('type' => 'error', 'message' => 'Error deleting Report. Please try again.'));
            }

            $conn->close();
        }
    } else {
        // Handle case when neither 'SelectPassenger' nor 'Selectreport' is set
        echo json_encode(array('type' => 'error', 'message' => 'Invalid request.'));
    }
}
?>
