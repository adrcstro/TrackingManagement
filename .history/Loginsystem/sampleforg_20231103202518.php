<?php
require_once('Config.php');

// Database configuration

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to reset password
// ...

// Function to reset password
function resetPassword($tableName, $username, $newPassword) {
    global $conn;
    $sql = "SELECT * FROM $tableName WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        echo "Your Username is not Registered in Our System.";
    } else {
        $sql = "UPDATE $tableName SET password = '$newPassword' WHERE username = '$username'";
        if ($conn->query($sql) === TRUE) {
            echo "Password reset successfully for table $tableName.";
        } else {
            echo "Error updating record: " . $conn->error;
        }
    }
}

// ...


// Usage
if (isset($_POST['reset_password'])) {
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];
    $tableName1 = "admintbl"; // replace with your actual table names
    $tableName2 = "driverstbl";
    $tableName3 = "passengertbl";
    resetPassword($tableName1, $username, $newPassword);
    resetPassword($tableName2, $username, $newPassword);
    resetPassword($tableName3, $username, $newPassword);
}
?>

<!-- HTML form for resetting password -->
<form method="post">
    <input type="text" name="username" placeholder="Enter Username" required><br>
    <input type="password" name="new_password" placeholder="Enter New Password" required><br>
    <button type="submit" name="reset_password">Reset Password</button>
</form>
