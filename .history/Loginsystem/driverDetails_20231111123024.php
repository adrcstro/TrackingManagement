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
            echo '<div style="display: flex; flex-wrap: wrap;">';

// Input Fields
echo '<div style="flex: 1; margin-right: 20px;">';
echo '<p><input type="text" value="Driver Name: ' . $row["Username"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; margin-top: 20px; border-radius: 5px; width: 300px;"></p>';
echo '<p><input type="text" value="Vehicle Number: ' . $row["Age"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;"></p>';
echo '<p><input type="text" value="Plate Number: ' . $row["Password"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;"></p>';
echo '<p><input type="text" value="Phone Number: ' . $row["PhoneNumber"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;"></p>';
echo '<p><input type="text" value="Home Address: ' . $row["HomeAddress"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;"></p>';
echo '<p><input type="text" value="Drivers License: ' . $row["DriversLicense"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;"></p>';
echo '<p><input type="text" value="Vehicle Registration: ' . $row["VehicleRegistration"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;"></p>';
echo '</div>';

// Image
echo '<div>';
echo '<img src="uploads/' . $row['PermittoOperate'] . '" width="300" height="200" style="border: 1px solid #ccc; border-radius: 5px;  margin-top: 2rem; margin-right: 4rem;">';
echo '</div>';

echo '</div>';
      }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>