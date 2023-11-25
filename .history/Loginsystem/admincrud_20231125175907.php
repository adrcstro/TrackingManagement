<?php
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "plate-to-place-v-tracking";
// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updated_admin = $_POST['input1'];
    $updated_username = $_POST['input2'];
    $updated_date = $_POST['datePicker'];
    $updated_password = $_POST['input3'];

    if (!empty($updated_admin)) {
        $sql = "UPDATE admintbl SET Username='$updated_username', Password='$updated_password', DateCreated='$updated_date' WHERE Admin='$updated_admin'";

        if ($conn->query($sql) === TRUE) {
            echo "<script>
            swal('Success', 'Rating submitted successfully', 'success').then((value) => {
                window.location.href = 'admin.php';
            });
         </script>";
        } else {
            echo '<script type="text/javascript">
            swal("Error", "Error updating record: ' . $conn->error . '", "error");
          </script>';
        }
    } else {
        echo '<script type="text/javascript">
        swal("Warning", "Please select an admin to update", "warning");
      </script>';
    }
      
}

// Close the database connection
$conn->close();
?>