<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

header('Content-Type: application/json');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updated_admin = $_POST['input1'];
    $updated_username = $_POST['input2'];
    $updated_date = $_POST['datePicker'];
    $updated_password = $_POST['input3'];

    if (!empty($updated_admin)) {
        $sql = "UPDATE admintbl SET Username='$updated_username', Password='$updated_password', DateCreated='$updated_date' WHERE Admin='$updated_admin'";

        if ($conn->query($sql) === TRUE) {
            // Success message
            $response = array('status' => 'success', 'message' => 'Record updated successfully');
        } else {
            // Error message
            $response = array('status' => 'error', 'message' => 'Error updating record: ' . $conn->error);
        }
    } else {
        // Alert using SweetAlert
        $response = array('status' => 'error', 'message' => 'Please select an admin to update');
    }

    // Return the response as JSON
    echo json_encode($response);
}

$conn->close();
?>
