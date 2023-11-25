<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <link rel="stylesheet" href="syncro.min.css">

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
    <div class="modal-dialog" role="document" style="max-width: 950px;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ratingsModalLabel">Drivers Personal Rating Scale</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div style="padding: 50px; margin: auto;">
                    <div data-stepped-bar='{"title": "Service Rating", "catagories": [ { "name": "Unsatisfactory/Very Poor", "value": 10, "color": "#ff6384" }, { "name": "Poor", "value": 50, "color": "#ff9f40" },{ "name": "Satisfactory/Fair", "value": 10, "color": "#ffcd56" }, { "name": "Good", "value": 10, "color": "#4bc0c0" }, { "name": "Excellent", "value": 5, "color": "#36a2eb" } ]}'>
                    </div>
                </div>
                <!-- Add your ratings form here -->
                <!-- Example: -->
            </div>
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
<script src="syncro.min.js"></script>
</body>
</html>
