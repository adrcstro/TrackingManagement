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

$Name = $_POST['Name'];
$Age = $_POST['Age'];
$PlateNumber = $_POST['PlateNumber'];
$DriversLicense = $_FILES['DriversLicense']['name'];
$VehicleRegistration = $_FILES['VehicleRegistration']['name'];
$PermittoOperate = $_FILES['PermittoOperate']['name'];
$PhoneNumber = $_POST['PhoneNumber'];
$HomeAddress = $_POST['HomeAddress'];


// Code for file upload

// SQL query to insert data into the database
$sql = "INSERT INTO driverstbl (Name, Age, PlateNumber, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress) VALUES (?,?,?,?,?,?,?,?)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
