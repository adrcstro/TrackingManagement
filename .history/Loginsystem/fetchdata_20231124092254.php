<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Search and Graph</title>
    <!-- Include Chart.js library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>

<h1>Rating Search and Graph</h1>

<form method="post" action="">
    <label for="search">Search by Driver Name:</label>
    <input type="text" name="search" id="search">
    <input type="submit" value="Search">
</form>

<div style="width: 80%;">
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
} else {
    // If no search term, initialize with an empty array
    $data = array();
}

// Close the database connection
$conn->close();
?>

<script>
// Prepare data for Chart.js
var data = <?php echo json_encode($data); ?>;

// Create an object to count the occurrences of each rating for each driverName
var ratingCounts = {};

data.forEach(function(item) {
    var driverName = item.DriverName;
    var rate = item.Rate;

    // Initialize the count for the driverName if not already present
    if (!ratingCounts[driverName]) {
        ratingCounts[driverName] = [0, 0, 0, 0, 0]; // Index 0 represents rating 1, index 4 represents rating 5
    }

    // Increment the count for the corresponding rating
    ratingCounts[driverName][rate - 1]++;
});

// Prepare labels and data for the chart
var labels = Object.keys(ratingCounts);
var datasets = [];

// Iterate through each driverName and create a dataset for the bar graph
labels.forEach(function(driverName) {
    var counts = ratingCounts[driverName];

    datasets.push({
        label: driverName,
        data: counts,
        backgroundColor: getRandomColor(), // Function to get a random color for each driverName
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    });
});

// Draw the bar chart
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Unsatisfactory/Very ', 'Poor', 'Satisfactory/Fair', 'Good', 'Excellent'], // Ratings 1 to 5
        datasets: datasets
    },
    options: {
        scales: {
            y: {
                beginAtZero: true,
                stepSize: 1,
                max: 5
            }
        }
    }
});

// Function to generate a random color
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}
</script>

</body>
</html>
