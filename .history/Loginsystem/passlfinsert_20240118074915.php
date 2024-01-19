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


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['ItemName'], $_POST['Description'], $_POST['LostLocation'], $_POST['LostDate'], $_POST['ContactPerson'], $_POST['ContactPhone'], $_POST['ContactEmail'])) {
    $itemname = $_POST['ItemName'];
    $description = $_POST['Description'];
    $lostlocation = $_POST['LostLocation'];
    $lostdate = $_POST['LostDate'];
    $contactperson = $_POST['ContactPerson'];
    $contactphone = $_POST['ContactPhone'];
    $contactemail = $_POST['ContactEmail'];

    // Check if the 'itemimage' key exists in the $_FILES array
    if (isset($_FILES['itemimage'])) {
        $ItemImageFile = $_FILES['itemimage']['name'];
        $ItemImageTmp = $_FILES['itemimage']['tmp_name'];
    } else {
        $ItemImageFile = '';
        $ItemImageTmp = '';
    }

    // SQL query to insert data into the database
    $sql = "INSERT INTO lostitems (ItemName, Description, LostLocation, LostDate, ContactPerson, ContactPhone, ContactEmail, itemimage) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
    
    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ssssssss', $itemname, $description, $lostlocation, $lostdate, $contactperson, $contactphone, $contactemail, $ItemImageFile);

    // Execute the statement
    if ($stmt->execute()) {
        // Process image file
        if (!empty($ItemImageFile)) {
            move_uploaded_file($ItemImageTmp, "uploads/" . $ItemImageFile);
        }

        // Close the database connection
        $stmt->close();
        $conn->close();

        $response = array('status' => 'success', 'message' => 'Item Posted Successfully');
        echo json_encode($response);
    } else {
        $response = array('status' => 'error', 'message' => $stmt->error);
        echo json_encode($response);
    }
} else {
    $response = array('status' => 'error', 'message' => 'Incomplete data received');
    echo json_encode($response);
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
                            window.location.href = "passengerdash.php";
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
$conn->close();
?>
