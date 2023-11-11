<?php
require_once('Config.php');

if (isset($_POST['submit'])) {
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Image upload handling
    $username = $_POST['Username'];
    $age = $_POST['Age'];
    $password = $_POST['Password'];
    $phoneNumber = $_POST['PhoneNumber'];
    $homeAddress = $_POST['HomeAddress'];

    $driversLicense = addslashes(file_get_contents($_FILES['DriversLicense']['tmp_name']));
    $vehicleRegistration = addslashes(file_get_contents($_FILES['VehicleRegistration']['tmp_name']));
    $permittoOperate = addslashes(file_get_contents($_FILES['PermittoOperate']['tmp_name']));

    $sql = "INSERT INTO driverstbl (Username, Age, Password, PhoneNumber, HomeAddress, DriversLicense, VehicleRegistration, PermittoOperate) VALUES ('$username', '$age', '$password', '$phoneNumber', '$homeAddress', '$driversLicense', '$vehicleRegistration', '$permittoOperate')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful.";
    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}

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
            echo '<p><input type="text" value="Driver Name: ' . $row["Username"] . '" readonly></p>';
            echo '<p><input type="text" value="Vehicle Number: ' . $row["Age"] . '" readonly></p>';
            echo '<p><input type="text" value="Plate Number: ' . $row["Password"] . '" readonly></p>';
            echo '<p><input type="text" value="Phone Number: ' . $row["PhoneNumber"] . '" readonly></p>';
            echo '<p><input type="text" value="Home Address: ' . $row["HomeAddress"] . '" readonly></p>';
            echo '<p><img src="data:image/jpeg;base64,' . base64_encode($row["DriversLicense"]) . '" alt="Driver\'s License" width="300" height="200" readonly></p>';
            echo '<p><img src="data:image/jpeg;base64,' . base64_encode($row["VehicleRegistration"]) . '" alt="Vehicle Registration" width="300" height="200" readonly></p>';
            echo '<p><img src="data:image/jpeg;base64,' . base64_encode($row["PermittoOperate"]) . '" alt="Vehicle Picture" width="300" height="200" readonly></p>';
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
