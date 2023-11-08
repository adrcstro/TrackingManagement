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

    // Handle file upload for Drivers License
    $driversLicenseFileName = $_FILES['DriversDriversLicense']['name'];
    $driversLicenseFile = $_FILES['DriversDriversLicense']['tmp_name'];
    $driversLicensePath = "uploads/" . $driversLicenseFileName;
    move_uploaded_file($driversLicenseFile, $driversLicensePath);

    // Handle file upload for Vehicle Registration
    $vehicleRegistrationFileName = $_FILES['DriverVehicleRegistration']['name'];
    $vehicleRegistrationFile = $_FILES['DriverVehicleRegistration']['tmp_name'];
    $vehicleRegistrationPath = "uploads/" . $vehicleRegistrationFileName;
    move_uploaded_file($vehicleRegistrationFile, $vehicleRegistrationPath);

    // Handle file upload for Permit to Operate
    $permitToOperateFileName = $_FILES['DriversPermittoOperate']['name'];
    $permitToOperateFile = $_FILES['DriversPermittoOperate']['tmp_name'];
    $permitToOperatePath = "uploads/" . $permitToOperateFileName;
    move_uploaded_file($permitToOperateFile, $permitToOperatePath);

    if (!empty($selectedDriver)) {
        // Prepare and bind the SQL statement for the drivers table
        $stmt = $conn->prepare("UPDATE driverstbl SET Age=?, Password=?, DriversLicense=?, VehicleRegistration=?, PermittoOperate=?, PhoneNumber=?, HomeAddress=?  WHERE Username=?");
        $stmt->bind_param("ssssssss", $driverAge, $driversPlanteNumber, $driversLicensePath, $vehicleRegistrationPath, $permitToOperatePath, $driversPhoneNumber, $driversHomeAddress, $selectedDriver);

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
