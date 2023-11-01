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

if(isset($_POST['Name'], $_POST['Age'], $_POST['PlateNumber'], $_POST['PhoneNumber'], $_POST['HomeAddress'])){
    $Name                  = $_POST['Name'];
    $Age                   = $_POST['Age'];
    $PlateNumber           = $_POST['PlateNumber'];
    $PhoneNumber           = $_POST['PhoneNumber'];
    $HomeAddress           = $_POST['HomeAddress'];

    // Upload files
    $uploadDirectory = "uploads/"; // Define your upload directory
    $DriversLicenseFileName = basename($_FILES['DriversLicense']['name']);
    $VehicleRegistrationFileName = basename($_FILES['VehicleRegistration']['name']);
    $PermittoOperateFileName = basename($_FILES['PermittoOperate']['name']);

    $DriversLicenseFilePath = $uploadDirectory . $DriversLicenseFileName;
    $VehicleRegistrationFilePath = $uploadDirectory . $VehicleRegistrationFileName;
    $PermittoOperateFilePath = $uploadDirectory . $PermittoOperateFileName;

    if (move_uploaded_file($_FILES['DriversLicense']['tmp_name'], $DriversLicenseFilePath) &&
        move_uploaded_file($_FILES['VehicleRegistration']['tmp_name'], $VehicleRegistrationFilePath) &&
        move_uploaded_file($_FILES['PermittoOperate']['tmp_name'], $PermittoOperateFilePath)) {

        // Insert data into database
        $driverSql = "INSERT INTO driverstbl (Name, Age, PlateNumber, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress) VALUES(?,?,?,?,?,?,?,?)";
        $driverStmt = $db->prepare($driverSql);
        $driverResult = $driverStmt->execute([$Name, $Age, $PlateNumber, $DriversLicenseFilePath, $VehicleRegistrationFilePath, $PermittoOperateFilePath, $PhoneNumber, $HomeAddress]);

        if($driverResult){
            echo 'Driver Data Successfully saved.';
        }else{
            echo 'There were errors while saving the driver data.';
        }
    } else {
        echo 'File upload failed. Please check your file uploads.';
    }
}























