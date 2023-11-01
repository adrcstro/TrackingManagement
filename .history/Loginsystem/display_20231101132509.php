
<?php
// Replace with your actual database credentials
$servername = "localhost";
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$dbname = "sample"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Execute the SELECT query
$sql = "SELECT image, title FROM codeflix";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        // Fetch and display the image
        $imageData = base64_encode($row['image']);
        $src = 'data: image/jpeg;base64,'.$imageData;
        echo '<img src="'.$src.'" />';

        // Fetch and display the text
        echo "<p>".$row['title']."</p>";
    }
}
 else {
    echo "0 results";
}

// Close the connection
$conn->close();
?>