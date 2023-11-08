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

    // Debugging to check the values being received
    var_dump($_FILES);

    $driversDriversLicense = isset($_FILES['DriversDriversLicense']['name']) ? $_FILES['DriversDriversLicense']['name'] : '';
    $driversVehicleRegistration = isset($_FILES['DriversVehicleRegistration']['name']) ? $_FILES['DriversVehicleRegistration']['name'] : '';
    $driversPermittoOperate = isset($_FILES['DriversPermittoOperate']['name']) ? $_FILES['DriversPermittoOperate']['name'] : '';

    // Debugging to check the values of file names
    echo $driversDriversLicense;
    echo $driversVehicleRegistration;
    echo $driversPermittoOperate;

    // Rest of your code for database update

}

// Close the database connection
$conn->close();
?>
