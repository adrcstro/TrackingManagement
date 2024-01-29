<?php
if (isset($_POST['driverID'])) {
    $driverID = $_POST['driverID'];

    // Database connection parameters
    $servername = "localhost"; // Replace with your server name
    $username = "root"; // Replace with your username
    $password = ""; // Replace with your password
    $dbname = "plate-to-place-v-tracking"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // File upload functionality
    $profileImageFile = $_FILES['profile']['name'];
    $profileImageTmp = $_FILES['profile']['tmp_name'];

    // SQL query to update profile image in the database
    $sql = "UPDATE driverstbl SET Profile = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('si', $profileImageFile, $driverID);

    if ($stmt->execute()) {
        move_uploaded_file($profileImageTmp, "uploads/" . $profileImageFile);
        // Display success message using SweetAlert or any other notification method
        echo json_encode(['status' => 'success', 'message' => 'Profile updated successfully']);
    } else {
        // Display error message using SweetAlert or any other notification method
        echo json_encode(['status' => 'error', 'message' => $conn->error]);
    }

    $stmt->close();
    $conn->close();
} else {
    // Display error message if driverID is not provided
    echo json_encode(['status' => 'error', 'message' => 'Driver ID not provided']);
}
?>
