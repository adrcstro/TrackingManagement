<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rating Search and Graph</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

<h1>Rating Search and Graph</h1>

<form id="searchForm" method="post">
    <label for="search">Search by Driver Name:</label>
    <input type="text" name="search" id="search">
    <input type="submit" value="Search">
</form>

<!-- Input field for max value of left axis -->
<label for="maxLeft">Max for Left Axis:</label>
<input type="number" name="maxLeft" id="maxLeft" value="5">

<button onclick="updateChart()">Update Chart</button>

<div style="width: 50%;">
    <canvas id="myChart"></canvas>
</div>

<?php
error_reporting(E_ALL);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

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

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["search"];
    $data = fetchData($conn, $searchTerm);
    
    var_dump($data); // Debugging line

    // Output JSON-encoded data
    header('Content-Type: application/json');
    echo json_encode($data);

    exit; // Terminate the script
} else {
    $data = array();
}


$conn->close();
?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    document.getElementById('searchForm').addEventListener('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);

        fetch('', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            updateChartWithData(data);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});

function fetchDataAndUpdateChart(formData) {
    fetch('', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        console.log('Full response:', response);
        return response.json();
    })
    .then(data => {
        console.log('Received data:', data);
        updateChartWithData(data);
    })
    .catch(error => {
        console.error('Error:', error);
    });
}


var data = <?php echo json_encode($data); ?>;
var ratingCounts = {};

data.forEach(function(item) {
    var driverName = item.DriverName;
    var rate = item.Rate;

    if (!ratingCounts[driverName]) {
        ratingCounts[driverName] = [0, 0, 0, 0, 0];
    }

    ratingCounts[driverName][rate - 1]++;
});

var labels = Object.keys(ratingCounts);
var datasets = [];

labels.forEach(function(driverName) {
    var counts = ratingCounts[driverName];

    datasets.push({
        label: driverName,
        data: counts,
        backgroundColor: getRandomColor(),
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    });
});

var maxLeft = 5;
var myChart;

drawChart();

function drawChart() {
    var ctx = document.getElementById('myChart').getContext('2d');
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Unsatisfactory/Very Poor', 'Poor', 'Satisfactory/Fair', 'Good', 'Excellent'],
            datasets: datasets
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    stepSize: 1,
                    max: maxLeft
                }
            }
        }
    });
}

function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

function updateChart() {
    maxLeft = parseInt(document.getElementById('maxLeft').value);
    myChart.destroy();
    drawChart();
}

function updateChartWithData(data) {
    var ratingCounts = {};

    data.forEach(function(item) {
        var driverName = item.DriverName;
        var rate = item.Rate;

        if (!ratingCounts[driverName]) {
            ratingCounts[driverName] = [0, 0, 0, 0, 0];
        }

        ratingCounts[driverName][rate - 1]++;
    });

    var labels = Object.keys(ratingCounts);
    var datasets = [];

    labels.forEach(function(driverName) {
        var counts = ratingCounts[driverName];

        datasets.push({
            label: driverName,
            data: counts,
            backgroundColor: getRandomColor(),
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        });
    });

    myChart.data.datasets = datasets;
    myChart.options.scales.y.max = maxLeft;
    myChart.update();
}
</script>

</body>
</html>
