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
        echo '<div class="card">';
        echo '<img src="uploads/' . $image . '" class="card-img-top" alt="Card Image">';
        echo '<div class="card-body">';
        echo '<h5 class="card-title">' . $header . '</h5>';
        echo '<p class="card-text">' . $body . '</p>';
        echo '<p class="card-text"><small class="text-muted">' . $date . '</small></p>';
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
