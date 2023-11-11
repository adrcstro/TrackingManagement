<?php
require_once('Config.php');


if (isset($_GET['search'])) {
    $searchText = $_GET['search'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Username, Age, Password,PhoneNumber,HomeAddress FROM driverstbl WHERE Username LIKE '%$searchText%' OR Age LIKE '%$searchText%' OR Password LIKE '%$searchText%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<p><input type="text" value="<b>Driver Name:</b>' . $row["Username"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; margin-top: 20px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="<b>Vehicle Number:</b>' . $row["Age"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="<b>Plate Number:</b>' . $row["Password"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="<b>Phone Number:</b>' . $row["PhoneNumber"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
            echo '<p><input type="text" value="<b>Home Address:</b>' . $row["HomeAddress"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;" readonly></p>';
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
