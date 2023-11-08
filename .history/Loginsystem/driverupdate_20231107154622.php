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

    // Check if the file is uploaded successfully
    if (isset($_FILES['DriversDriversLicense']) && isset($_FILES['DriverVehicleRegistration']) && isset($_FILES['DriversPermittoOperate'])) {
        $uploadDir = 'uploads/'; // Specify your upload directory here
        $driversDriversLicense = $uploadDir . basename($_FILES['DriversDriversLicense']['name']);
        $driversVehicleRegistration = $uploadDir . basename($_FILES['DriverVehicleRegistration']['name']);
        $driversPermittoOperate = $uploadDir . basename($_FILES['DriversPermittoOperate']['name']);

        // Move uploaded files to the upload directory
        if (move_uploaded_file($_FILES['DriversDriversLicense']['tmp_name'], $driversDriversLicense) &&
            move_uploaded_file($_FILES['DriverVehicleRegistration']['tmp_name'], $driversVehicleRegistration) &&
            move_uploaded_file($_FILES['DriversPermittoOperate']['tmp_name'], $driversPermittoOperate)) {

            // Prepare and bind the SQL statement for the drivers table
            $stmt = $conn->prepare("UPDATE driverstbl SET Age=?, PlanteNumber=?, DriversLicense=?, VehicleRegistration=?, PermittoOperate=?, PhoneNumber=?, HomeAddress=?  WHERE Username=?");
            $stmt->bind_param("ssssssss", $driverAge, $driversPlanteNumber, $driversDriversLicense, $driversVehicleRegistration, $driversPermittoOperate, $driversPhoneNumber, $driversHomeAddress, $selectedDriver);

            if ($stmt->execute()) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $stmt->error;
            }

            // Close the prepared statement
            $stmt->close();
        } else {
            echo "File upload failed.";
        }
    } else {
        echo "Please select a passenger to update";
    }
}

// Close the database connection
$conn->close();
?>
