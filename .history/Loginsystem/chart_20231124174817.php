<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Search and Graph</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>

<h1>Rating Search and Graph</h1>

<form method="post" action="">
    <label for="search">Search by Driver Name:</label>
    <input type="text" name="search" id="search">
    <input type="submit" value="Search">
    
</form>



<!-- Input field for max value of left axis -->
<label for="maxLeft">Max for Left Axis:</label>
<input type="number" name="maxLeft" id="maxLeft" value="5">

<button onclick="updateChart()">Update Chart</button>

</div>
<div style="width: 50%; ">
    <canvas id="myChart"></canvas>
</div>


<?php
// Connect to your database
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "plate-to-place-v-tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch data from the rating table based on the search term
function fetchData($conn, $searchTerm) {
    $sql = "SELECT DriverName, Rate FROM rating WHERE DriverName LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

// Process search form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["search"];
    $data = fetchData($conn, $searchTerm);
    echo json_encode($data);
    exit(); // Stop further execution of the script after sending JSON response
} else {
    // If no search term, initialize with an empty array
    $data = array();
}



// Close the database connection
$conn->close();
?>

<script>
// Function to update the chart based on user input
// Function to update the chart data
function updateChartData() {
    // Reset the ratingCounts object
    ratingCounts = {};

    data.forEach(function (item) {
        var driverName = item.DriverName;
        var rate = item.Rate;

        if (!ratingCounts[driverName]) {
            ratingCounts[driverName] = [0, 0, 0, 0, 0];
        }

        ratingCounts[driverName][rate - 1]++;
    });

    console.log(data); // Add this line to inspect the data structure in the browser console

    // ... (rest of the code remains the same)
}

// Function to update the chart data
function updateChartData() {
    // Reset the ratingCounts object
    ratingCounts = {};

    data.forEach(function (item) {
        var driverName = item.DriverName;
        var rate = item.Rate;

        if (!ratingCounts[driverName]) {
            ratingCounts[driverName] = [0, 0, 0, 0, 0];
        }

        ratingCounts[driverName][rate - 1]++;
    });

    // Update labels and datasets
    labels = Object.keys(ratingCounts);
    datasets = [];

    labels.forEach(function (driverName) {
        var counts = ratingCounts[driverName];

        datasets.push({
            label: driverName,
            data: counts,
            backgroundColor: getRandomColor(),
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        });
    });

    // Update the chart with the new data
    myChart.data.labels = ['Unsatisfactory/Very Poor', 'Poor', 'Satisfactory/Fair', 'Good', 'Excellent'];
    myChart.data.datasets = datasets;
    myChart.update();
}
// Default max value for left axis
var maxLeft = 5;

// Declare myChart outside the function
var myChart;

// Draw the initial bar chart
drawChart();
</script>

</body>
</html>
