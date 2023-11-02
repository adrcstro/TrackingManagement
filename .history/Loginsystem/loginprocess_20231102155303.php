<?php
session_start();

// Modify the database connection details accordingly
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $role = $_POST['Role'];

    $sql = "";

    switch ($role) {
        case 'Passenger':
            $sql = "SELECT Email, Password FROM passengertbl WHERE Email = '$email' AND Password = '$password'";
            break;
        case 'Driver':
            $sql = "SELECT Name, PlateNumber FROM driverstbl WHERE Name = '$email' AND PlateNumber = '$password'";
            break;
        case 'Admin':
            $sql = "SELECT Username, Password FROM admintbl WHERE Username = '$email' AND Password = '$password'";
            break;
        default:
            // Do nothing here
            break;
    }

    if ($sql != "") {
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Redirect to dashboard.php or the appropriate file based on the selected role
            switch ($role) {
                case 'Passenger':
                    header("Location: passengerdash.php");
                    exit();
                case 'Driver':
                    header("Location: driverdash.php");
                    exit();
                case 'Admin':
                    header("Location: admin.php");
                    exit();
            }
        } else {
            echo "Invalid login credentials. Please try again.";
        }
    }
}

$conn->close();
?>
