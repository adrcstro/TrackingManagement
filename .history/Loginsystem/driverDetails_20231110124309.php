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
            $username = $row["Username"];
            $age = $row["Age"];
            $password = $row["Password"];
            $phoneNumber = $row["PhoneNumber"];
            $homeAddress = $row["HomeAddress"];
            $driversLicense = $row["DriversLicense"];
            $vehicleRegistration = $row["VehicleRegistration"];
            $imageData = $row["PermittoOperate"];

            echo '<p><input type="text" value="Driver Name: ' . $username . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; margin-top: 20px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Vehicle Number: ' . $age . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Plate Number: ' . $password . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Phone Number: ' . $phoneNumber . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Home Address: ' . $homeAddress . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Drivers License: ' . $driversLicense . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Vehicle Registration: ' . $vehicleRegistration . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';

            // Display image if it exists
            if ($imageData) {
                echo '<p>Vehicle Picture:</p>';
                echo '<img src="data:image/jpeg;base64,'.base64_encode($imageData).'" style="width:300px" alt="Permit to Operate">';
            }
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
