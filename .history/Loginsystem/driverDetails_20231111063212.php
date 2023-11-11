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
        while ($row = $result->fetch_assoc()) {
            echo '<p><input type="text" value="Driver Name: ' . $row["Username"] . '" readonly></p>';
            echo '<p><input type="text" value="Vehicle Number: ' . $row["Age"] . '" readonly></p>';
            echo '<p><input type="text" value="Plate Number: ' . $row["Password"] . '" readonly></p>';
            echo '<p><input type="text" value="Phone Number: ' . $row["PhoneNumber"] . '" readonly></p>';
            echo '<p><input type="text" value="Home Address: ' . $row["HomeAddress"] . '" readonly></p>';
            echo '<p><input type="text" value="Drivers License: ' . $row["DriversLicense"] . '" readonly></p>';
            echo '<p><input type="text" value="Vehicle Registration: ' . $row["VehicleRegistration"] . '" readonly></p>';
            
            // Displaying the image using the <img> tag
            $imagePath = $row["PermittoOperate"];
            if (file_exists($imagePath)) {
                echo '<p><img src="' . $imagePath . '" alt="Vehicle Picture" style="max-width: 300px; max-height: 300px;"></p>';
            } else {
                echo '<p>Error: Image not found</p>';
            }
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
