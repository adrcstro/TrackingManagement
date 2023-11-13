<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-wVv0y5xLZu6dzZLAMcSfGSE1xFkZDO9Q6M/QmbUihd2eR5Zbty2U2ls4lDds1xs8KzPQfZ85teW3cvPmmAmFYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
</body>
</html>



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


echo '<div class="input-group mb-3">';
echo '<div class="input-group-prepend">';
echo '<span class="input-group-text">Drivers License</span>';
echo '</div>';
echo '<input type="text" value="' . $row["DriversLicense"] . '" readonly class="form-control" style="border-radius: 0 5px 5px 0;">';
echo '</div>';

echo '<div class="input-group mb-2">';
echo '<div class="input-group-prepend">';
echo '<span class="input-group-text">Vehicle Registration</span>';    
echo '</div>';
echo '<input type="text" value="' . $row["VehicleRegistration"] . '" readonly class="form-control" style="border-radius: 0 5px 5px 0;">';
echo '</div>';











echo '</div>';
echo '<div>';
echo '<img src="uploads/' . $row['PermittoOperate'] . '" style="border: 1px solid #ccc; border-radius: 5px; margin-top: 2rem; margin-right: 4rem; width: 350px; height: 300px;">';
echo '</div>';
echo '</div>';
      }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>