<?php
require_once('Config.php');

if (isset($_GET['search'])) {
    $searchText = $_GET['search'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Username, Age, Password, PhoneNumber, HomeAddress,DriversLicense,VehicleRegistration,PermittoOperate FROM driverstbl WHERE Username LIKE '%$searchText%' OR Age LIKE '%$searchText%' OR Password LIKE '%$searchText%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div style="position: relative;">';
            echo '<input type="text" value="Driver Name: ' . $row["Username"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; margin-top: 20px; border-radius: 5px; width: 300px;" readonly>';
            echo '<button style="background-color: gray; padding: 5px; border: none; border-radius: 5px; color: white; position: absolute; right: 0; top: 0;">View gray bg</button>';
            echo '</div>';

            // Repeat the same structure for the other fields
            // ...
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
