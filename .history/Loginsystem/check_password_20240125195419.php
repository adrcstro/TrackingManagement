<?php
// Assuming you have a database connection
// Adjust the database connection details accordingly
require_once('Config.php');

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the password from the admin table
$sql = "SELECT Password FROM admintbl WHERE Id  = 1"; // Assuming the admin's ID is 1
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $correctPassword = $row["Password"];
} else {
    $correctPassword = ""; // Set a default value if no password is found
}

// Get the entered password from the POST request
$enteredPassword = isset($_POST['password']) ? $_POST['password'] : "";

// Validate the password
$success = password_verify($enteredPassword, $correctPassword);

// Return JSON response
header('Content-Type: application/json');
echo json_encode(['success' => $success, 'attempts' => max(0, 3 - $_SESSION['errorAttempts'])]);

$conn->close();
?>
