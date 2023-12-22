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

if (
    isset($_POST['ItemName'], $_POST['ContactPhone'], $_POST['Description'], $_POST['LostLocation'], $_POST['LostDate'], $_POST['ContactPerson'], $_POST['ContactEmail'])
) {
    $itemname = $_POST['ItemName'];
    $contactphone = $_POST['ContactPhone'];
    $description = $_POST['Description'];
    $lostlocation = $_POST['LostLocation'];
    $lostdate = $_POST['LostDate'];
    $contactperson = $_POST['ContactPerson'];
    $contactemail = $_POST['ContactEmail'];

    // Check if 'itemimage' key exists in the $_FILES array
    if (isset($_FILES['itemimage'])) {
        $ItemImageFile = $_FILES['itemimage']['name'];
        $ItemImageTmp = $_FILES['itemimage']['tmp_name'];

        // File upload functionality
        $ItemImage = isset($_FILES['itemimage']['name']) ? $_FILES['itemimage']['name'] : '';

        // SQL query to insert data into the database
        $sql = "INSERT INTO lostitems (ItemName, Description, LostLocation, LostDate, ContactPerson, ContactPhone, ContactEmail, itemimage) VALUES (?, ?, ?, ?, ?, ?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssss', $itemname, $description, $contactphone, $lostlocation, $lostdate, $contactperson, $contactemail, $ItemImage);

        if ($stmt->execute()) {
            // Process Driver's License file
            move_uploaded_file($ItemImageTmp, "uploads/" . $ItemImageFile);

            // Display SweetAlert success message
            echo "<script>
                    swal('Success', 'Your item has been posted successfully.', 'success').then(function() {
                        // You can redirect the user to another page or perform additional actions here
                        // window.location.href = 'admin.php';
                    });
                 </script>";
        } else {
            // Display SweetAlert error message
            echo "<script>
                    swal('Error', 'There was an issue posting your item. Please try again.', 'error');
                 </script>";
        }
    } else {
        // Display SweetAlert error message
        echo "<script>
                swal('Error', 'itemImage key not found in the uploaded files.', 'error');
             </script>";
    }
}

$conn->close();
?>
