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

    // Check if the file was uploaded without errors
    if (isset($_FILES['DriversDriversLicense']) && $_FILES['DriversDriversLicense']['error'] === UPLOAD_ERR_OK) {
        $driversDriversLicense = $_FILES['DriversDriversLicense']['name'];
        $driversDriversLicense_tmp = $_FILES['DriversDriversLicense']['tmp_name'];
        move_uploaded_file($driversDriversLicense_tmp, "upload/" . $driversDriversLicense);
    }

    if (isset($_FILES['DriverVehicleRegistration']) && $_FILES['DriverVehicleRegistration']['error'] === UPLOAD_ERR_OK) {
        $driversVehicleRegistration = $_FILES['DriverVehicleRegistration']['name'];
        $driversVehicleRegistration_tmp = $_FILES['DriverVehicleRegistration']['tmp_name'];
        move_uploaded_file($driversVehicleRegistration_tmp, "upload/" . $driversVehicleRegistration);
    }

    if (isset($_FILES['DriversPermittoOperate']) && $_FILES['DriversPermittoOperate']['error'] === UPLOAD_ERR_OK) {
        $driversPermittoOperate = $_FILES['DriversPermittoOperate']['name'];
        $driversPermittoOperate_tmp = $_FILES['DriversPermittoOperate']['tmp_name'];
        move_uploaded_file($driversPermittoOperate_tmp, "upload/" . $driversPermittoOperate);
    }

    if (!empty($selectedDriver)) {
        // Prepare and bind the SQL statement for the drivers table
        $stmt = $conn->prepare("UPDATE driverstbl SET Age=?, Password=?, DriversLicense=?, VehicleRegistration=?, PermittoOperate=?, PhoneNumber=?, HomeAddress=?  WHERE Username=?");
        $stmt->bind_param("ssssssss", $driverAge, $driversPlanteNumber, $driversDriversLicense, $driversVehicleRegistration, $driversPermittoOperate, $driversPhoneNumber, $driversHomeAddress, $selectedDriver);

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
