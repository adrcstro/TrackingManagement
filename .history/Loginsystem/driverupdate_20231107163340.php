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

    // Check if the file was uploaded without errors
    if (isset($_FILES['DriversImage1']) && $_FILES['DriversImage1']['error'] === UPLOAD_ERR_OK &&
        isset($_FILES['DriversImage2']) && $_FILES['DriversImage2']['error'] === UPLOAD_ERR_OK &&
        isset($_FILES['DriversImage3']) && $_FILES['DriversImage3']['error'] === UPLOAD_ERR_OK) {
        $targetDir = 'images/'; // Specify the directory for file storage
        $driversImage1 = $targetDir . basename($_FILES['DriversImage1']['name']);
        $driversImage2 = $targetDir . basename($_FILES['DriversImage2']['name']);
        $driversImage3 = $targetDir . basename($_FILES['DriversImage3']['name']);

        // Move the uploaded file to the specified directory
        move_uploaded_file($_FILES['DriversImage1']['tmp_name'], $driversImage1);
        move_uploaded_file($_FILES['DriversImage2']['tmp_name'], $driversImage2);
        move_uploaded_file($_FILES['DriversImage3']['tmp_name'], $driversImage3);

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
        echo "Error uploading file.";
    }
}

// Close the database connection
$conn->close();
?>
