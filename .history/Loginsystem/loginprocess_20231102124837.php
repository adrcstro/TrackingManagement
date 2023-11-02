<?php
require_once('Config.php');

?>
<?php

// login.php

// Create a MySQL connection (change the credentials as needed)

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Escape user inputs for security
    $Username = $conn->real_escape_string($_POST['Username']);
    $Password = $conn->real_escape_string($_POST['Password']);
  

    $Role = $_POST['Role'];

    // Handle the login based on the selected user type
    switch ($Role) {
        case 'Passenger':
            $table = 'passengertbl';
            $column7 = 'Email';
            $column8 = 'Password';
            break;
        case 'Driver':
            $table = 'driverstbl';
            $column2 = 'Name';
            $column4 = 'PlateNumber';
            break;
        case 'Admin':
            $table = 'admintbl';
            $column2 = 'Username';
            $column3 = 'Password';
            break;
        default:
            echo 'Invalid user type.';
            break;
    }

    // SQL query to check user credentials
    $sql = "SELECT * FROM admintbl WHERE $column2 = '$Username' AND $column3 = '$Password'";
    $sql = "SELECT * FROM passengertbl WHERE $column7 = '$Username' AND $column8 = '$Password'";
    $sql = "SELECT * FROM driverstbl WHERE $column2 = '$Username' AND $column4 = '$Password'";


    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect to the appropriate page
        switch ($Role) {
            case 'Passenger':
                header('Location: passengerdash.php');
                break;
            case 'Driver':
                header('Location: driverdash.php');
                break;
            case 'Admin':
                header('Location: admin.php');
                break;
        }
    } else {
        echo 'Invalid username or password.';
    }
}
?>