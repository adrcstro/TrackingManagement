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
if(isset($_POST['Name'], $_POST['Age'], $_POST['PlateNumber'], $_FILES['DriversLicense'], $_FILES['VehicleRegistration'], $_FILES['PermittoOperate'], $_POST['PhoneNumber'], $_POST['HomeAddress'])){
    $Name                  = $_POST['Name'];
    $Age                   = $_POST['Age'];
    $PlateNumber           = $_POST['PlateNumber'];
    
    $DriversLicense        = uploadFile($_FILES['DriversLicense']);
    $VehicleRegistration   = uploadFile($_FILES['VehicleRegistration']);
    $PermittoOperate       = uploadFile($_FILES['PermittoOperate']);
    
    $PhoneNumber           = $_POST['PhoneNumber'];
    $HomeAddress           = $_POST['HomeAddress'];

    $driverSql = "INSERT INTO driverstbl (Name, Age, PlateNumber, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress) VALUES(?,?,?,?,?,?,?,?)";
    $driverStmt = $db->prepare($driverSql);
    $driverResult = $driverStmt->execute([$Name, $Age, $PlateNumber, $DriversLicense, $VehicleRegistration, $PermittoOperate, $PhoneNumber, $HomeAddress]);

    if($driverResult){
        echo 'Driver Data Successfully saved.';
    }else{
        echo 'There were errors while saving the driver data.';
    }
}

function uploadFile($file){
    $target_dir = "uploads/"; // Directory where files will be saved
    $target_file = $target_dir . basename($file["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($file["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        return null;
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($file["tmp_name"], $target_file)) {
            return $target_file;
        } else {
            echo "Sorry, there was an error uploading your file.";
            return null;
        }
    }
}


























