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
function resetPassword($tableName, $email, $newPassword) {
    global $conn;
    $sql = "UPDATE $tableName SET password = '$newPassword' WHERE email = '$email'";

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

// Usage
if (isset($_POST['reset_password'])) {
    $email = $_POST['email'];
    $newPassword = $_POST['new_password'];
    $tableName1 = "table1"; // replace with your actual table names
    $tableName2 = "table2";
    $tableName3 = "table3";
    resetPassword($tableName1, $email, $newPassword);
    resetPassword($tableName2, $email, $newPassword);
    resetPassword($tableName3, $email, $newPassword);
}

// Code verification button
if (isset($_POST['verify_code'])) {
    $enteredCode = $_POST['code_input'];
    $generatedCode = $_SESSION['verification_code'];
    if ($enteredCode === $generatedCode) {
        // Proceed with password reset
    } else {
        echo "Invalid verification code.";
    }
}
?>

<!-- HTML form for resetting password -->
<form method="post">
    <input type="email" name="email" placeholder="Enter Email" required><br>
    <input type="password" name="new_password" placeholder="Enter New Password" required><br>
    <button type="submit" name="reset_password">Reset Password</button>
</form>

<!-- Code verification form -->
<form method="post">
    <input type="text" name="code_input" placeholder="Enter Code" required><br>
    <button type="submit" name="verify_code">Verify Code</button>
</form>
