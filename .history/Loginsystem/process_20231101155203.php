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

    // Define a directory to save the uploaded files
    $uploadDirectory = 'D:\images';

    // Check if the directory exists, if not create it
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Process the uploaded files
    $driversLicensePath = saveUploadedFile('DriversLicense', $uploadDirectory);
    $vehicleRegistrationPath = saveUploadedFile('VehicleRegistration', $uploadDirectory);
    $permittoOperatePath = saveUploadedFile('PermittoOperate', $uploadDirectory);

    // Insert data into the database
    $driverSql = "INSERT INTO driverstbl (Name, Age, PlateNumber, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress) VALUES(?,?,?,?,?,?,?,?)";
    $driverStmt = $db->prepare($driverSql);
    $driverResult = $driverStmt->execute([$Name, $Age, $PlateNumber, $driversLicensePath, $vehicleRegistrationPath, $permittoOperatePath, $PhoneNumber, $HomeAddress]);

    if($driverResult){
        echo 'Driver Data Successfully saved.';
    } else {
        echo 'There were errors while saving the driver data.';
    }
}

// Function to save the uploaded file and return the file path
function saveUploadedFile($fieldName, $uploadDirectory) {
    if (isset($_FILES[$fieldName]) && $_FILES[$fieldName]['error'] === UPLOAD_ERR_OK) {
        $fileName = basename($_FILES[$fieldName]['name']);
        $uploadFilePath = $uploadDirectory . $fileName;
        if (move_uploaded_file($_FILES[$fieldName]['tmp_name'], $uploadFilePath)) {
            return $uploadFilePath;
        }
    }
    return null;
}






















