<?php
require_once('Config.php');

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedDriver = $_POST['SelectDriver'];
    $driverAge = $_POST['DriverAge'];
    $driversPlanteNumber = $_POST['DriverPlanteNumber'];
    $driversPhoneNumber = $_POST['DriversPhoneNumber'];
    $driversHomeAddress = $_POST['DriversHomeAddress'];

    // File uploads
    $driversDriversLicense = $_FILES['DriversDriversLicense']['name'];
    $driversVehicleRegistration = $_FILES['DriverVehicleRegistration']['name'];
    $driversPermittoOperate = $_FILES['DriversPermittoOperate']['name'];

    // ... (additional validations or checks for file uploads if needed)

    if (!empty($selectedDriver)) {
        // Prepare and bind the SQL statement for the drivers table
        $sql = $conn->prepare("UPDATE driverstbl SET Age=?, PlanteNumber=?, DriversLicense=?, VehicleRegistration=?, PermittoOperate=?, PhoneNumber=?, HomeAddress=? WHERE Username=?");
        $stmt = $conn->prepare($sql);
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
}

// Close the database connection
$conn->close();
?>