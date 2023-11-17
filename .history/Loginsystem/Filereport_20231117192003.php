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
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['Fileinput1'], $_POST['datefilereport'], $_POST['Fileinput3'], $_POST['Fileinput4'], $_POST['Fileinput5'], $_POST['PassSearchDriver'])) {
    $fileinput1 = $_POST['Fileinput1'];
    $Datefilereport = $_POST['datefilereport'];
    $fileinput3 = $_POST['Fileinput3'];
    $fileinput4 = $_POST['Fileinput4'];
    $fileinput5 = $_POST['Fileinput5'];
    $passSearchDriver = $_POST['PassSearchDriver'];

    $fileinput6File = $_FILES['Fileinput6']['name'];
    $fileinput6Tmp = $_FILES['Fileinput6']['tmp_name'];

    // File upload functionality

    // SQL query to insert data into the database
    $sql = "INSERT INTO complainttbl (TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, ProfofIdentity, NameofComplainee) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssss', $fileinput1, $Datefilereport, $fileinput3, $fileinput4, $fileinput5, $fileinput6File, $passSearchDriver);

    if ($stmt->execute()) {
        move_uploaded_file($fileinput6Tmp, "uploads/" . $fileinput6File);
        // Display success message using SweetAlert
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: "success",
                        title: "Report Submitted Successfully",
                    });
                });
              </script>';
    } else {
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

$conn->close();
?>
