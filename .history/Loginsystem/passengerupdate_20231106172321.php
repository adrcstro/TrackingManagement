
<?php
require_once('Config.php');

?>



<?php
// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Select_Passenger= $_POST["SelectPassenger"];
    $Passenger_Age = $_POST['PassengerAge'];
    $Passenger_Gender = $_POST['PassengerGender'];
    $Passenger_Phone = $_POST['PassengerPhone'];
    $Passenger_Address = $_POST['PassengerAddress'];
    $Passenger_Email = $_POST['PassengerEmail'];


    if (!empty($Select_Passenger)) {
        $sql = "UPDATE passengertbl SET Age='$Passenger_Age', Gender='$Passenger_Gender', Phone='$Passenger_Phone', HomeAddress='$Passenger_Address' , Username='$Passenger_Email'WHERE Name='$Select_Passenger'";

        if ($conn->query($sql) === TRUE) {
           
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Please select an Passenger to update";
    }
      
}

// Close the database connection
$conn->close();
?>
