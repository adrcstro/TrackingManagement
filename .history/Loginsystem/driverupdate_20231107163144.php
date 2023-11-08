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
    $driversDriversLicense = $_POST['DriversDriversLicense'];
    $driversVehicleRegistration = $_POST['DriverVehicleRegistration'];
    $driversPermittoOperate = $_POST['DriversPermittoOperate'];
    $driversPhoneNumber = $_POST['DriversPhoneNumber'];
    $driversHomeAddress = $_POST['DriversHomeAddress'];

    // Assuming 'images' is a directory where the images will be stored
    $targetDir = 'images/';
    $driversImage1 = $targetDir . basename($_FILES["DriversImage1"]["name"]);
    $driversImage2 = $targetDir . basename($_FILES["DriversImage2"]["name"]);
    $driversImage3 = $targetDir . basename($_FILES["DriversImage3"]["name"]);

    if (!empty($selectedDriver)) {
        // Prepare and bind the SQL statement for the drivers table
        $stmt = $conn->prepare("UPDATE driverstbl SET Age=?, PlanteNumber=?, DriversLicense=?, VehicleRegistration=?, PermittoOperate=?, PhoneNumber=?, HomeAddress=?, Image1=?, Image2=?, Image3=? WHERE Username=?");
        $stmt->bind_param("sssssssssss", $driverAge, $driversPlanteNumber, $driversDriversLicense, $driversVehicleRegistration, $driversPermittoOperate, $driversPhoneNumber, $driversHomeAddress, $driversImage1, $driversImage2, $driversImage3, $selectedDriver);

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
