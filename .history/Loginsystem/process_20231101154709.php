<?php
require_once('Config.php');
?>

<?php

if(isset($_POST['Name'], $_POST['Age'], $_POST['Gender'], $_POST['Phone'], $_POST['HomeAddress'], $_POST['Email'], $_POST['Password'])){
    $Name         = $_POST['Name'];
    $Age          = $_POST['Age'];
    $Gender       = $_POST['Gender'];
    $Phone        = $_POST['Phone'];
    $HomeAddress  = $_POST['HomeAddress'];
    $Email        = $_POST['Email'];
    $Password     = sha1($_POST['Password']);

    $passengerSql = "INSERT INTO passengertbl (Name, Age, Gender, Phone, HomeAddress, Email, Password) VALUES(?,?,?,?,?,?,?)";
    $passengerStmt = $db->prepare($passengerSql);
    $passengerResult = $passengerStmt->execute([$Name, $Age, $Gender, $Phone, $HomeAddress, $Email, $Password]);

    if($passengerResult){
        echo 'Passenger Data Successfully saved.';
    }else{
        echo 'There were errors while saving the passenger data.';
    }
}


// Check if the form is submitted
if(isset($_POST['Name'], $_POST['Age'], $_POST['PlateNumber'], $_FILES['DriversLicense'], $_FILES['VehicleRegistration'], $_FILES['PermittoOperate'], $_POST['PhoneNumber'], $_POST['HomeAddress'])) {
    $Name                  = $_POST['Name'];
    $Age                   = $_POST['Age'];
    $PlateNumber           = $_POST['PlateNumber'];
    $PhoneNumber           = $_POST['PhoneNumber'];
    $HomeAddress           = $_POST['HomeAddress'];

    // File handling for DriversLicense
    $driversLicenseFile = file_get_contents($_FILES['DriversLicense']['tmp_name']);
    // File handling for VehicleRegistration
    $vehicleRegistrationFile = file_get_contents($_FILES['VehicleRegistration']['tmp_name']);
    // File handling for PermittoOperate
    $permittoOperateFile = file_get_contents($_FILES['PermittoOperate']['tmp_name']);

    $driverSql = "INSERT INTO driverstbl (Name, Age, PlateNumber, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress) VALUES(?,?,?,?,?,?,?,?)";
    $driverStmt = $db->prepare($driverSql);
    $driverResult = $driverStmt->execute([$Name, $Age, $PlateNumber, $driversLicenseFile, $vehicleRegistrationFile, $permittoOperateFile, $PhoneNumber, $HomeAddress]);

    if($driverResult){
        echo 'Driver Data Successfully saved.';
    } else {
        echo 'There were errors while saving the driver data.';
    }
}
























