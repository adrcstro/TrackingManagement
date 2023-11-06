
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






