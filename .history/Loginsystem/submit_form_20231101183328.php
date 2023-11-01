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

$name = $_POST['name'];
$age = $_POST['age'];
$plate_number = $_POST['plate_number'];
$phone_number = $_POST['phone_number'];
$home_address = $_POST['home_address'];

$drivers_license = $_FILES['drivers_license']['name'];
$vehicle_registration = $_FILES['vehicle_registration']['name'];
$permit_to_operate = $_FILES['permit_to_operate']['name'];

// Code for file upload

// SQL query to insert data into the database
$sql = "INSERT INTO driverstbl (name, age, plate_number, drivers_license, vehicle_registration, permit_to_operate, phone_number, home_address) VALUES ('$name', '$age', '$plate_number', '$drivers_license', '$vehicle_registration', '$permit_to_operate', '$phone_number', '$home_address')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
