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
    <input type="submit" value="Search">
</form>

<!-- Input field for max value of left axis -->
<label for="maxLeft">Max for Left Axis:</label>
<input type="number" name="maxLeft" id="maxLeft" value="5">

<button onclick="updateChart()">Update Chart</button>

<div style="width: 50%;">
    <canvas id="myChart"></canvas>
</div>

<script>
$(document).ready(function () {
    // Function to update the chart using AJAX
    function updateChartAjax() {
        // Get the value from the input field
        var searchTerm = $('#search').val();

        // Send an AJAX request to the server
        $.ajax({
            type: 'POST',
            url: 'update_chart.php', // Replace with the actual server-side script
            data: { search: searchTerm },
            success: function (response) {
                // Parse the JSON response
                var data = JSON.parse(response);

                // Update the chart data
                updateChartData(data);

                // Update the chart without reloading the page
                myChart.update();
            },
            error: function (error) {
                console.log('Error updating chart:', error);
            }
        });
    }

    // Bind the function to the form submission
    $('#searchForm').submit(function (e) {
        e.preventDefault(); // Prevent the default form submission
        updateChartAjax(); // Call the update function
    });
});

// Function to update the chart data
function updateChartData(data) {
    var ratingCounts = {};

    data.forEach(function (item) {
        var driverName = item.DriverName;
        var rate = item.Rate;

        if (!ratingCounts[driverName]) {
            ratingCounts[driverName] = [0, 0, 0, 0, 0];
        }

        ratingCounts[driverName][rate - 1]++;
    });

    var labels = Object.keys(ratingCounts);
    var datasets = [];

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

    // Update the chart data
    myChart.data.labels = ['Unsatisfactory/Very Poor', 'Poor', 'Satisfactory/Fair', 'Good', 'Excellent'];
    myChart.data.datasets = datasets;

    // Redraw the chart with the updated data
    myChart.update();
}

// ... (rest of your existing JavaScript code)

</script>

</body>
</html>
