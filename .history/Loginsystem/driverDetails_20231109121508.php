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
        echo "<table border='1'>
        <tr>
            <th>Driver Name</th>
            <th>Vehicle Number</th>
            <th>Plate Number</th>
            <th>Phone Number</th>
            <th>Home Address</th>
            <th>Drivers License</th>
            <th>Vehicle Registration</th>
            <th>Permit to Operate</th>
        </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["Username"] . "</td>";
            echo "<td>" . $row["Age"] . "</td>";
            echo "<td>" . $row["Password"] . "</td>";
            echo "<td>" . $row["PhoneNumber"] . "</td>";
            echo "<td>" . $row["HomeAddress"] . "</td>";
            echo "<td>" . $row["DriversLicense"] . "</td>";
            echo "<td>" . $row["VehicleRegistration"] . "</td>";
            echo "<td>" . $row["PermittoOperate"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
