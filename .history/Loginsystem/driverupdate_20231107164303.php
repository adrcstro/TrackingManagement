<?php
require_once('Config.php');

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['SelectDriver'], $_POST['DriverAge'], $_POST['DriverPlanteNumber'], $_POST['DriversPhoneNumber'], $_POST['DriversHomeAddress'])) {
    $selectedDriver = $_POST['SelectDriver'];
    $driverAge = $_POST['DriverAge'];
    $driversPlanteNumber = $_POST['DriverPlanteNumber'];
    $driversPhoneNumber = $_POST['DriversPhoneNumber'];
    $driversHomeAddress = $_POST['DriversHomeAddress'];

    $driversDriversLicense = isset($_FILES['DriversDriversLicense']) ? $_FILES['DriversDriversLicense'] : '';
    $driversVehicleRegistration = isset($_FILES['DriverVehicleRegistration']) ? $_FILES['DriverVehicleRegistration'] : '';
    $driversPermittoOperate = isset($_FILES['DriversPermittoOperate']) ? $_FILES['DriversPermittoOperate'] : '';

    // Prepare and bind the SQL statement for the drivers table
    $stmt = $conn->prepare("UPDATE driverstbl SET Age=?, Password=?, DriversLicense=?, VehicleRegistration=?, PermittoOperate=?, PhoneNumber=? , HomeAddress=?  WHERE Username=?");
    $stmt->bind_param("ssssssss", $driverAge, $driversPlanteNumber, $driversDriversLicense, $driversVehicleRegistration, $driversPermittoOperate, $driversPhoneNumber, $driversHomeAddress, $selectedDriver);

    if ($stmt->execute()) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $stmt->error;
    }

    // Close the prepared statement
    $stmt->close();
} else {
    echo "Please select a driver to update";
}

// Close the database connection
$conn->close();
?>
