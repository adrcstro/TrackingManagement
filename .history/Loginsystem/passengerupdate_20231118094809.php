<?php
require_once('Config.php');

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update Passenger
    if (isset($_POST['SelectPassenger'])) {
        $selectedPassenger = $_POST['SelectPassenger'];
        $passengerAge = $_POST['PassengerAge'];
        $passengerGender = $_POST['PassengerGender'];
        $passengerPhone = $_POST['PassengerPhone'];
        $passengerAddress = $_POST['PassengerAddress'];
        $passengerEmail = $_POST['PassengerEmail'];

        if (!empty($selectedPassenger)) {
            $stmt = $conn->prepare("UPDATE passengertbl SET Age=?, Gender=?, Phone=?, HomeAddress=?, Username=? WHERE Name=?");
            $stmt->bind_param("ssssss", $passengerAge, $passengerGender, $passengerPhone, $passengerAddress, $passengerEmail, $selectedPassenger);

            if ($stmt->execute()) {
                echo "Passenger record updated successfully";
            } else {
                echo "Error updating passenger record: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Please select a passenger to update";
        }
    }

    // Update Driver
    if (isset($_POST['SelectDriver'])) {
        $selectedDriver = $_POST['SelectDriver'];
        $driverAge = $_POST['DriverAge'];
        $driversPlanteNumber = $_POST['DriverPlanteNumber'];
        $driversDriversLicense = $_FILES['DriversDriversLicense']['name'];
        $driversVehicleRegistration = $_FILES['DriverVehicleRegistration']['name'];
        $driversPermittoOperate = $_FILES['DriversPermittoOperate']['name'];
        $driversPhoneNumber = $_POST['DriversPhoneNumber'];
        $driversHomeAddress = $_POST['DriversHomeAddress'];

        if (!empty($selectedDriver)) {
            $stmt = $conn->prepare("UPDATE driverstbl SET Age=?, Password=?, DriversLicense=?, VehicleRegistration=?, PermittoOperate=?, PhoneNumber=?, HomeAddress=?  WHERE Username=?");
            $stmt->bind_param("ssssssss", $driverAge, $driversPlanteNumber, $driversDriversLicense, $driversVehicleRegistration, $driversPermittoOperate, $driversPhoneNumber, $driversHomeAddress, $selectedDriver);

            if ($stmt->execute()) {
                echo "Driver record updated successfully";
            } else {
                echo "Error updating driver record: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Please select a driver to update";
        }
    }

    // Update Complaint
    if (isset($_POST['ComplaintID'])) {
        $typeofComplaint = $_POST['TypeofComplaint'];
        $dateofReport = $_POST['DateofReport'];
        $complainantName = $_POST['ComplainantName'];
        $contactNumber = $_POST['ContactNumber'];
        $address = $_POST['Address'];
        $nameofComplainee = $_POST['NameofComplainee'];

        if (!empty($selectedPassenger)) {
            $stmt = $conn->prepare("UPDATE complainttbl SET TypeofComplaint=?, DateofReport=?, ComplainantName=?, ContactNumber=?, UsernameAddress=? ,NameofComplainee=? WHERE Name=?");
            $stmt->bind_param("ssssss",  $typeofComplaint, $dateofReport,  $complainantName,  $contactNumber,  $address,  $nameofComplainee);

            if ($stmt->execute()) {
                echo "Report record updated successfully";
            } else {
                echo "Error updating complaint record: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Please select a complaint to update";
        }
    }
}

$conn->close();
?>
