<?php
require_once('Config.php');
?>

<?php
if(isset($_POST['Name'], $_POST['Age'], $_POST['PlateNumber'], $_FILES['DriversLicense'], $_FILES['VehicleRegistration'], $_FILES['PermittoOperate'], $_POST['PhoneNumber'], $_POST['HomeAddress'])){
    $Name                  = $_POST['Name'];
    $Age                   = $_POST['Age'];
    $PlateNumber           = $_POST['PlateNumber'];
    $DriversLicense        = $_FILES['DriversLicense'];
    $VehicleRegistration   = $_FILES['VehicleRegistration'];
    $PermittoOperate       = $_FILES['PermittoOperate'];
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
