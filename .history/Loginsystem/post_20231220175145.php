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
    if (isset($_FILES['itemImage'])) {
        $ItemImageFile = $_FILES['itemImage']['name'];
        $ItemImageTmp = $_FILES['itemImage']['tmp_name'];

        // File upload functionality
        $ItemImage = isset($_FILES['itemImage']['name']) ? $_FILES['itemImage']['name'] : '';

        // SQL query to insert data into the database
        $sql = "INSERT INTO lostitems (ItemName, Description, LostLocation, LostDate, ContactPerson, ContactPhone, ContactEmail, itemimage) VALUES (?, ?, ?, ?, ?, ?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('ssssssss', $itemname, $description, $contactphone, $lostlocation, $lostdate, $contactperson, $contactemail, $ItemImage);

        if ($stmt->execute()) {
            // Process Driver's License file
            move_uploaded_file($ItemImageTmp, "uploads/" . $ItemImageFile);

            // Return a success message
            echo "Your item has been posted successfully.";
        } else {
            // Return an error message
            echo "Error: There was an issue posting your item. Please try again.";
        }
    } else {
        // Return an error message
        echo "Error: 'itemImage' key not found in the uploaded files.";
    }
}

$conn->close();
?>
