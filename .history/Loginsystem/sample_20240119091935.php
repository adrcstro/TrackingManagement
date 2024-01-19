


<?php
// Assuming you have a valid database connection, replace these with your actual details
require_once('Config.php');
// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if all required fields are set

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

    // SQL query to insert data into the database
    $sql = "INSERT INTO lostitems (ItemName, Description, LostLocation, LostDate, ContactPerson, ContactPhone, ContactEmail, itemimage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssss', $itemname, $description, $lostlocation, $lostdate, $contactperson, $contactphone, $contactemail,  $ItemImageFile);

    if ($stmt->execute()) {
        move_uploaded_file($ItemImageTmp, "uploads/" . $ItemImageFile);
        // Display success message using SweetAlert
        echo 'Lost Item Posted Succesfully';
    }
     else {
        // Display error message using SweetAlert
        echo 'Error';
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

    // SQL query to insert data into the database
    $sql = "INSERT INTO founditems (ItemName, Description, FoundLocation, FoundDate, FinderPerson, FinderPhone, FinderEmail, Founditemimage) VALUES (?, ?, ?, ?, ?, ?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssss',  $itemname, $description ,  $lostlocation, $lostdate,  $contactperson, $contactphone,  $contactemail,  $ItemImageFile);

    if ($stmt->execute()) {
        move_uploaded_file($ItemImageTmp, "uploads/" . $ItemImageFile);
        // Display success message using SweetAlert
        echo 'Found Items Posted Succesfully';
    }
     else {
        // Display error message using SweetAlert
        echo 'Error';
    }
}











