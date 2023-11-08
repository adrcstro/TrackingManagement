<?php
require_once('Config.php');

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $SelectDriver = $_POST['SelectDriver'];
    $DriverAge = $_POST['DriverAge'];
    $DriverPlanteNumber = $_POST['DriverPlanteNumber'];
    $DriversDriversLicense = $_POST['DriversDriversLicense'];
    $DriverVehicleRegistration = $_POST['DriverVehicleRegistration'];
    $DriversPermittoOperate = $_POST['DriversPermittoOperate'];
    $DriversPhoneNumber = $_POST['DriversPhoneNumber'];
    $DriversHomeAddress = $_POST['DriversHomeAddress'];




    if (!empty($SelectDriver)) {
        // Prepare and bind the SQL statement to prevent SQL injection
        $stmt = $conn->prepare("UPDATE driverstbl SET Age=?, Password=?, DriversLicense=?, VehicleRegistration=?, PermittiOperate=?, PhoneNumber=? , HomeAddress=?  WHERE Username=?");
        $stmt->bind_param("ssssss", $passengerAge, $passengerGender, $passengerPhone, $passengerAddress, $passengerEmail, $selectedPassenger);

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
