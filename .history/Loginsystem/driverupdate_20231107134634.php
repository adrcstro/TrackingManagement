<?php
require_once('Config.php');

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectDriver = $_POST['SelectDriver'];
    $driverAge = $_POST['DriverAge'];
    $driverPlanteNumber = $_POST['DriverPlanteNumber'];
    $driversDriversLicense = $_POST['DriversDriversLicense'];
    $driverVehicleRegistration = $_POST['DriverVehicleRegistration'];
    $driversPermittoOperate = $_POST['DriversPermittoOperate'];
    $driversPhoneNumber = $_POST['DriversPhoneNumber'];
    $driversHomeAddress = $_POST['DriversHomeAddress'];



    if (!empty($selectDriver)) {
        // Prepare and bind the SQL statement for the drivers table
        $stmtDriver = $conn->prepare("UPDATE driverstbl SET Age=?, Password=?, DriversLicense=?, VehicleRegistration=?, PermittoOperate=?, PhoneNumber=? , HomeAddress=?  WHERE Username=?");
        $stmtDriver->bind_param("ssssssss", $driverAge, $driverPlanteNumber, $driversDriversLicense, $driverVehicleRegistration, $driversPermittoOperate, $driversPhoneNumber, $driversHomeAddress, $selectDriver);

        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Please select a passenger to update";
    }
}

// Close the database connection
$conn->close();
?>
