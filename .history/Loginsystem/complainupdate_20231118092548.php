<?php
require_once('Config.php');

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['ComplaintID'])) {
        $typeofComplaint = $_POST['TypeofComplaint'];
        $dateofReport = $_POST['DateofReport'];
        $complainantName = $_POST['ComplainantName'];
        $contactNumber = $_POST['ContactNumber'];
        $address = $_POST['Address'];
        $nameofComplainee = $_POST['NameofComplainee'];

        if (!empty($selectedPassenger)) {
            // Prepare and bind the SQL statement for the passengers table
            $stmt = $conn->prepare("UPDATE complainttbl SET TypeofComplaint=?, DateofReport=?, ComplainantName=?, ContactNumber=?, UsernameAddress=? ,NameofComplainee=? WHERE Name=?");
            $stmt->bind_param("ssssss",  $typeofComplaint, $dateofReport,  $complainantName,  $contactNumber,  $address,  $nameofComplainee);

            if ($stmt->execute()) {
                echo "Passenger record updated successfully";
            } else {
                echo "Error updating passenger record: " . $stmt->error;
            }

            // Close the prepared statement
            $stmt->close();
        } else {
            echo "Please select a passenger to update";
        }
    }
}
    $conn->close();
    ?>
    