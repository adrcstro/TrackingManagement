<?php
require_once('Config.php');
?>



<?php
// Replace with your database credentials


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user_type = $_POST['user_type'];
    $username = $_POST['username'];
    $new_password = $_POST['new_password'];

    // Change the password based on the selected user type
    $sql = "";
    switch ($user_type) {
        case "admin":
            $sql = "UPDATE admintbl SET Password = '$new_password' WHERE Username = '$username'";
            break;
        case "passenger":
            $sql = "UPDATE passengertbl SET Password = '$new_password' WHERE Username = '$username'";
            break;
        case "driver":
            $sql = "UPDATE driverstbl SET Password = '$new_password' WHERE Username = '$username'";
            break;
        default:
            echo "Invalid user type";
    }

    if ($conn->query($sql) === TRUE) {
        echo "Password updated successfully. <br>";
    } else {
        echo "Error updating record: " . $conn->error . "<br>";
    }
}

$conn->close();
?>



<!DOCTYPE html>
<html>
<body>

<h2>Forgot Password Form</h2>

<form action="sampleforg.php" method="post">
  <label for="user_type">Select User Type:</label>
  <select id="user_type" name="user_type">
    <option value="admin">Admin</option>
    <option value="passenger">Passenger</option>
    <option value="driver">Driver</option>
  </select><br><br>
  <label for="username">Username:</label><br>
  <input type="text" id="username" name="username"><br><br>
  <label for="new_password">New Password:</label><br>
  <input type="password" id="new_password" name="new_password"><br><br>
  <input type="submit" value="Submit">
</form>

</body>
</html>
