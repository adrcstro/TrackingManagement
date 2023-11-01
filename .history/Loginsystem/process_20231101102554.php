<?php
require_once('Config.php');
?>

<?php
if(isset($_POST)){
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

if(isset($_POST)){
    $Name                  = $_POST['Name'];
    $Age                   = $_POST['Age'];
    $PlateNumber           = $_POST['PlateNumber'];
    $DriversLicense        = $_POST['DriversLicense'];
    $VehicleRegistration   = $_POST['VehicleRegistration'];
    $PermittoOperate       = $_POST['PermittoOperate'];
    $PhoneNumber           = $_POST['PhoneNumber'];
    $HomeAddress           = $_POST['HomeAddress'];

    $driverSql = "INSERT INTO drivertbl (Name, Age, PlateNumber, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress) VALUES(?,?,?,?,?,?,?,?)";
    $driverStmt = $db->prepare($driverSql);
    $driverResult = $driverStmt->execute([$Name, $Age, $PlateNumber, $DriversLicense, $VehicleRegistration, $PermittoOperate, $PhoneNumber, $HomeAddress]);

    if($driverResult){
        echo 'Driver Data Successfully saved.';
    }else{
        echo 'There were errors while saving the driver data.';
    }
}



























