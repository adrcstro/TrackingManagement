<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="syncro.min.css">
</head>
<body>

<?php
// Assuming you have a database connection established
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the database
$sql = "SELECT * FROM rating";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetching data from the first row assuming one row of data
    $row = $result->fetch_assoc();

    // Creating JSON structure based on the database values
    $json_data = '{
        "title": "Service Rating",
        "categories": [
            {"name": "Unsatisfactory/Very Poor", "value": ' . $row['Unsatisfactory'] . ', "color": "#ff6384"},
            {"name": "Poor", "value": ' . $row['Poor'] . ', "color": "#ff9f40"},
            {"name": "Satisfactory/Fair", "value": ' . $row['Satisfactory'] . ', "color": "#ffcd56"},
            {"name": "Good", "value": ' . $row['Good'] . ', "color": "#4bc0c0"},
            {"name": "Excellent", "value": ' . $row['Excellent'] . ', "color": "#36a2eb"}
        ]
    }';

    // Outputting the dynamic JSON structure
    echo '<div style="padding: 50px;">
            <div data-stepped-bar=\'' . $json_data . '\'>
            </div>
        </div>';
} else {
    echo "No data found in the database.";
}

$conn->close();
?>

<script src="syncro.min.js"></script>
</body>
</html>
