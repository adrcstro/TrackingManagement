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

<form method="post" action="update_chart.php" onsubmit="return updateChartOnSubmit()">
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
// Default max value for left axis
var maxLeft = 5;

// Declare myChart outside the function
var myChart;

// Function to draw or update the bar chart
function drawChart() {
    // Fetch data from the server using AJAX-like request
    fetch('update_chart.php')
        .then(response => response.json())
        .then(updatedData => {
            // Prepare data for Chart.js
            var data = updatedData;

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

            // Get the canvas context
            var ctx = document.getElementById('myChart').getContext('2d');

            // Destroy the existing chart if it exists
            if (myChart) {
                myChart.destroy();
            }

            // Create a new Chart instance with updated data
            myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Unsatisfactory/Very Poor', 'Poor', 'Satisfactory/Fair', 'Good', 'Excellent'], // Ratings 1 to 5
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
        })
        .catch(error => {
            console.error('Error fetching data:', error);
        });
}

// Function to generate a random color
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Function to update the chart based on user input
function updateChart() {
    // Get value from input field
    maxLeft = parseInt(document.getElementById('maxLeft').value);

    // Redraw the chart with updated options
    drawChart();
}

// Function to update the chart on form submission
function updateChartOnSubmit() {
    // Redraw the chart with updated options
    drawChart();

    // Prevent the form from actually submitting and reloading the page
    return false;
}

// Update the chart on page load
window.onload = function() {
    drawChart();
}
</script>

</body>
</html>
