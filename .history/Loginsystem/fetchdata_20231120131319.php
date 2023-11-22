<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet"> <!-- Font Awesome -->
    <style>
        .card {
            height: 100%;
            transition: transform 0.3s;
            position: relative;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add box shadow for a subtle shadow effect */
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Enlarge the shadow on hover */
        }

        .card-img-top {
            object-fit: cover; /* Ensure the image covers the entire card */
            height: 200px; /* Set a fixed height for the image */
            width: 100%; /* Set a fixed width for the image */
        }

        .card-body {
            height: 200px; /* Set a fixed height for the card body */
            overflow: hidden; /* Hide overflow content */
        }

        .read-more-btn {
            position: absolute;
            bottom: 10px; /* Adjust the bottom margin */
            left: 50%;
            transform: translateX(-50%);
            background: #007bff;
            color: #ffffff;
            border: none;
            padding: 8px 16px;
            cursor: pointer;
            transition: background 0.3s;
        }

        .read-more-btn:hover {
            background: #0056b3;
        }
    </style>
    <title>News and Events</title>
</head>
<body>

<div class="container mt-5">
    <div class="row">
        <!-- PHP code... -->

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
        $query = "SELECT Header, Date, Body, Image FROM newsandevents";
        $result = mysqli_query($your_db_connection, $query);

        // Check if the query was successful
        if ($result) {
            // Fetch data row by row
            while ($row = mysqli_fetch_assoc($result)) {
                $header = $row['Header'];
                $date = $row['Date'];
                $body = $row['Body'];
                $image = $row['Image'];

                // Display data in Bootstrap cards
                echo '<div class="col-md-4 mb-4">';
                echo '<div class="card">';
                echo '<img src="uploads/' . $image . '" class="card-img-top" alt="Card Image">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $header . '</h5>';
                echo '<p class="card-text"><small class="text-muted">' . $date . '</small></p>';
                echo '<p class="card-text">' . $body . '</p>';
               
                echo '<button class="btn read-more-btn" data-toggle="tooltip" data-placement="top" title="Read More">Read More</button>';
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

<script src="https://kit.fontawesome.com/your-font-awesome-kit-id.js" crossorigin="anonymous"></script>
<script>
    // Initialize Bootstrap tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>
</body>
</html>






