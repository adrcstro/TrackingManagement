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


echo '<style>
        .transparent-btn {
            background-color: transparent;
            border-color: #ced4da;
            color: #608ce6; /* Set the desired text color for the button */
        }
        .custom-input {
            border: 1px solid #ced4da; /* Set the desired border color for the input fields */
            /* Optional: Add border-radius for rounded corners */
        }
      </style>';

echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">';

echo '<div class="input-group mb-3">';  
echo '<input type="text" class="form-control custom-input" placeholder="Recipient\'s username" aria-label="Recipient\'s username" aria-describedby="basic-addon2" value="Drivers License:                  ' . $row["DriversLicense"] . '" readonly>';
echo '<div class="input-group-append">';
echo '<a href="view-details.php?license=' . urlencode($row["DriversLicense"]) . '&registration=' . urlencode($row["VehicleRegistration"]) . '" class="btn btn-outline-secondary transparent-btn" type="button">View <i class="fas fa-eye"></i></a>';
echo '</div>';
echo '</div>';

echo '<div class="input-group mb-3">';
echo '<input type="text" class="form-control custom-input" placeholder="Recipient\'s username" aria-label="Recipient\'s username" aria-describedby="basic-addon2" value="Vihicle Registration:            ' . $row["VehicleRegistration"] . '" readonly>';
echo '<div class="input-group-append">';
echo '<a href="view-details.php?license=' . urlencode($row["DriversLicense"]) . '&registration=' . urlencode($row["VehicleRegistration"]) . '" class="btn btn-outline-secondary transparent-btn" type="button">View <i class="fas fa-eye"></i></a>';
echo '</div>';
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