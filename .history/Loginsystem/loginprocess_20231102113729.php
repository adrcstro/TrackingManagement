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
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Role = $_POST['Role']; // You need to ensure the Role is properly set in the HTML form.

    // Query the database to check if the user exists in any of the tables
    $sql = "(SELECT Username, Password, 'admin' as role FROM admintbl WHERE username='$username' AND password='$password')
            UNION
            (SELECT Name, PlateNumber, 'driver' as role FROM drivertbl WHERE username='$username' AND password='$password')
            UNION
            (SELECT Email, Password, 'passenger' as role FROM passengertbl WHERE username='$username' AND password='$password')";

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User authenticated, redirect to the appropriate page based on the role
        $row = $result->fetch_assoc();
        $role = $row['role'];

        switch ($role) {
            case 'admin':
                header("Location: admin.php");
                break;
            case 'driver':
                header("Location: driverdash.php");
                break;
            case 'passenger':
                header("Location: passengerdash.php");
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
