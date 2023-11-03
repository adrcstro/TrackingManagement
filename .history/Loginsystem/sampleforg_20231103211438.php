<?php
require_once('Config.php');

// Add this function to generate a random OTP
function generateOTP() {
    $otpLength = 6;
    $characters = '0123456789';
    $otp = '';
    for ($i = 0; $i < $otpLength; $i++) {
        $otp .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $otp;
}

// Add this function to store the generated OTP in the database
function storeOTP($tableName, $username, $otp) {
    global $conn;
    $sql = "UPDATE $tableName SET otp = '$otp' WHERE username = '$username'";
    if ($conn->query($sql) === TRUE) {
        return true; // Return true if the OTP is stored successfully
    } else {
        echo "Error updating record: " . $conn->error;
        return false; // Return false if an error occurred during the update
    }
}

// Add this function to verify the OTP
function verifyOTP($tableName, $username, $otp) {
    global $conn;
    $sql = "SELECT * FROM $tableName WHERE username = '$username' AND otp = '$otp'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return true; // Return true if the OTP is verified
    } else {
        return false; // Return false if the OTP is not verified
    }
}

// Usage
// ...

if (isset($_POST['generate_otp'])) {
    $username = $_POST['username'];
    $otp = generateOTP();
    $tableName1 = "admintbl"; // replace with your actual table names
    $tableName2 = "driverstbl";
    $tableName3 = "passengertbl";
    $success1 = storeOTP($tableName1, $username, $otp);
    $success2 = storeOTP($tableName2, $username, $otp);
    $success3 = storeOTP($tableName3, $username, $otp);

    if ($success1 || $success2 || $success3) {
        echo "OTP generated and sent to the registered mobile number.";
    } else {
        echo "Failed to generate OTP. Please try again later.";
    }
}

if (isset($_POST['submit_otp'])) {
    $username = $_POST['username'];
    $userOTP = $_POST['user_otp'];
    $tableName1 = "admintbl"; // replace with your actual table names
    $tableName2 = "driverstbl";
    $tableName3 = "passengertbl";
    $isOTPVerified1 = verifyOTP($tableName1, $username, $userOTP);
    $isOTPVerified2 = verifyOTP($tableName2, $username, $userOTP);
    $isOTPVerified3 = verifyOTP($tableName3, $username, $userOTP);

    if ($isOTPVerified1 || $isOTPVerified2 || $isOTPVerified3) {
        echo "OTP verified.";
    } else {
        echo "OTP not verified. Please try again.";
    }
}
// ...
?>

<!-- HTML form for generating and submitting OTP -->
<form method="post">
    <input type="text" name="username" placeholder="Enter Username" required><br>
    <button type="submit" name="generate_otp">Generate OTP</button>
</form>

<form method="post">
    <input type="text" name="username" placeholder="Enter Username" required><br>
    <input type="text" name="user_otp" placeholder="Enter OTP" required><br>
    <button type="submit" name="submit_otp">Submit OTP</button>
</form>
