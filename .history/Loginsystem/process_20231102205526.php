<?php
require_once('Config.php');

?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
$conn = new mysqli($servername, $username, $password, $dbname);

  

if(isset($_POST['Name'], $_POST['Age'], $_POST['Gender'], $_POST['Phone'], $_POST['HomeAddress'], $_POST['Email'], $_POST['Password'])){
    $Name         = $_POST['Name'];
    $Age          = $_POST['Age'];
    $Gender       = $_POST['Gender'];
    $Phone        = $_POST['Phone'];
    $HomeAddress  = $_POST['HomeAddress'];
    $Email        = $_POST['Username'];
    $Password     = sha1($_POST['Password']);

    $passengerSql = "INSERT INTO passengertbl (Username, Age, Gender, Phone, HomeAddress, Email, Password) VALUES(?,?,?,?,?,?,?)";
    $passengerStmt = $conn->prepare($passengerSql);
    $passengerResult = $passengerStmt->execute([$Username, $Age, $Gender, $Phone, $HomeAddress, $Email, $Password]);

    if($passengerResult){
        echo 'Passenger Data Successfully saved.';
    }else{
        echo 'There were errors while saving the passenger data.';
    }
}



if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
$Age = isset($_POST['Age']) ? $_POST['Age'] : '';
$Password = isset($_POST['Password']) ? $_POST['Password'] : '';
$PhoneNumber = isset($_POST['PhoneNumber']) ? $_POST['PhoneNumber'] : '';
$HomeAddress = isset($_POST['HomeAddress']) ? $_POST['HomeAddress'] : '';

$DriversLicense = isset($_FILES['DriversLicense']['name']) ? $_FILES['DriversLicense']['name'] : '';
$VehicleRegistration = isset($_FILES['VehicleRegistration']['name']) ? $_FILES['VehicleRegistration']['name'] : '';
$PermittoOperate = isset($_FILES['PermittoOperate']['name']) ? $_FILES['PermittoOperate']['name'] : '';

// Code for file upload

// SQL query to insert data into the database
$sql = "INSERT INTO driverstbl (Username, Age, Password, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress) VALUES ('$Username', '$Age', '$Password', '$DriversLicense', '$VehicleRegistration', '$PermittoOperate', '$PhoneNumber', '$HomeAddress')";

if ($conn->query($sql) === TRUE) {
    echo "Your record created successfully";
    
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

























