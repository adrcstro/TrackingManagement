


<?php
require_once('Loginsystem/Config.php');

// Create a new instance of the mysqli class for database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Name'], $_POST['Email'], $_POST['Emailcon'])) {
    // Collect form data for the second insertion
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $emailcon = $_POST['Emailcon'];
   
    // Check if 'Admin' is not null before inserting
    if ( $name  !== null) {
        // Prepare and bind for the second insertion
        $stmt = $conn->prepare("INSERT INTO message (Name, Email, MessaCont) VALUES (?, ?, ?)");
        $stmt->bind_param("sss",  $name ,  $email, $emailcon);

        // Execute the second insertion statement
        if ($stmt->execute() === TRUE) {
            echo "Message Sent successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Close the second insertion statement
        $stmt->close();
    } else {
        echo "Error: 'Admin' cannot be null.";
    }
}













// Close the database connection
$conn->close();
?>
   