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
function resetPassword($tableName, $username, $newPassword) {
    global $conn;
    $sql = "UPDATE $tableName SET password = '$newPassword' WHERE username = '$username'";

    if ($conn->query($sql) === TRUE) {
        echo "Password reset successfully for table $tableName.";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Function to generate random code for verification
function generateVerificationCode($length = 6) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomCode = '';
    for ($i = 0; $i < $length; $i++) {
        $randomCode .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomCode;
}

// Step 1: Request verification code
if (isset($_POST['request_code'])) {
    $username = $_POST['username'];
    // Assuming the username exists in the database
    $generatedCode = generateVerificationCode();
    // Store the generated code in a session for later verification
    $_SESSION['verification_code'] = $generatedCode;
    // Send the code to the user's email or phone (not implemented in this script)
    echo "Verification code sent to the user.";
}

// Step 2: Verify code before changing the password
if (isset($_POST['verify_code'])) {
    $enteredCode = $_POST['code_input'];
    $generatedCode = $_SESSION['verification_code'];
    if ($enteredCode === $generatedCode) {
        // Proceed with password reset
        $newPassword = $_SESSION['new_password']; // Assuming the new password is stored in the session
        $tableName1 = "admintbl"; // replace with your actual table names
        $tableName2 = "driverstbl";
        $tableName3 = "passengertbl";
        resetPassword($tableName1, $username, $newPassword);
        resetPassword($tableName2, $username, $newPassword);
        resetPassword($tableName3, $username, $newPassword);
    } else {
        echo "Invalid verification code.";
    }
}
?>

<!-- Step 1: Request verification code form -->
<form method="post">
    <input type="text" name="username" placeholder="Enter Username" required><br>
    <button type="submit" name="request_code">Request Verification Code</button>
</form>

<!-- Step 2: Code verification form -->
<form method="post">
    <input type="text" name="code_input" placeholder="Enter Code" required><br>
    <button type="submit" name="verify_code">Verify Code</button>
</form>