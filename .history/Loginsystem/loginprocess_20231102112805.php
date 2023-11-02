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

// Process the login form data
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['Role']; // You need to ensure the Role is properly set in the HTML form.

    // Query the database to check if the user exists
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password' AND role='$role'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User authenticated, redirect to the appropriate page based on the role
        // You can set different redirects for different roles
        switch ($role) {
            case 'Passenger':
                header("Location: passenger_dashboard.php");
                break;
            case 'Driver':
                header("Location: driver_dashboard.php");
                break;
            case 'Admin':
                header("Location: admin_dashboard.php");
                break;
            default:
                echo "Invalid role";
        }
    } else {
        // Authentication failed
        echo "Invalid username or password";
    }
}

$conn->close();
?>
