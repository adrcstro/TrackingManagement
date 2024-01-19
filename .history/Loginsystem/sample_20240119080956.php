


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
    $Itemimage = isset($_FILES['itemimage']['name']) ? $_FILES['itemimage']['name'] : '';
    

    // SQL query to insert data into the database
    $sql = "INSERT INTO lostitems (ItemName, Description, LostLocation, LostDate, ContactPerson, ContactPhone, ContactEmail, itemimage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssss', $itemname, $description, $lostlocation, $lostdate, $contactperson, $contactphone, $contactemail, $Itemimage);

    if ($stmt->execute()) {

        move_uploaded_file($ItemImageTmp, "uploads/" . $ItemImageFile);

      
     
        echo "Item Posted successfully. \n View the found table that matches your Item Description.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
  
}

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
