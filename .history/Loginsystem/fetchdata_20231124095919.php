<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
   

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
<div class="modal fade" id="ratingsModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Rate Drivers Public Service</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="updateForm" action="submit_rating.php" method="post" enctype="multipart/form-data">
                    <label for="SearchDriver">Search for Driver Name</label>
                    <input type="text" name="SearchDriver" id="SearchDriver" class="form-control" placeholder="Driver's Name" required>
             
                <div id="searchResults"></div>
            </div>

 
            <div class="custom-btn-container">


            <div id="Rate" style="width: 80%; margin: auto; display:none;  margin-bottom: 20px;">
    <label for="Rate">Rate:</label>
    <textarea class="form-control mx-auto" name="Rate" id="RateTextArea" style="width: 100%;" placeholder="Rate"></textarea>
</div>
    <!-- Adjust the 'width' and 'margin' values as needed -->
    
    <!-- Buttons for rating -->
    <button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(1)">
    <i class="bi bi-star"></i> 1 Star
</button>

<button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(2)">
    <i class="bi bi-star"></i> 2 Stars
</button>

<button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(3)">
    <i class="bi bi-star"></i> 3 Stars
</button>

<button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(4)">
    <i class="bi bi-star"></i> 4 Stars
</button>

<button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(5)">
    <i class="bi bi-star"></i> 5 Stars
</button>



<script>
    function updateRating(rating) {
        document.getElementById("RateTextArea").value = rating + "";
        // You can customize this value as per your requirement
    }
</script>




<div id="commentsArea" style="display:none; width: 80%; margin: 0 auto;">
    <label for="comments">Comments:</label>
    <textarea class="form-control mx-auto" name="comments" id="comments" style="width: 100%;" placeholder="Comments"></textarea>
    <!-- Adjust the 'width' and 'margin' values as needed -->
</div>

<script>
    function showCommentsArea(rating) {
        // Show the comments area when a button is clicked
        document.getElementById('commentsArea').style.display = 'block';

        // You can use the 'rating' parameter to do something specific for each rating if needed
        // For example, you can store the rating in a variable or perform additional actions based on the rating
    }
</script>

</div>



            <div class="modal-footer">

            <button type="button" class="btn btn-secondary btn-sm m-1 rounded-pill" id="copyButton" data-toggle="modal" data-dismiss="modal">
    <i class="fas fa-times"></i> Close
</button>
<button type="button" class="btn btn-success btn-sm m-1 rounded-pill" id="submitRatingButton" data-toggle="modal">
    <i class="fas fa-check"></i> Submit Rating
</button>
</form>

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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("SearchDriver");
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
