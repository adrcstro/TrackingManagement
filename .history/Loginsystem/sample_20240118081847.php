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

?>
