
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
            // Your existing code...
            echo '<p><input type="text" value="Driver Name: ' . $row["Username"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; margin-top: 20px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Vehicle Number: ' . $row["Age"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Plate Number: ' . $row["Password"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Phone Number: ' . $row["PhoneNumber"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Home Address: ' . $row["HomeAddress"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Drivers License: ' . $row["DriversLicense"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="Vehicle Registration: ' . $row["VehicleRegistration"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            // Display the image using base64 encoding
            echo '<p><img src="data:image/jpeg;base64,' . $row["PermittoOperate"] . '" alt="Vehicle Picture" style="max-width: 300px; max-height: 300px;"></p>';
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
