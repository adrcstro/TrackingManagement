<?php
// Connect to your database (replace with your actual credentials)
$servername = "localhost";
$username = "root";
$password = "";
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

// Process AJAX request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the search term from the AJAX request
    $searchTerm = $_POST["search"];

    // Fetch data based on the search term
    $data = fetchData($conn, $searchTerm);

    // Close the database connection
    $conn->close();

    // Send the data as a JSON response
    header('Content-Type: application/json');
    echo json_encode($data);
} else {
    // If it's not a POST request, handle accordingly
    echo "Invalid request method";
}
?>
