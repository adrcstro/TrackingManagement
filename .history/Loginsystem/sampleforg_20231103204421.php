<?php
require_once('Config.php');
?>
<?php
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
// ...

// Function to reset password
// ...

// Function to reset password
function resetPassword($tableName, $username, $newPassword) {
    global $conn;
    $sql = "SELECT * FROM $tableName WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        return false; // Return false if the username is not found
    } else {
        $sql = "UPDATE $tableName SET password = '$newPassword' WHERE username = '$username'";
        if ($conn->query($sql) === TRUE) {
            return true; // Return true if the password reset was successful
        } else {
            echo "Error updating record: " . $conn->error;
            return false; // Return false if an error occurred during the update
        }
    }
}

// Usage
// ...

if (isset($_POST['reset_password'])) {
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];
    $confirmNewPassword = $_POST['confirm_new_password'];

    if ($newPassword !== $confirmNewPassword) {
        echo "Your password Does not match.";
    } else {
        $tableName1 = "admintbl"; // replace with your actual table names
        $tableName2 = "driverstbl";
        $tableName3 = "passengertbl";
        $success1 = resetPassword($tableName1, $username, $newPassword);
        $success2 = resetPassword($tableName2, $username, $newPassword);
        $success3 = resetPassword($tableName3, $username, $newPassword);

        if ($success1 || $success2 || $success3) {
            echo "Password reset successfully for at least one table.";
        } else {
            echo "Your Username is not Registered in Our System.";
        }
    }
}
// ...




<!-- HTML form for resetting password -->
<form method="post">
    <input type="text" name="username" placeholder="Enter Username" required><br>
    <input type="password" name="new_password" placeholder="Enter New Password" required><br>
    <input type="password" name="confirm_new_password" placeholder="Confirm New Password" required><br>
    <button type="submit" name="reset_password">Reset Password</button>
</form>
