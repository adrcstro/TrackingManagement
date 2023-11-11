<?php
require_once('Config.php');

if (isset($_GET['search'])) {
    $searchText = $_GET['search'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
    $sql = "SELECT Username, Age, Password, PhoneNumber, HomeAddress, DriversLicense, VehicleRegistration, PermittoOperate FROM driverstbl WHERE Username LIKE '%$searchText%' OR Age LIKE '%$searchText%' OR Password LIKE '%$searchText%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo '<div style="display: grid; grid-template-columns: 1fr;">'; // Container for the grid layout
        while ($row = $result->fetch_assoc()) {
            echo '<div>'; // Individual grid item
            echo '<p><input type="text" value="Driver Name: ' . $row["Username"] . '" readonly></p>';
            echo '<p><input type="text" value="Vehicle Number: ' . $row["Age"] . '" readonly></p>';
            echo '<p><input type="text" value="Plate Number: ' . $row["Password"] . '" readonly></p>';
            echo '<p><input type="text" value="Phone Number: ' . $row["PhoneNumber"] . '" readonly></p>';
            echo '<p><input type="text" value="Home Address: ' . $row["HomeAddress"] . '" readonly></p>';
            echo '<p><input type="text" value="Drivers License: ' . $row["DriversLicense"] . '" readonly></p>';
            echo '<p><input type="text" value="Vehicle Registration: ' . $row["VehicleRegistration"] . '" readonly></p>';
            echo '</div>';
            echo '<div>'; // Another grid item for the image
            echo '<img src="uploads/' . $row['PermittoOperate'] . '" width="300" height="200" />';
            echo '</div>';
        }
        echo '</div>'; // Close the container
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
