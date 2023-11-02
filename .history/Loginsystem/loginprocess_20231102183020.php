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
    $Name = $_POST['Name'];
    $PlateNumber = $_POST['PlateNumber'];



    $table_name = "";
    $column_name = ""; // Add the column name you want to fetch here
    if ($usertype == 'admin') {
        $table_name = "admintbl";
        $column_name = "Username, Password"; // Replace with the actual column name
    } elseif ($usertype == 'driver') {
        $table_name = "driverstbl";
        $column_name = "Name, PlateNumber"; // Replace with the actual column name
    } elseif ($usertype == 'passenger') {
        $table_name = "passengertbl";
        $column_name = "Username, Password"; // Replace with the actual column name
    }

    $sql = "SELECT $column_name FROM $table_name WHERE username = ? AND password = ?  && Name = ? AND PlateNumber = ?   ";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $username, $password);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // User exists, redirect to respective dashboards
        if ($usertype == 'admin') {
            header("Location: admin.php"); // Redirect to the admin dashboard page
            exit();
        } elseif ($usertype == 'driver') {
            header("Location: driverdash.php"); // Redirect to the driver dashboard page
            exit();
        } elseif ($usertype == 'passenger') {
            header("Location: passengerdash.php"); // Redirect to the passenger dashboard page
            exit();
        }
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
