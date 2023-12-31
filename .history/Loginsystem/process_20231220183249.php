<?php
require_once('Config.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['Name'], $_POST['Age'], $_POST['Gender'], $_POST['Phone'], $_POST['HomeAddress'], $_POST['Username'], $_POST['Password'])) {
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Phone = $_POST['Phone'];
    $HomeAddress = $_POST['HomeAddress'];
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];

    // Check if it's passenger data
    $passengerSql = "INSERT INTO passengertbl (Name, Age, Gender, Phone, HomeAddress, Username, Password) VALUES(?,?,?,?,?,?,?)";
    $passengerStmt = $conn->prepare($passengerSql);
    $passengerResult = $passengerStmt->execute([$Name, $Age, $Gender, $Phone, $HomeAddress, $Username, $Password]);

    if ($passengerResult) {
        echo 'Passenger Data Successfully saved.';
    } else {
        echo 'There were errors while saving the passenger data.';
    }
}

if (isset($_POST['Username'], $_POST['Age'], $_POST['Password'], $_POST['PhoneNumber'], $_POST['HomeAddress'])) {
    $Username = $_POST['Username'];
    $Age = $_POST['Age'];
    $Password = $_POST['Password'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $HomeAddress = $_POST['HomeAddress'];

    $permitToOperateFile = $_FILES['PermittoOperate']['name'];
    $permitToOperateTmp = $_FILES['PermittoOperate']['tmp_name'];
    
    $driversLicenseFile = $_FILES['DriversLicense']['name'];
    $driversLicenseTmp = $_FILES['DriversLicense']['tmp_name'];
    
    $vehicleRegistrationFile = $_FILES['VehicleRegistration']['name'];
    $vehicleRegistrationTmp = $_FILES['VehicleRegistration']['tmp_name'];
 

    // File upload functionality
    $DriversLicense = isset($_FILES['DriversLicense']['name']) ? $_FILES['DriversLicense']['name'] : '';
    $VehicleRegistration = isset($_FILES['VehicleRegistration']['name']) ? $_FILES['VehicleRegistration']['name'] : '';
    $PermittoOperate = isset($_FILES['PermittoOperate']['name']) ? $_FILES['PermittoOperate']['name'] : '';

    // SQL query to insert data into the database
    $sql = "INSERT INTO driverstbl (Username, Age, Password, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress) VALUES (?, ?, ?, ?, ?, ?, ?,?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssss', $Username, $Age, $Password, $DriversLicense, $VehicleRegistration, $PermittoOperate, $PhoneNumber, $HomeAddress);

    if ($stmt->execute()) {


        move_uploaded_file($permitToOperateTmp, "uploads/" . $permitToOperateFile);

        // Process Driver's License file
        move_uploaded_file($driversLicenseTmp, "uploads/" . $driversLicenseFile);
        
        // Process Vehicle Registration file
        move_uploaded_file($vehicleRegistrationTmp, "uploads/" . $vehicleRegistrationFile);




     
        echo "Your record created successfully. \nYour name serves as your Username and PlateNumber serves as your Password.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
