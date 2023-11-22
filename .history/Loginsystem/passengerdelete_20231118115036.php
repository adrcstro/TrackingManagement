<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<!-- Your other HTML code -->

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
    
</body>
</html>






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
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "Report Deleted Successfully",
                        }).then(function() {
                            window.location.href = "admin.php";
                        });
                    });
                </script>';
            } else {
                echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "' . $conn->error . '",
                        });
                    });
                </script>';
            }

            $conn->close();
        }
    } else {
        // Handle case when neither 'SelectPassenger' nor 'Selectreport' is set
        echo json_encode(array('type' => 'error', 'message' => 'Invalid request.'));
    }
}
?>
