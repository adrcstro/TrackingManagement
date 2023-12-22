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
    $selectLostItem = $_POST['itemsID'];
    $selectFoundItem = $_POST['FoundItemsID'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo json_encode(array('type' => 'error', 'message' => 'Connection failed. Please try again.'));
    } else {
        // SQL to delete a record from lostitems table
        $sqlLostItems = "DELETE FROM lostitems WHERE LostItemsID = '$selectLostItem'";

        // SQL to delete a record from founditems table
        $sqlFoundItems = "DELETE FROM founditems WHERE FoundItemsID = '$selectFoundItem'";

        // Execute delete operation on lostitems table
        if ($conn->query($sqlLostItems) === TRUE) {
            // Handle success for lostitems
        } else {
            // Handle error for lostitems
        }

        // Execute delete operation on founditems table
        if ($conn->query($sqlFoundItems) === TRUE) {
            // Handle success for founditems
        } else {
            // Handle error for founditems
        }

        // Close the database connection
        $conn->close();

        // Handle response based on success or failure
        if ($conn->query($sqlLostItems) === TRUE && $conn->query($sqlFoundItems) === TRUE) {
            echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: "success",
                        title: "Items Deleted Successfully",
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
                        text: "Deletion error: ' . $conn->error . '",
                    });
                });
              </script>';
        }
    }
}
?>


