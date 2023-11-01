<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$Name = isset($_POST['Name']) ? $_POST['Name'] : '';
$Age = isset($_POST['age']) ? $_POST['Age'] : '';
$PlateNumber = isset($_POST['PlateNumber']) ? $_POST['PlateNumber'] : '';
$PhoneNumber = isset($_POST['PhoneNumber']) ? $_POST['PhoneNBumber'] : '';
$HomeAddress = isset($_POST['HomeAddress']) ? $_POST['HomeAddress'] : '';

$DriversLicense = isset($_FILES['DriversLicense']['name']) ? $_FILES['DriversLicense']['name'] : '';
$VehicleRegistration = isset($_FILES['VehicleRegistration']['name']) ? $_FILES['VehicleRegistration']['name'] : '';
$PermittoOperate = isset($_FILES['PermittoOperate']['name']) ? $_FILES['PermitoPperate']['name'] : '';

// Code for file upload

// SQL query to insert data into the database
$sql = "INSERT INTO driverstbl (Name, Age, PlateNumber, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress) VALUES ('$Name', '$Age', '$PlateNumber', '$DriversLicense', '$VehicleRegistration', '$PermittoOperate', '$PhoneNumber', '$HomeAddress')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
