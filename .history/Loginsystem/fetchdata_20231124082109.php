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
    // Initializing category counts
    $unsatisfactoryCount = 0;
    $poorCount = 0;
    $satisfactoryCount = 0;
    $goodCount = 0;
    $excellentCount = 0;

    // Loop through the rows and update category counts
    while ($row = $result->fetch_assoc()) {
        switch ($row['value']) {
            case 1:
                $unsatisfactoryCount++;
                break;
            case 2:
                $poorCount++;
                break;
            case 3:
                $satisfactoryCount++;
                break;
            case 4:
                $goodCount++;
                break;
            case 5:
                $excellentCount++;
                break;
            default:
                // Handle other values if necessary
                break;
        }
    }

    // Creating JSON structure based on the category counts
    $json_data = '{
        "title": "Service Rating",
        "categories": [
            {"name": "Unsatisfactory/Very Poor", "value": ' . $unsatisfactoryCount . ', "color": "#ff6384"},
            {"name": "Poor", "value": ' . $poorCount . ', "color": "#ff9f40"},
            {"name": "Satisfactory/Fair", "value": ' . $satisfactoryCount . ', "color": "#ffcd56"},
            {"name": "Good", "value": ' . $goodCount . ', "color": "#4bc0c0"},
            {"name": "Excellent", "value": ' . $excellentCount . ', "color": "#36a2eb"}
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
