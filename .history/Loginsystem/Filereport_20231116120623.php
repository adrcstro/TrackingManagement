<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['Fileinput1'], $_POST['datefilereport'], $_POST['Fileinput3'], $_POST['Fileinput4'], $_POST['Fileinput5'], $_POST['Fileinput6'])) {
    $fileinput1 = $_POST['Fileinput1'];
    $Datefilereport = $_POST['datefilereport'];
    $fileinput3 = $_POST['Fileinput3'];
    $fileinput4 = $_POST['Fileinput4'];
    $fileinput5 = $_POST['Fileinput5'];
    $fileinput6 = $_POST['Fileinput6'];

    
    
    $passSearchDriverFile = $_FILES['PassSearchDriver']['name'];
    $passSearchDriverTmp = $_FILES['PassSearchDriver']['tmp_name'];
 

    // File upload functionality
    
    $passSearchDriver = isset($_FILES['PassSearchDriver']['name']) ? $_FILES['PassSearchDriver']['name'] : '';

    // SQL query to insert data into the database
    $sql = "INSERT INTO complainttbl (TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, ProfofIdentity, NameofComplainee) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssss', $fileinput1, $Datefilereport, $fileinput3, $fileinput4, $fileinput5, $fileinput6, $passSearchDriver);

    if ($stmt->execute()) {


       
        
        // Process Vehicle Registration file
        move_uploaded_file($passSearchDriverTmp, "uploads/" . $passSearchDriverFile);




        echo "Your Report created successfully. \nYour name serves as your Username and PlateNumber serves as your Password.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>