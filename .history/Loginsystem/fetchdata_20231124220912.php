<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <style>
        .card {
            transition: transform 0.3s;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        .copy-icon {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            color: white; /* Set the icon color */
            background-color: rgba(0, 0, 0, 0.5); /* Set the background color with some transparency */
            padding: 5px; /* Adjust padding for better visibility */
            border-radius: 50%; /* Make the icon circular */
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
        .icon-container {
            position: absolute;
            bottom: 10px;
            right: 10px;
        }

        .copy-icon, .location-icon {
            cursor: pointer;
            color: white; /* Set the icon color */
            background-color: rgba(0, 0, 0, 0.5); /* Set the background color with some transparency */
            padding: 5px; /* Adjust padding for better visibility */
            border-radius: 50%; /* Make the icon circular */
            margin-bottom: 5px; /* Add margin between icons */
        }

        .location-icon {
            margin-top: 5px; /* Add margin between icons */
        }
        
    </style>
    <title>News and Events</title>
</head>
<body>

<div class="container">
        <div class="row  mt-4">
            <div class="col-md-6">
                <h1 class="text-center mt-4">Drivers Personal Rating Scale</h1>

                <form method="post" action="" class="mt-3">
    <div class="form-group">
        <label for="search">Search by Driver Name:</label>
        <div class="input-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Enter driver name">
            <div class="input-group-append">
            <button type="submit" class="btn btn-primary">
  <i class="bi bi-search"></i> Search
</button>

            </div>
        </div>
    </div>
</form>

<div class="form-group mt-2">
    <label for="maxLeft">Max for Left Axis:</label>
    <div class="input-group">
        <input type="number" name="maxLeft" id="maxLeft" value="5" class="form-control" placeholder="Enter max value">
        <div class="input-group-append">
           <button onclick="updateChart()" class="btn btn-success">
  <i class="bi bi-bar-chart"></i> Update Chart
</button>
        </div>
    </div>
</div>



            </div>

            <div class="col-md-6">
                <div style="width: 100%;"  class="mt-4">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>


<script>
        // Add your custom scripts here
        function updateChart() {
            // Your chart update logic
        }
    </script>
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
            labels: ['Very Poor', 'Poor', 'Fair', 'Good', 'Excellent'], // Ratings 1 to 5
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

                echo '<div class="col-md-4 mb-5">';
                echo '<div class="card">';
                echo '<div style="position: relative;">'; // Add a relative position for proper stacking context
                echo '<img src="uploads/' . $image . '" class="card-img-top" alt="Card Image">';

                // Displaying the icon container for copy and location icons
                echo '<div class="icon-container">';

                // Displaying the copy icon
                echo '<i class="far fa-copy copy-icon" onclick="copyToClipboard(\'driverName' . $row['id'] . '\')"></i>';

                // Displaying the location icon
                echo '<i class="fas fa-map-marker-alt location-icon"></i>';

                echo '</div>'; // Close the icon container
                echo '</div>'; // Close the relative position div
                echo '<div class="card-body text-center">';
                
                // Displaying the driver information
                echo '<h6 class="card-title">Drivers Name: <span style="font-weight:normal;" id="driverName' . $row['id'] . '">' . $drivername . '</span></h6>';
                echo '<h6 class="card-title">Vehicle Number: <span style="font-weight:normal;">' . $ViehicleNumber . '</span></h6>';
                echo '<h6 class="card-title">Plate Number: <span style="font-weight:normal;">' . $PlateNumber . '</span></h6>';
                echo '<h6 class="card-title">Phone Number: <span style="font-weight:normal;">' . $phone . '</span></h6>';
                echo '<h6 class="card-title">Home Address: <span style="font-weight:normal;">' . $home . '</span></h6>';
                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
            }
        }
            // ... Your existing PHP code ...
            ?>
        </div>
    </div>

    <!-- Add the copyToClipboard function -->
    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.innerText;
            
            // Create a temporary textarea to copy the text
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);

            // Use SweetAlert for a more visually appealing notification
            Swal.fire({
                icon: 'success',
                title: 'Copied!',
                text: 'The name has been copied to the clipboard.',
                timer: 1500, // Automatically close after 1.5 seconds
                showConfirmButton: false
            });
        }
    </script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>


</body>
</html>
