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

<form id="searchForm">
    <label for="search">Search by Driver Name:</label>
    <input type="text" name="search" id="search">
    <input type="button" value="Search" onclick="searchAndUpdateChart()">
</form>

<label for="maxLeft">Max for Left Axis:</label>
<input type="number" name="maxLeft" id="maxLeft" value="5">
<button onclick="updateChart()">Update Chart</button>

<div style="width: 50%;">
    <canvas id="myChart"></canvas>
</div>

<?php
// PHP code remains the same
?>

<script>
var myChart;

function drawChart(data, maxLeft) {
    var ctx = document.getElementById('myChart').getContext('2d');
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Unsatisfactory/Very Poor', 'Poor', 'Satisfactory/Fair', 'Good', 'Excellent'],
            datasets: data
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
    var maxLeft = parseInt(document.getElementById('maxLeft').value);
    myChart.destroy();
    drawChart([], maxLeft); // Pass an empty dataset initially
}

function searchAndUpdateChart() {
    var searchTerm = document.getElementById('search').value;
    
    // Make an AJAX request to fetch data based on the search term
    $.ajax({
        type: 'POST',
        url: 'fetch_data.php', // Replace with the actual path to your PHP script for fetching data
        data: {search: searchTerm},
        success: function(response) {
            var data = processFetchedData(JSON.parse(response));
            updateChart(data, parseInt(document.getElementById('maxLeft').value));
        },
        error: function(xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
}

function processFetchedData(data) {
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

    return datasets;
}

drawChart([], 5); // Initial drawing of the chart with empty data and maxLeft = 5
</script>

</body>
</html>
