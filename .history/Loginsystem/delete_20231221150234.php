 
<?php
require_once('Config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedAdmin = isset($_POST['input1']) ? $_POST['input1'] : null;
    $selectedDriver = isset($_POST['SelectDriver']) ? $_POST['SelectDriver'] : null;

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo json_encode(array('type' => 'error', 'message' => 'Connection failed. Please try again.'));
    } else {
        // SQL to delete a record
        $sql = "DELETE FROM admintbl WHERE Admin = '$selectedAdmin'";

        if ($conn->query($sql) === TRUE) {
            echo json_encode(array('type' => 'success', 'message' => 'The selected admin has been deleted.'));
        } else {
            echo json_encode(array('type' => 'error', 'message' => 'Error deleting record. Please try again.'));
        }

       
    }


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






}
?>









