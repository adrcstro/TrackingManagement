<?php
// Establish a database connection
$dsn = 'mysql:host=localhost;dbname=plate-to-place-v-tracking';
$username = "root";
$password = "";
try {
    $db = new PDO($dsn, $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

if(isset($_POST['Register'])) {
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $Gender = $_POST['Gender'];
    $Phone = $_POST['Phone'];
    $HomeAddress = $_POST['HomeAddress'];
    $Email = $_POST['Email'];
    $Password = sha1($_POST['Password']);

    $sql = "INSERT INTO passengertbl (Name, Age, Gender, Phone, HomeAddress, Email, Password ) VALUES(?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$Name, $Age, $Gender, $Phone, $HomeAddress, $Email, $Password]);
    if($result) {
        echo 'Passenger details were successfully saved.';
    } else {
        echo 'There were errors while saving the passenger data.';
    }
} else if(isset($_POST['Register'])) {
    $Name = $_POST['Name'];
    $Age = $_POST['Age'];
    $PlateNumber = $_POST['PlateNumber'];
    $DriversLicense = $_POST['DriversLicense'];
    $VehicleRegistration = $_POST['VehicleRegistration'];
    $PermittoOperate = $_POST['PermittoOperate'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $HomeAddress = $_POST['HomeAddress'];

    $sql = "INSERT INTO drivertbl (Name, Age, PlateNumber, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress ) VALUES(?,?,?,?,?,?,?,?)";
    $stmtinsert = $db->prepare($sql);
    $result = $stmtinsert->execute([$Name, $Age, $PlateNumber, $DriversLicense, $VehicleRegistration, $PermittoOperate, $PhoneNumber, $HomeAddress]);
    if($result) {
        echo 'Driver details were successfully saved.';
    } else {
        echo 'There were errors while saving the driver data.';
    }
} else {
    echo 'No data';
}
?>
