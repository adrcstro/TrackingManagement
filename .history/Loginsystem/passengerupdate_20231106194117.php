
<?php
require_once('Config.php');

?>



<?php
// Set up your database connection details
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve form data
    $selectedPassenger = $_POST['SelectPassenger'];
    $passengerAge = $_POST['PassengerAge'];
    $passengerGender = $_POST['PassengerGender'];
    $passengerPhone = $_POST['PassengerPhone'];
    $passengerAddress = $_POST['PassengerAddress'];
    $passengerEmail = $_POST['PassengerEmail'];

    // Update the passenger information in the database
    $sql = "UPDATE passengertbl SET Age='$passengerAge', Gender='$passengerGender', Phone='$passengerPhone', HomeAddress='$passengerAddress', Username='$passengerEmail' WHERE Name='$selectedPassenger'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
