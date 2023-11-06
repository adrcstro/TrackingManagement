
<?php
require_once('Config.php');

?>
<?php

// Set up your database connection details

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted for insertion
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data for insertion
    $input1 = $_POST['input1'];
    $input2 = $_POST['input2'];
    $datePicker = $_POST['datePicker'];
    $input3 = $_POST['input3'];

    // Prepare and bind for insertion
    $stmt = $conn->prepare("INSERT INTO admintbl (Admin, Username, DateCreated, Password) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $input1, $input2, $datePicker, $input3);

    // Execute the insertion statement
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt . "<br>" . $conn->error;
    }

    // Close the insertion statement
    $stmt->close();
}

// Close the database connection
$conn->close();
?>






<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the input field is set
    if (isset($_POST['input1'])) {
        $selectedAdmin = $_POST['input1'];

        // Perform the delete operation
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind
        $stmt = $conn->prepare("DELETE FROM admintbl WHERE Admin = ?");
        $stmt->bind_param("s", $selectedAdmin);

        // Execute the statement
        if ($stmt->execute() === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Please select an option";
    }
}
?>

