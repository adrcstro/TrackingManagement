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
    // Ensure the key is set before accessing it
    $selectLostItem = isset($_POST['itemsID']) ? $_POST['itemsID'] : null;
    $selectFoundItem = isset($_POST['FoundItemsID']) ? $_POST['FoundItemsID'] : null;

    // Initialize connection variable and error message
    $conn = null;
    $errorMessage = '';

    // Check connection
    try {
        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            throw new Exception('Connection failed. Please try again.');
        }

        // Initialize variables to track success or failure
        $successLostItems = false;
        $successFoundItems = false;

        // SQL to delete a record from lostitems table
        if ($selectLostItem !== null) {
            $sqlLostItems = "DELETE FROM lostitems WHERE LostItemsID = '$selectLostItem'";
            $successLostItems = $conn->query($sqlLostItems);

            // Store the error message only if there is an actual error
            if (!$successLostItems) {
                $errorMessage = $conn->error;
            }
        }

        // SQL to delete a record from founditems table
        if ($selectFoundItem !== null) {
            $sqlFoundItems = "DELETE FROM founditems WHERE FoundItemsID = '$selectFoundItem'";
            $successFoundItems = $conn->query($sqlFoundItems);

            // Store the error message only if there is an actual error
            if (!$successFoundItems) {
                $errorMessage = $conn->error;
            }
        }

        // Handle response based on success or failure
        if ($successLostItems && $successFoundItems) {
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
                        text: "Deletion error: ' . $errorMessage . '",
                    });
                });
              </script>';
        }
    } catch (Exception $e) {
        echo json_encode(array('type' => 'error', 'message' => $e->getMessage()));
    } finally {
        // Close the database connection if it's still open
        if ($conn !== null) {
            $conn->close();
        }
    }
}
?>
