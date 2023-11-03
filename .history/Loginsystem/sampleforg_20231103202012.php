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
function resetPassword($tableName, $oldUsername, $newUsername, $newPassword) {
    global $conn;
    $sql = "UPDATE $tableName SET username = '$newUsername', password = '$newPassword' WHERE username = '$oldUsername'";

    if ($conn->query($sql) === TRUE) {
        echo "Password reset successfully for table $tableName.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Usage
if (isset($_POST['reset_password'])) {
    $oldUsername = $_POST['old_username']; // assuming this is the old username
    $newUsername = $_POST['new_username']; // the new username
    $newPassword = $_POST['new_password'];
    $tableName1 = "admintbl"; // replace with your actual table names
    $tableName2 = "driverstbl";
    $tableName3 = "passengertbl";
    resetPassword($tableName1, $oldUsername, $newUsername, $newPassword);
    resetPassword($tableName2, $oldUsername, $newUsername, $newPassword);
    resetPassword($tableName3, $oldUsername, $newUsername, $newPassword);
}
?>

<!-- HTML form for resetting password -->
<form method="post">
    <input type="text" name="old_username" placeholder="Enter Old Username" required><br>
    <input type="text" name="new_username" placeholder="Enter New Username" required><br>
    <input type="password" name="new_password" placeholder="Enter New Password" required><br>
    <button type="submit" name="reset_password">Reset Password</button>
</form>
