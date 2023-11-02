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
    $username = $conn->real_escape_string($_POST['username']);
    $password = $conn->real_escape_string($_POST['password']);
    $userType = $_POST['userType'];

    // Handle the login based on the selected user type
    switch ($userType) {
        case 'Passenger':
            $table = 'passengertbl';
            $column1 = 'Email';
            $column2 = 'Password';
            break;
        case 'Driver':
            $table = 'driverstbl';
            $column1 = 'Name';
            $column2 = 'PlateNumber';
            break;
        case 'Admin':
            $table = 'admintbl';
            $column1 = 'Username';
            $column2 = 'Password';
            break;
        default:
            echo 'Invalid user type.';
            break;
    }

    // SQL query to check user credentials
    $sql = "SELECT * FROM $table WHERE $column1 = '$username' AND $column2 = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Login successful, redirect to the appropriate page
        switch ($userType) {
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