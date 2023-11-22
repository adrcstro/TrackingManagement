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

if (isset($_POST['newsneader'], $_POST['newsdate'], $_POST['bodycontent'])) {
    $NewsHead = $_POST['newsneader'];
    $NewsDate = $_POST['newsdate'];
    $BodyContent = $_POST['bodycontent'];
   

    $NewsImageFile = $_FILES['newsimage']['name'];
    $NewsImageTmp = $_FILES['newsimage']['tmp_name'];

    // File upload functionality

    // SQL query to insert data into the database
    $sql = "INSERT INTO newsandevents (Header, Date, Body, Image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssss', $NewsHead, $NewsDate, $BodyContent, $NewsImageFile);

    if ($stmt->execute()) {
        move_uploaded_file($NewsImageTmp, "uploads/" . $NewsImageFile);
        // Display success message using SweetAlert
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: "success",
                        title: "Report Submitted Successfully",
                    }).then(function() {
                        window.location.href = "passengerdash.php";
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

$conn->close();
?>
