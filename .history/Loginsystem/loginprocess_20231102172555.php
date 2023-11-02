<?php
// Replace with your actual database credentials
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
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    $table_name = "";
    if ($usertype == 'admin') {
        $table_name = "admintbl";
    } elseif ($usertype == 'driver') {
        $table_name = "driverstbl";
    } elseif ($usertype == 'passenger') {
        $table_name = "passengertbl";
    }

    $sql = "SELECT * FROM $table_name WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // User exists, do something here (e.g., set session variables)
        echo "Login successful!";
    } else {
        echo "Login failed. Please check your username and password.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <label for="usertype">User Type:</label><br>
        <select name="usertype" id="usertype">
            <option value="admin">Admin</option>
            <option value="driver">Driver</option>
            <option value="passenger">Passenger</option>
        </select><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>

<?php
$conn->close();
?>
