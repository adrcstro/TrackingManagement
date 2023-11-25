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



<script>
 
function searchAndUpdateChart() {
    var searchTerm = document.getElementById('search').value;

    // Use AJAX to submit the form data to the server
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            // Parse the JSON response from the server
            var newData = JSON.parse(xhr.responseText);

            // Update the chart with the new data
            updateChartWithData(newData);
        }
    };

    // Prepare and send the AJAX request
    xhr.open('POST', 'your_php_script.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xhr.send('search=' + searchTerm);
}

function updateChartWithData(newData) {
    // Update the 'data' variable with the new data
    data = newData;

    // Re-draw the chart with the updated data
    myChart.destroy();
    drawChart();
}


</script>

</body>
</html>
