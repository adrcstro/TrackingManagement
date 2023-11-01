
<?php
// Replace with your actual database credentials
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "plate-to-place-v-tracking"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the SELECT query
$sql = "SELECT DriversLicense, Name FROM driverstbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Fetch and display the image
        echo '<img src="data:image/jpeg;base64,'.base64_encode($row['DriversLicense']).'" />';

        // Fetch and display the text
        echo "<p>".$row['Name']."</p>";
    }
} else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>