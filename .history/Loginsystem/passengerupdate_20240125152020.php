
 
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
        

        if (!empty($selectedPassenger)) {
            $stmt = $conn->prepare("UPDATE passengertbl SET Age=?, Gender=?, Phone=?, HomeAddress=? WHERE Name=?");
            $stmt->bind_param("sssss", $passengerAge, $passengerGender, $passengerPhone, $passengerAddress, $selectedPassenger);

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
                // Move uploaded files to the specified directory
                move_uploaded_file($_FILES['DriversDriversLicense']['tmp_name'], "uploads/" . $driversDriversLicense);
                move_uploaded_file($_FILES['DriverVehicleRegistration']['tmp_name'], "uploads/" . $driversVehicleRegistration);
                move_uploaded_file($_FILES['DriversPermittoOperate']['tmp_name'], "uploads/" . $driversPermittoOperate);
    
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
            } else {
                echo "Error updating complaint record: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Please select a complaint to update";
        }
    }

    // Update News
    if (isset($_POST['NewsID'])) {
        $newsid = $_POST['NewsID'];
        $headerofreport = $_POST['HeaderofNews'];
        $newsTime= $_POST['NewsTime'];
        $dateofreport = $_POST['DateofNews'];
        $bodytext = $_POST['Bodytext'];

        if (!empty($newsid)) {
            $stmt = $conn->prepare("UPDATE newsandevents SET Header=?,Time=?,Date=?, Body=? WHERE NewsID=?");
            $stmt->bind_param("sssss",   $headerofreport,$newsTime,  $dateofreport,  $bodytext,$newsid);

            if ($stmt->execute()) {
                echo "News record updated successfully";
            } else {
                echo "Error updating news record: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Please select a news item to update";
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
        } else {
            echo "Error updating Item record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please select a Item to update";
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
            echo "found Items updated successfully";
        } else {
            echo "Error updating found Item record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please select a Item to update";
    }
}




// Update Complaint Status
if (isset($_POST['processreportID'])) {
    $ComStatID = $_POST['processreportID'];
    $Comstatstatus = $_POST['processStatus'];
    $Comstatdate = $_POST['processdate'];
    $Comstattime = $_POST['processtime'];
    $Comstatolace = $_POST['processplace'];
  

    if (!empty($ComStatID)) {
        $stmt = $conn->prepare("UPDATE complainttbl SET ComplainStatus=?, hearingdate=?, hearingtime=?, hearingplace=?  WHERE ComplaintID=?");
        $stmt->bind_param("sssss", $Comstatstatus, $Comstatdate,  $Comstattime, $Comstatolace,$ComStatID );

        if ($stmt->execute()) {
            echo "Status Display Complete";
        } else {
            echo "Error updating complaint record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please select a complaint to update";
    }
}


if (isset($_POST['reprocessreportID'])) {
    $reComStatID = $_POST['reprocessreportID'];
    $reComstatstatus = $_POST['reprocessStatus'];
    $reComstatdate = $_POST['reprocessdate'];
    $reComstattime = $_POST['reprocesstime'];
    $reComstatolace = $_POST['reprocessplace'];
  

    if (!empty($reComStatID)) {
        $stmt = $conn->prepare("UPDATE complainttbl SET ComplainStatus=?, hearingdate=?, hearingtime=?, hearingplace=?  WHERE ComplaintID=?");
        $stmt->bind_param("sssss", $reComstatstatus, $reComstatdate,  $reComstattime, $reComstatolace,$reComStatID );

        if ($stmt->execute()) {
            echo "Status Display Complete";
        } else {
            echo "Error updating complaint record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please select a complaint to update";
    }
}



if (isset($_POST['Confirmid'])) {
    $confirmid = $_POST['Confirmid'];
    $confirmstatus = $_POST['ConfirmStatus'];
   
  

    if (!empty( $confirmid)) {
        $stmt = $conn->prepare("UPDATE complainttbl SET DriverConfirmation=? WHERE ComplaintID=?");
        $stmt->bind_param("ss",  $confirmstatus, $confirmid);

        if ($stmt->execute()) {
            echo "Response Set Succesfully";
        } else {
            echo "Error updating complaint record: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Please select a complaint to update";
    }
}


if (isset($_POST['PASSConfirmid'])) {
    $PASSconfirmid = $_POST['PASSConfirmid'];
    $PASSconfirmstatus = $_POST['PASSConfirmStatus'];
   
  

    if (!empty( $PASSconfirmid)) {
        $stmt = $conn->prepare("UPDATE complainttbl SET PassengerConfirmation=? WHERE ComplaintID=?");
        $stmt->bind_param("ss",  $PASSconfirmstatus, $PASSconfirmid);

        if ($stmt->execute()) {
            echo "Response Set Succesfully";
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
