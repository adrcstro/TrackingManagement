<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        .card {
            transition: transform 0.3s;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 100%;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-img-top {
            object-fit: cover;
            height: 250px;
            width: 100%;
        }

        .card-body {
            padding-bottom: 40px; /* Adjust padding to accommodate the button */
        }

        .card-title {
            height: -3rem; /* Limit the height of the title */
            overflow: hidden;
        }

        .card-text {
            max-height: 6rem; /* Limit the height of the description */
            overflow: hidden;
        }

        .read-more-modal {
            max-width: 800px; /* Adjust the width of the modal */
        }
    </style>
    <title>News and Events</title>
</head>
<body>

<!-- Ratings Modal -->
<div class="modal fade" id="ratingsModal" tabindex="-1" role="dialog" aria-labelledby="ratingsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width: 800px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ratingsModalLabel">Drivers Personal Rating Scale</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form method="post" action="">
    <label for="search">Search by Driver Name:</label>
    <input type="text" name="search" id="search">
    <input type="submit" value="Search">
    
</form>



<!-- Input field for max value of left axis -->
<label for="maxLeft">Max for Left Axis:</label>
<input type="number" name="maxLeft" id="maxLeft" value="5">

<button onclick="updateChart()">Update Chart</button>
<div id="searchResults"></div>
<div style="width: 50%;">
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

// Default max value for left axis
var maxLeft = 5;

// Declare myChart outside the function
var myChart;

// Draw the initial bar chart
drawChart();

// Function to draw or update the bar chart
function drawChart() {
    var ctx = document.getElementById('myChart').getContext('2d');
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

    // Destroy the existing chart and redraw with updated options
    myChart.destroy();
    drawChart();
}
</script>















            </div>
        </div>
    </div>



<!-- Comments Modal -->
<div class="modal fade" id="commentsModal" tabindex="-1" role="dialog" aria-labelledby="commentsModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="commentsModalLabel">Comments</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Add your comments form here -->
                <!-- Example: -->
              
            </div>
        </div>
    </div>
</div>



<div class="container mt-5 mb-5">
    <div class="row">
    <?php
        // Replace these with your actual database connection details
        $host = "localhost";
        $username = "root";
        $password = "";
        $database = "plate-to-place-v-tracking";

        // Create a database connection
        $your_db_connection = mysqli_connect($host, $username, $password, $database);

        // Check the connection
        if (!$your_db_connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch data from the "newsandevents" table
        $query = "SELECT id, Username, Age, Password, PermittoOperate,PhoneNumber,HomeAddress FROM driverstbl";
        $result = mysqli_query($your_db_connection, $query);

        // Check if the query was successful
        if ($result) {
            // Fetch data row by row
            while ($row = mysqli_fetch_assoc($result)) {
                $drivername = $row['Username'];
                $ViehicleNumber = $row['Age'];
                $PlateNumber = $row['Password'];
                $image = $row['PermittoOperate'];
                $phone = $row['PhoneNumber'];
                $home = $row['HomeAddress'];

                // Display data in Bootstrap cards
                echo '<div class="col-md-4 mb-5">';
                echo '<div class="card">';
                echo '<img src="uploads/' . $image . '" class="card-img-top" alt="Card Image">';
                echo '<div class="card-body text-center">';

                // Displaying the driver information
                // Existing code

echo '<h6 class="card-title">Drivers Name: <span style="font-weight:normal;">' . $drivername . '</span></h6>';
echo '<h6 class="card-title">Vehicle Number: <span style="font-weight:normal;">' . $ViehicleNumber . '</span></h6>';
echo '<h6 class="card-title">Plate Number: <span style="font-weight:normal;">' . $PlateNumber . '</span></h6>';
echo '<h6 class="card-title">Phone Number: <span style="font-weight:normal;">' . $phone . '</span></h6>';
echo '<h6 class="card-title">Home Address: <span style="font-weight:normal;">' . $home . '</span></h6>';








echo '<button class="btn btn-primary rounded-pill mt-3 mr-3" data-toggle="modal" data-target="#ratingsModal"><i class="fas fa-star"></i> Ratings</button>';
echo '<button class="btn btn-secondary rounded-pill mt-3" data-toggle="modal" data-target="#commentsModal"><i class="fas fa-comments"></i> Comments</button>';


                echo '</div>';
                echo '</div>';
                echo '</div>';
            }

            // Free result set
            mysqli_free_result($result);
        } else {
            // Handle the error if the query fails
            echo "Error: " . mysqli_error($your_db_connection);
        }

        // Close the database connection
        mysqli_close($your_db_connection);
    ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>
<script>
    // Initialize Bootstrap tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("search");
        const searchResults = document.getElementById("searchResults");

        searchInput.addEventListener("input", function() {
            const searchText = searchInput.value.toLowerCase();
            if (searchText.length > 0) {
                fetch(`fetchdatadetails.php?search=${searchText}`)
                    .then(response => response.text())
                    .then(data => {
                        searchResults.innerHTML = data;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            } else {
                searchResults.innerHTML = "";
            }
        });
    });
</script>
</body>
</html>
