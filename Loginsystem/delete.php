 
<?php
require_once('Config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedAdmin = isset($_POST['input1']) ? $_POST['input1'] : null;
    $selectedDriver = isset($_POST['SelectDriver']) ? $_POST['SelectDriver'] : null;
    $selectedPassenger = isset($_POST['SelectPassenger']) ? $_POST['SelectPassenger'] : null;
$selectedItem = isset($_POST['itemsID']) ? $_POST['itemsID'] : null;
$selectedfounditem = isset($_POST['foundItemsID']) ? $_POST['foundItemsID'] : null;
$selectedreport = isset($_POST['Selectreport']) ? $_POST['Selectreport'] : null;
$selectednewsandevents = isset($_POST['SelectNewsID']) ? $_POST['SelectNewsID'] : null;
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

        $LostitemSql = "DELETE FROM lostitems WHERE LostItemsID = '$selectedItem'";

        $Founditemsql = "DELETE FROM founditems WHERE FoundItemsID = '$selectedfounditem'";

        $reportSql  = "DELETE FROM complainttbl WHERE ComplaintID = '$selectedreport'";
        
        $Newsavents = "DELETE FROM newsandevents WHERE NewsID= '$selectednewsandevents'";


        if ($conn->query($adminSql) === TRUE && $conn->query($driverSql) === TRUE && $conn->query($passengerSql) === TRUE && $conn->query($LostitemSql) === TRUE && $conn->query($Founditemsql) === TRUE && $conn->query($reportSql) === TRUE  && $conn->query($Newsavents) === TRUE) {
            echo json_encode(array('type' => 'success', 'message' => 'Records have been deleted.'));
        } else {
            echo json_encode(array('type' => 'error', 'message' => 'Error deleting record. Please try again.'));
        }

        $conn->close();
    }
}
?>










