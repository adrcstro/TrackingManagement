<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updated_admin = $_POST['input1'];
    $updated_username = $_POST['input2'];
    $updated_date = $_POST['datePicker'];
    $updated_password = $_POST['input3'];

    if (!empty($updated_admin)) {
        $sql = "UPDATE admintbl SET Username='$updated_username', Password='$updated_password', DateCreated='$updated_date' WHERE Admin='$updated_admin'";

        if ($conn->query($sql) === TRUE) {
            // Success message with SweetAlert
            echo '<script>
                    swal("Success", "Record updated successfully!", "success").then(function() {
                        window.location = "your_redirect_page.php"; // Redirect to another page after success
                    });
                 </script>';
        } else {
            // Error message with SweetAlert
            echo '<script>
                    swal("Error", "Error updating record: ' . $conn->error . '", "error");
                 </script>';
        }
    } else {
        // Alert using SweetAlert
        echo '<script>
                swal("Error", "Please select an admin to update", "error");
             </script>';
    }
}

$conn->close();
?>
