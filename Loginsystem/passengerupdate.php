<?php
require_once('Config.php');

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedPassenger = $_POST['SelectPassenger'];
    $passengerAge = $_POST['PassengerAge'];
    $passengerGender = $_POST['PassengerGender'];
    $passengerPhone = $_POST['PassengerPhone'];
    $passengerAddress = $_POST['PassengerAddress'];
    $passengerEmail = $_POST['PassengerEmail'];

    if (!empty($selectedPassenger)) {
        // Prepare and bind the SQL statement to prevent SQL injection
        $stmt = $conn->prepare("UPDATE passengertbl SET Age=?, Gender=?, Phone=?, HomeAddress=?, Username=? WHERE Name=?");
        $stmt->bind_param("ssssss", $passengerAge, $passengerGender, $passengerPhone, $passengerAddress, $passengerEmail, $selectedPassenger);

        if ($stmt->execute()) {
            echo "Record updated successfully";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        // Close the prepared statement
        $stmt->close();
    } else {
        echo "Please select a passenger to update";
    }
}

// Close the database connection
$conn->close();
?>
