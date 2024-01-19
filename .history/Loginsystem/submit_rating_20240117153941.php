<?php
// Replace with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the form
$driverName = $_POST['SearchDriver'];
$rate = $_POST['Rate'];
$Comments = $_POST['comments'];

// Insert data into the ratings table
$sql = "INSERT INTO rating (DriverName, Rate, Comments) VALUES ('$driverName', '$rate', '$Comments')";

if ($conn->query($sql) === TRUE) {
    // Rating submitted successfully
    echo "<script>
            swal('Success', 'Rating submitted successfully', 'success').then((value) => {
                window.location.href = 'your_redirect_page.php';
            });
         </script>";
} else {
    // Error occurred
    echo "<script>
            swal('Error', 'Error: " . $sql . "<br>" . $conn->error . "', 'error');
         </script>";
}

$conn->close();

