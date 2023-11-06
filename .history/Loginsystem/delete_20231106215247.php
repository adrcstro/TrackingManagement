<?php
require_once('Config.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedItem = $_POST['input1'];
    $selectedType = $_POST['input2']; // Assuming input2 contains the label type

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo json_encode(array('type' => 'error', 'message' => 'Connection failed. Please try again.'));
    } else {
        // SQL to delete a record based on the type
        if ($selectedType === 'passenger') {
            $sql = "DELETE FROM passengertbl WHERE Name = '$selectedItem'";
        } elseif ($selectedType === 'admin') {
            $sql = "DELETE FROM admintbl WHERE Admin = '$selectedItem'";
        } else {
            echo json_encode(array('type' => 'error', 'message' => 'Invalid type. Please try again.'));
            exit;
        }

        if ($conn->query($sql) === TRUE) {
            echo json_encode(array('type' => 'success', 'message' => 'The selected record has been deleted.'));
        } else {
            echo json_encode(array('type' => 'error', 'message' => 'Error deleting record. Please try again.'));
        }

        $conn->close();
    }
}
?>
