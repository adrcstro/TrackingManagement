<?php
// Connect to your database
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the search term
$searchTerm = $_POST['SearchReport'];

// Fetch data from the database based on the search term
$sql = "SELECT * FROM complainttbl WHERE ComplaintID = '$searchTerm'";
$result = $conn->query($sql);

// Process the result
if ($result->num_rows > 0) {
    // Fetch data and send it to the client
    $data = $result->fetch_assoc();
    echo json_encode($data);
} else {
    echo "No data found";
}

$conn->close();
?>
