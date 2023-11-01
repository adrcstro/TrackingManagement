<?php
$servername = "localhost"; // Your MySQL server
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "plate-to-place-v-tracking"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$imagePath = "C:\\fakepath\\img-home.jpg"; // Specify the image path

$sql = "SELECT * FROM driverstbl WHERE DriversLicense = '$imagePath'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo " DriversLicense: " . $row[" DriversLicense"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
