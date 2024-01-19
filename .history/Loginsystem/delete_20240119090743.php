 
<?php
require_once('Config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedAdmin = isset($_POST['input1']) ? $_POST['input1'] : null;
    $selectedDriver = isset($_POST['SelectDriver']) ? $_POST['SelectDriver'] : null;
    $selectedPassenger = isset($_POST['SelectPassenger']) ? $_POST['SelectPassenger'] : null;
$selectedItem = isset($_POST['itemsID']) ? $_POST['itemsID'] : null;


    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo json_encode(array('type' => 'error', 'message' => 'Connection failed. Please try again.'));
    } else {
        // SQL to delete a record from admintbl
        $adminSql = "DELETE FROM admintbl WHERE Admin = '$selectedAdmin'";
        // SQL to delete a record from driverstbl
        $driverSql = "DELETE FROM driverstbl WHERE Username = '$selectedDriver'";

        $passengerSql = "DELETE FROM passengertbl WHERE Name = '$selectedPassenger'";

        $LostitemSql = "DELETE FROM lostitems WHERE LostItemsID = '$$selectedItem'";



        if ($conn->query($adminSql) === TRUE && $conn->query($driverSql) === TRUE && $conn->query($passengerSql) === TRUE && $conn->query($LostitemSql) === TRUE) {
            echo json_encode(array('type' => 'success', 'message' => 'Records have been deleted.'));
        } else {
            echo json_encode(array('type' => 'error', 'message' => 'Error deleting record. Please try again.'));
        }

        $conn->close();
    }
}
?>










