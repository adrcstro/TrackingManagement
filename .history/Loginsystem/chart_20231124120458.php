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

<form id="searchForm">
    <label for="search">Search by Driver Name:</label>
    <input type="text" name="search" id="search">
    <input type="button" value="Search" onclick="searchAndUpdateChart()">
</form>

<!-- Input field for max value of left axis -->
<label for="maxLeft">Max for Left Axis:</label>
<input type="number" name="maxLeft" id="maxLeft" value="5">

<button onclick="updateChart()">Update Chart</button>

</div>
<div style="width: 50%;">
    <canvas id="myChart"></canvas>
</div>

<?php
// PHP code remains unchanged
?>

<script>
// Prepare data for Chart.js
var data = <?php echo json_encode($data); ?>;

// Create an object to count the occurrences of each rating for each driverName
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

function searchAndUpdateChart() {
    var searchTerm = document.getElementById('search').value;

    // Check if a search term is provided
    if (searchTerm.trim() === '') {
        alert('Please enter a search term.');
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var newData = JSON.parse(xhr.responseText);
            updateChartWithData(newData);
        }
    };

    xhr.open("POST", "", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("search=" + searchTerm);
}

function updateChartWithData(newData) {
    data = newData;
    myChart.destroy();
    drawChart();
}
</script>

</body>
</html>
