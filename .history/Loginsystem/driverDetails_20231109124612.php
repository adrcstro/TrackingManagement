<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            position: relative;
            margin-bottom: 20px;
        }

        .input-field {
            position: relative;
            border: 1px solid #ccc;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            width: 300px;
        }

        .view-button {
            position: absolute;
            right: 5px;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>
</head>
<body>
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
            echo '<div class="container">';
            echo '<input type="text" value="Driver Name: ' . $row["Username"] . '" class="input-field" readonly>';
            echo '<a href="view_file.php?file=' . $row["DriversLicense"] . '" target="_blank" class="view-button">View</a>';
            echo '</div>';

            echo '<div class="container">';
            echo '<input type="text" value="Vehicle Number: ' . $row["Age"] . '" class="input-field" readonly>';
            echo '</div>';

            echo '<div class="container">';
            echo '<input type="text" value="Plate Number: ' . $row["Password"] . '" class="input-field" readonly>';
            echo '</div>';

            // Repeat the pattern for other input fields

            echo '<div class="container">';
            echo '<input type="text" value="Drivers License: ' . $row["DriversLicense"] . '" class="input-field" readonly>';
            echo '<a href="view_file.php?file=' . $row["DriversLicense"] . '" target="_blank" class="view-button">View</a>';
            echo '</div>';

            echo '<div class="container">';
            echo '<input type="text" value="Vehicle Registration: ' . $row["VehicleRegistration"] . '" class="input-field" readonly>';
            echo '<a href="view_file.php?file=' . $row["VehicleRegistration"] . '" target="_blank" class="view-button">View</a>';
            echo '</div>';

            echo '<div class="container">';
            echo '<input type="text" value="Permit to Operate: ' . $row["PermittoOperate"] . '" class="input-field" readonly>';
            echo '<a href="view_file.php?file=' . $row["PermittoOperate"] . '" target="_blank" class="view-button">View</a>';
            echo '</div>';
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
</body>
</html>
