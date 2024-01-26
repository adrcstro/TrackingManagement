<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<!-- Your other HTML code -->

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>
<body>
    
</body>
</html>

<?php
require_once('Config.php');

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




if (isset($_POST['input1'], $_POST['input2'], $_POST['datePicker'], $_POST['input3'])) {
    // Collect form data for insertion
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $datePicker = $_POST['datePicker'];
    $input3 = $_POST['input3'];

    // Prepare and bind for insertion
    $stmt = $conn->prepare("INSERT INTO admintbl (Admin, Username, DateCreated, Password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $input1, $input2, $datePicker, $input3);

    // Execute the insertion statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

    // Close the insertion statement
}






    if (isset($_POST['ItemName'], $_POST['Description'], $_POST['LostLocation'], $_POST['LostDate'], $_POST['ContactPerson'], $_POST['ContactPhone'], $_POST['ContactEmail'])) {
        $itemname = $_POST['ItemName'];
        $description = $_POST['Description'];
        $lostlocation = $_POST['LostLocation'];
        $lostdate = $_POST['LostDate'];
        $contactperson = $_POST['ContactPerson'];
        $contactphone = $_POST['ContactPhone'];
        $contactemail = $_POST['ContactEmail'];
    
      
        $ItemImageFile = $_FILES['itemimage']['name'];
        $ItemImageTmp = $_FILES['itemimage']['tmp_name'];
        
       
    
        // File upload functionality
        $ItemImage = isset($_FILES['itemimage']['name']) ? $_FILES['itemimage']['name'] : '';
      
    
        // SQL query to insert data into the database
        $sql = "INSERT INTO lostitems (ItemName, Description, LostLocation, LostDate, ContactPerson, ContactPhone, ContactEmail, itemimage) VALUES (?, ?, ?, ?, ?, ?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssss',  $itemname, $description ,  $lostlocation, $lostdate,  $contactperson, $contactphone,  $contactemail,  $ItemImage);
    
        if ($stmt->execute()) {
            // Process Driver's License file
            move_uploaded_file($ItemImageTmp, "uploads/" . $ItemImageFile);
            
            echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "Item Posted Successfully",
                        }).then(function() {
                            window.location.href = "admin.php";
                        });
                    });
                  </script>';
        } else {
            echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "' . $conn->error . '",
                        });
                    });
                  </script>';
        }
    }
    
    
    if (isset($_POST['foundItemName'], $_POST['foundDescription'], $_POST['foundLocation'], $_POST['foundDate'], $_POST['foundPerson'], $_POST['foundContactPhone'], $_POST['foundEmail'])) {
        $itemname = $_POST['foundItemName'];
        $description = $_POST['foundDescription'];
        $lostlocation = $_POST['foundLocation'];
        $lostdate = $_POST['foundDate'];
        $contactperson = $_POST['foundPerson'];
        $contactphone = $_POST['foundContactPhone'];
        $contactemail = $_POST['foundEmail'];
    
      
        $ItemImageFile = $_FILES['founditemimage']['name'];
        $ItemImageTmp = $_FILES['founditemimage']['tmp_name'];
        
       
    
        // File upload functionality
        $ItemImage = isset($_FILES['founditemimage']['name']) ? $_FILES['founditemimage']['name'] : '';
      
    
        // SQL query to insert data into the database
        $sql = "INSERT INTO founditems (ItemName, Description, FoundLocation, FoundDate, FinderPerson, FinderPhone, FinderEmail, Founditemimage) VALUES (?, ?, ?, ?, ?, ?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssss',  $itemname, $description ,  $lostlocation, $lostdate,  $contactperson, $contactphone,  $contactemail,  $ItemImage);
    
        if ($stmt->execute()) {
            // Process Driver's License file
            move_uploaded_file($ItemImageTmp, "uploads/" . $ItemImageFile);
            
            echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "Found Item Posted Successfully",
                        }).then(function() {
                            window.location.href = "admin.php";
                        });
                    });
                  </script>';
        } else {
            echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "' . $conn->error . '",
                        });
                    });
                  </script>';
        }
    }


    if (isset($_POST['newsneader'], $_POST['newstime'], $_POST['newsdate'], $_POST['bodycontent'])) {
        $NewsHead = $_POST['newsneader'];
        $time = $_POST['newstime'];
        $NewsDate = $_POST['newsdate'];
        $BodyContent = $_POST['bodycontent'];
       
    
        $NewsImageFile = $_FILES['newsimage']['name'];
        $NewsImageTmp = $_FILES['newsimage']['tmp_name'];
    
        // File upload functionality
    
        // SQL query to insert data into the database
        $sql = "INSERT INTO newsandevents (Header,Time, Date, Body, Image) VALUES (?, ?, ?, ?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('sssss', $NewsHead,$time, $NewsDate, $BodyContent, $NewsImageFile);
    
        if ($stmt->execute()) {
            move_uploaded_file($NewsImageTmp, "uploads/" . $NewsImageFile);
            // Display success message using SweetAlert
            echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "success",
                            title: "News Posted Successfully",
                        }).then(function() {
                            window.location.href = "admin.php";
                        });
                    });
                  </script>';
        }
         else {
            // Display error message using SweetAlert
            echo '<script>
                    document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                            icon: "error",
                            title: "Error",
                            text: "' . $conn->error . '",
                        });
                    });
                  </script>';
        }
    }


    if (isset($_POST['Fileinput1'], $_POST['datefilereport'], $_POST['Fileinput3'], $_POST['Fileinput4'], $_POST['Fileinput5'], $_POST['PassSearchDriver'], $_POST['Incident-Description'])) {
        $fileinput1 = $_POST['Fileinput1'];
        $Datefilereport = $_POST['datefilereport'];
        $fileinput3 = $_POST['Fileinput3'];
        $fileinput4 = $_POST['Fileinput4'];
        $fileinput5 = $_POST['Fileinput5'];
        $passSearchDriver = $_POST['PassSearchDriver'];
    $incidentreport = $_POST['Incident-Description'];
    
        $fileinput6File = $_FILES['Fileinput6']['name'];
        $fileinput6Tmp = $_FILES['Fileinput6']['tmp_name'];
    
        // File upload functionality
    
        // SQL query to insert data into the database
        $sql = "INSERT INTO complainttbl (TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, ProfofIdentity,IncidentDescription, NameofComplainee) VALUES (?,?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssss', $fileinput1, $Datefilereport, $fileinput3, $fileinput4, $fileinput5, $fileinput6File,$incidentreport, $passSearchDriver);
    
        if ($stmt->execute()) {
            move_uploaded_file($fileinput6Tmp, "uploads/" . $fileinput6File);
            // Display success message using SweetAlert
            echo 'Report Submitted Succesfully';
        }
         else {
            // Display error message using SweetAlert
            echo 'Error';
        }
    }



    if (isset($_POST['Name'], $_POST['Email'], $_POST['Emailcon'])) {
        // Collect form data for insertion
        $messagename = $_POST['Name'];
        $messageemail = $_POST['Email'];
        $messagecont = $_POST['Emailcon'];
       
    
        // Prepare and bind for insertion
        $stmt = $conn->prepare("INSERT INTO message (Name, Email, MessaCont) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $messagename, $messageemail,  $messagecont);
    
        // Execute the insertion statement
        if ($stmt->execute() === TRUE) {
            echo "Message Sent Succesfully";
        } else {
            echo "Error: " . $stmt . "<br>" . $conn->error;
        }
    
        // Close the insertion statement
    }
    
    







$conn->close();
?>
