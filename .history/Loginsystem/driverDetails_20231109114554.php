<?php
require_once('Config.php');

if (isset($_GET['search'])) {
    $searchText = $_GET['search'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Username, Age, Password, PhoneNumber, HomeAddress FROM driverstbl WHERE Username LIKE '%$searchText%' OR Age LIKE '%$searchText%' OR Password LIKE '%$searchText%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<p><label>Driver Name:</label><input type="text" value="' . $row["Username"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; margin-top: 20px; border-radius: 5px; width: 300px; font-weight: bold;" readonly></p>';
            echo '<p><label>Vehicle Number:</label><input type="text" value="' . $row["Age"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px; font-weight: bold;" readonly></p>';
            echo '<p><label>Plate Number:</label><input type="text" value="' . $row["Password"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px; font-weight: bold;" readonly></p>';
            echo '<p><label>Phone Number:</label><input type="text" value="' . $row["PhoneNumber"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px; font-weight: bold;" readonly></p>';
            echo '<p><label>Home Address:</label><input type="text" value="' . $row["HomeAddress"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px; font-weight: bold;" readonly></p>';
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
