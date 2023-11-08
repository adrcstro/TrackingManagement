<?php
require_once('Config.php');

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedPassenger = $_POST['SelectPassenger'];
    $passengerAge = $_POST['PassengerAge'];
    $passengerGender = $_POST['PassengerGender'];
    $passengerPhone = $_POST['PassengerPhone'];
    $passengerAddress = $_POST['PassengerAddress'];
    $passengerEmail = $_POST['PassengerEmail'];

    $SelectDriver = $_POST['SelectDriver'];
    $DriverAge = $_POST['DriverAge'];
    $DriverPlanteNumber = $_POST['DriverPlanteNumber'];
    $DriversDriversLicense = $_POST['DriversDriversLicense'];
    $DriverVehicleRegistration = $_POST['DriverVehicleRegistration'];
    $DriversPermittoOperate = $_POST['DriversPermittoOperate'];
    $DriversPhoneNumber = $_POST['DriversPhoneNumber'];
    $DriversHomeAddress = $_POST['DriversHomeAddress'];

    if (!empty($selectedPassenger)) {
        // Prepare and bind the SQL statement for the passengers table
        $stmtPassenger = $conn->prepare("UPDATE passengertbl SET Age=?, Gender=?, Phone=?, HomeAddress=?, Username=? WHERE Name=?");
        $stmtPassenger->bind_param("ssssss", $passengerAge, $passengerGender, $passengerPhone, $passengerAddress, $passengerEmail, $selectedPassenger);

        if ($stmtPassenger->execute()) {
            echo "Passenger record updated successfully";
        } else {
            echo "Error updating passenger record: " . $stmtPassenger->error;
        }

        // Close the prepared statement
        $stmtPassenger->close();
    } else {
        echo "Please select a passenger to update";
    }

    if (!empty($SelectDriver)) {
        // Prepare and bind the SQL statement for the drivers table
        $stmtDriver = $conn->prepare("UPDATE driverstbl SET Age=?, PlantNumber=?, DriversLicense=?, VehicleRegistration=?, PermittiOperate=?, PhoneNumber=? , HomeAddress=?  WHERE Username=?");
        $stmtDriver->bind_param("ssssssss", $DriverAge, $DriverPlanteNumber, $DriversDriversLicense, $DriverVehicleRegistration, $DriversPermittoOperate, $DriversPhoneNumber, $DriversHomeAddress, $SelectDriver);

        if ($stmtDriver->execute()) {
            echo "Driver record updated successfully";
        } else {
            echo "Error updating driver record: " . $stmtDriver->error;
        }

        // Close the prepared statement
        $stmtDriver->close();
    } else {
        echo "Please select a driver to update";
    }
}

// Close the database connection
$conn->close();
?>
