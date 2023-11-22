<?php
require_once('Config.php');

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




if (isset($_POST['ComplaintID'])) {
        $complainid = $_POST['ComplaintID'];
        $typeofComplaint = $_POST['TypeofComplaint'];
        $dateofReport = $_POST['DateofReport'];
        $complainantName = $_POST['ComplainantName'];
        $contactNumber = $_POST['ContactNumber'];
        $address = $_POST['Address'];
        $nameofComplainee = $_POST['NameofComplainee'];

        if (!empty($complainid)) {
            $stmt = $conn->prepare("UPDATE complainttbl SET TypeofComplaint=?, DateofReport=?, ComplainantName=?, ContactNumber=?, Address=? ,NameofComplainee=? WHERE ComplaintID=?");
            $stmt->bind_param("sssssss",  $typeofComplaint, $dateofReport,  $complainantName,  $contactNumber,  $address,  $nameofComplainee,$complainid);

            if ($stmt->execute()) {
                echo "Report record updated successfully";
            } else {
                echo "Error updating complaint record: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Please select a complaint to update";
        }
    }
}

$conn->close();
?>