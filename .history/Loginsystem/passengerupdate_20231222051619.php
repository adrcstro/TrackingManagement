

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
                echo "<script>showSweetAlert('success', 'Passenger record updated successfully');</script>";
            } else {
                echo "Error updating passenger record: " . $stmt->error;
                echo "<script>showSweetAlert('error', 'Error updating passenger record: " . $stmt->error . "');</script>";
            }
    
            $stmt->close();
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
                echo "<script>showSweetAlert('success', 'Driver record updated successfully');</script>";
            } else {
                echo "Error updating driver record: " . $stmt->error;
                echo "<script>showSweetAlert('error', 'Error updating driver record: " . $stmt->error . "');</script>";
            }
    
            $stmt->close();
        }
    }

    // Update Complaint
    if (isset($_POST['ComplaintID'])) {
        $complainid = $_POST['ComplaintID'];
        $typeofComplaint = $_POST['TypeofComplaint'];
        $dateofReport = $_POST['DateofReport'];
        $complainantName = $_POST['ComplainantName'];
        $contactNumber = $_POST['ContactNumber'];
        $address = $_POST['Address'];
        $nameofComplainee = $_POST['NameofComplainee'];
        $Incidentreport = $_POST['IncidentDescription'];

        if (!empty($complainid)) {
            $stmt = $conn->prepare("UPDATE complainttbl SET TypeofComplaint=?, DateofReport=?, ComplainantName=?, ContactNumber=?, Address=? ,NameofComplainee=?,IncidentDescription=? WHERE ComplaintID=?");
            $stmt->bind_param("ssssssss",  $typeofComplaint, $dateofReport,  $complainantName,  $contactNumber,  $address,  $nameofComplainee,$Incidentreport,$complainid);

            if ($stmt->execute()) {
                echo "Complaint record updated successfully";
                echo "<script>showSweetAlert('success', 'Complaint record updated successfully');</script>";
            } else {
                echo "Error updating complaint record: " . $stmt->error;
                echo "<script>showSweetAlert('error', 'Error updating complaint record: " . $stmt->error . "');</script>";
            }
    
            $stmt->close();
        }
    
    }

    // Update News
    if (isset($_POST['NewsID'])) {
        $newsid = $_POST['NewsID'];
        $headerofreport = $_POST['HeaderofNews'];
        $dateofreport = $_POST['DateofNews'];
        $bodytext = $_POST['Bodytext'];

        if (!empty($newsid)) {
            $stmt = $conn->prepare("UPDATE newsandevents SET Header=?, Date=?, Body=? WHERE NewsID=?");
            $stmt->bind_param("ssss",   $headerofreport,  $dateofreport,  $bodytext,$newsid);

            if ($stmt->execute()) {
                echo "News record updated successfully";
                echo "<script>showSweetAlert('success', 'News record updated successfully');</script>";
            } else {
                echo "Error updating news record: " . $stmt->error;
                echo "<script>showSweetAlert('error', 'Error updating news record: " . $stmt->error . "');</script>";
            }
    
            $stmt->close();
        }
    }


   // Update lost item
   if (isset($_POST['LostItemsID'])) {
    $lostltemid = $_POST['LostItemsID'];
    $itemname = $_POST['updateItemName'];
    $description = $_POST['updateDescription'];
    $lostlocation = $_POST['updateLostLocation'];
    $lostdate = $_POST['updateLostDate'];
    $contactperson = $_POST['updateContactPerson'];
    $contactphone = $_POST['updateContactPhone'];
    $contactemail = $_POST['updateContactEmail'];



    if (!empty($lostltemid)) {
        $stmt = $conn->prepare("UPDATE lostitems SET ItemName=?, Description=?, LostLocation=?, LostDate=?, ContactPerson=?, ContactPhone=?, ContactEmail=? WHERE LostItemsID=?");
        $stmt->bind_param("ssssssss",$itemname, $description, $lostlocation, $lostdate,  $contactperson,  $contactphone,$contactemail, $lostltemid);

        if ($stmt->execute()) {
            echo "Items updated successfully";
            echo "<script>showSweetAlert('success', 'Items updated successfully');</script>";
        } else {
            echo "Error updating Item record: " . $stmt->error;
            echo "<script>showSweetAlert('error', 'Error updating Item record: " . $stmt->error . "');</script>";
        }

        $stmt->close();
    }
}

   // Update found
   if (isset($_POST['FoundItemsID'])) {
    $foundlostltemid = $_POST['FoundItemsID'];
    $founditemname = $_POST['foundupdateItemName'];
    $founddescription = $_POST['foundupdateDescription'];
    $foundlostlocation = $_POST['foundupdateLostLocation'];
    $foundlostdate = $_POST['foundupdateLostDate'];
    $foundcontactperson = $_POST['foundupdateContactPerson'];
    $foundcontactphone = $_POST['foundupdateContactPhone'];
    $foundcontactemail = $_POST['foundupdateContactEmail'];



    if (!empty($foundlostltemid)) {
        $stmt = $conn->prepare("UPDATE founditems SET ItemName=?, Description=?, FoundLocation=?, FoundDate=?, FinderPerson=?, FinderPhone=?, FinderEmail=? WHERE FoundItemsID=?");
        $stmt->bind_param("ssssssss",$founditemname, $founddescription, $foundlostlocation, $foundlostdate,  $foundcontactperson,  $foundcontactphone,$foundcontactemail, $foundlostltemid);

        if ($stmt->execute()) {
            echo "Found items updated successfully";
            echo "<script>showSweetAlert('success', 'Found items updated successfully');</script>";
        } else {
            echo "Error updating found item record: " . $stmt->error;
            echo "<script>showSweetAlert('error', 'Error updating found item record: " . $stmt->error . "');</script>";
        }

        $stmt->close();
    }

}


}

$conn->close();
?>
