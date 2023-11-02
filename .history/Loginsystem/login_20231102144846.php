<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Check if the form has been submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Role'])) {
    // Escape user inputs for security
    $Email = $conn->real_escape_string($_POST['Email']);
    $Password = $conn->real_escape_string($_POST['Password']);
    $Role = $conn->real_escape_string($_POST['Role']);

    // Handle the login based on the selected user type
    switch ($Role) {
        case 'Passenger':
            $table = 'passengertbl';
            $column1 = 'Email';
            $column2 = 'Password';
            break;
        case 'Driver':
            $table = 'driverstbl';
            $column1 = 'Name'; // Change to the appropriate column name
            $column2 = 'PlateNumber'; // Change to the appropriate column name
            break;
        case 'Admin':
            $table = 'admintbl';
            $column1 = 'Username';
            $column2 = 'Password';
            break;
        default:
            echo 'Invalid user type.';
            exit;
    }

    // SQL query to check user credentials
    $sql = "SELECT * FROM $table WHERE $column1 = '$Email' AND $column2 = '$Password'";
    $result = $conn->query($sql);

    if ($result && $result->num_rows > 0) {
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
