


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
    $stmt->bind_param('ssssssss', $itemname, $description, $lostlocation, $lostdate, $contactperson, $contactphone, $contactemail, $Itemimage);

    if ($stmt->execute()) {
        move_uploaded_file($ItemImageTmp, "uploads/" . $ItemImageFile);
        // Display success message using SweetAlert
        echo '<script>
                document.addEventListener("DOMContentLoaded", function() {
                    Swal.fire({
                        icon: "success",
                        title: "Lost Ite, Posted Successfully",
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


