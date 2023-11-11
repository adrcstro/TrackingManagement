<?php
require_once('Config.php');

if(isset($_POST['username'])) {
    $selectedDriver = $_POST['username'];

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $conn->prepare("SELECT Username, Age, Password, DriversLicense, VehicleRegistration, PermittoOperate, PhoneNumber, HomeAddress FROM driverstbl WHERE Username = :username");
        $stmt->bindParam(':username', $selectedDriver);
        $stmt->execute();

        // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $driverData = $stmt->fetch();

        // Return the data as JSON
        echo json_encode($driverData);
    } catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $conn = null;
}
?>
