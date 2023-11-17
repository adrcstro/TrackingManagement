<?php
require_once('Config.php');




if (isset($_POST['Fileinput1'], $_POST['datefilereport'], $_POST['Fileinput3'], $_POST['Fileinput4'], $_POST['Fileinput5'], $_POST['Fileinput6'])) {
    $Fileinput1 = $_POST['Fileinput1'];
    $datefilereport = $_POST['datefilereport'];
    $Fileinput3 = $_POST['Fileinput3'];
    $Fileinput4 = $_POST['Fileinput4'];
    $Fileinput5 = $_POST['Fileinput5'];
    $Fileinput6 = $_POST['Fileinput6'];

    
    
    $PassSearchDriverFile = $_FILES['PassSearchDriver']['name'];
    $PassSearchDriverTmp = $_FILES['PassSearchDriver']['tmp_name'];
 

    // File upload functionality
    
    $PassSearchDriver = isset($_FILES['PassSearchDriver']['name']) ? $_FILES['PassSearchDriver']['name'] : '';

    // SQL query to insert data into the database
    $sql = "INSERT INTO complainttbl (TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, ProfofIdentity, NameofComplainee) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssss', $Fileinput1, $datefilereport, $Fileinput3, $Fileinput4, $Fileinput5, $Fileinput6, $PassSearchDriver);

    if ($stmt->execute()) {


       
        
        // Process Vehicle Registration file
        move_uploaded_file($PassSearchDriverTmp, "uploads/" . $PassSearchDriverFile);




        echo "Your Report created successfully. \nYour name serves as your Username and PlateNumber serves as your Password.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
