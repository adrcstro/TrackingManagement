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
?>



<!-- HTML form for resetting password -->
<form method="post" onsubmit="return validateForm()">
    <input type="text" name="username" id="username" placeholder="Enter Username" required disabled><br>
    <input type="password" name="new_password" id="new_password" placeholder="Enter New Password" required disabled><br>
    <input type="password" name="confirm_new_password" id="confirm_new_password" placeholder="Confirm New Password" required disabled><br>
    <input type="text" name="otp" id="otp" placeholder="Enter OTP" required><br>
    <button type="button" onclick="confirmOTP()">Confirm OTP</button>
    <button type="submit" name="reset_password" id="reset_button" disabled>Reset Password</button>
</form>
  
<script>
    var usernameField = document.getElementById("username");
    var newPasswordField = document.getElementById("new_password");
    var confirmNewPasswordField = document.getElementById("confirm_new_password");
    var resetButton = document.getElementById("reset_button");

    function generateOTP() {
        // Generate a random 6-digit OTP
        return Math.floor(100000 + Math.random() * 900000);
    }

    function sendOTP() {
        // Send the generated OTP to the user's email or phone number
        var otp = generateOTP();
        // Here you can write the logic to send the OTP
        alert("OTP sent: " + otp);
        return otp;
    }

    function confirmOTP() {
        var generatedOTP = sendOTP(); // Replace this with your actual logic for sending OTP
        var enteredOTP = document.getElementById("otp").value;

        if (enteredOTP === generatedOTP.toString()) {
            usernameField.disabled = false;
            newPasswordField.disabled = false;
            confirmNewPasswordField.disabled = false;
            resetButton.disabled = false;
            alert("OTP confirmed. You can now reset your password.");
        } else {
            alert("Invalid OTP. Please try again.");
        }
    }

    function validateForm() {
        var newPassword = document.getElementById("new_password").value;
        var confirmNewPassword = document.getElementById("confirm_new_password").value;

        if (newPassword !== confirmNewPassword) {
            alert("Your password Does not match.");
            return false;
        }

        return true;
    }
</script>