<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Permit to Operate Display</title>
</head>
<body>

<?php
// Database connection details
require_once('Config.php');

// Create a database connection
$conn = new mysqli($db_host, $db_user, $db_password, $db_name);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch and display the PermittoOperate column from the driverstbl table
$sql = "SELECT PermittoOperate FROM driverstbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $permitToOperate = $row['PermittoOperate'];

        // Display the PermittoOperate value
        echo "<p>Permit to Operate: $permitToOperate</p>";
    }
} else {
    echo "No data found in the driverstbl table.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>
