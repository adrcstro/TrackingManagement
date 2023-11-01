<?php
// Establish a connection to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch the BLOB data from the database
$sql = "SELECT DriversLicense FROM drivertbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Assuming the BLOB data represents an image
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['DriversLicense']).'"/>';
    }
} else {
    echo "0 results";
}

$conn->close();
?>
