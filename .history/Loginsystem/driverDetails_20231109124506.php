<!DOCTYPE html>
<html>
<head>
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }

        .input-field {
            border: 1px solid #ccc;
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            width: 300px;
        }

        .file-view {
            display: flex;
            flex-direction: column;
        }

        .file-view button {
            margin-top: 10px;
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
            echo '<div>';
            echo '<p><input type="text" value="Driver Name: ' . $row["Username"] . '" class="input-field" readonly></p>';
            echo '<p><input type="text" value="Vehicle Number: ' . $row["Age"] . '" class="input-field" readonly></p>';
            echo '<p><input type="text" value="Plate Number: ' . $row["Password"] . '" class="input-field" readonly></p>';
            echo '<p><input type="text" value="Phone Number: ' . $row["PhoneNumber"] . '" class="input-field" readonly></p>';
            echo '<p><input type="text" value="Home Address: ' . $row["HomeAddress"] . '" class="input-field" readonly></p>';
            echo '<p><input type="text" value="Drivers License: ' . $row["DriversLicense"] . '" class="input-field" readonly></p>';
            echo '<p><input type="text" value="Vehicle Registration: ' . $row["VehicleRegistration"] . '" class="input-field" readonly></p>';
            echo '<p><input type="text" value="Permit to Operate: ' . $row["PermittoOperate"] . '" class="input-field" readonly></p>';
            echo '</div>';
            echo '<div class="file-view">';
            echo '<a href="view_file.php?file=' . $row["DriversLicense"] . '" target="_blank"><button>View Drivers License</button></a>';
            echo '<a href="view_file.php?file=' . $row["VehicleRegistration"] . '" target="_blank"><button>View Vehicle Registration</button></a>';
            echo '<a href="view_file.php?file=' . $row["PermittoOperate"] . '" target="_blank"><button>View Permit to Operate</button></a>';
            echo '</div>';
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
