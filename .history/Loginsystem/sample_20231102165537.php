<?php
// Start the session
session_start();

// Set your MySQL database credentials
$servername = "localhost";
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "plate-to-place-v-tracking"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $usertype = $_POST['usertype'];

    $sql = "SELECT * FROM admintbl WHERE Username = '$Username' AND Password = '$Password' AND usertype = '$usertype'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Set session variables
        $_SESSION["Username"] = $Username;
        $_SESSION["usertype"] = $usertype;

        // Redirect to dashboard based on user type
        switch ($usertype) {
            case "Admin":
                header("Location: admin.php");
                break;
            case "Manager":
                header("Location: passengerdash.php");
                break;
            case "User":
                header("Location: driversdash.php");
                break;
            default:
                echo "Invalid user type.";
        }
    } else {
        echo "Invalid username, password, or user type.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label for="username">Username:</label>
        <input type="text" id="Username" name="Username"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="Password" name="Password"><br><br>

        <label for="usertype">User Type:</label>
        <select name="usertype" id="usertype">
            <option value="Admin">Admin</option>
            <option value="Manager">Manager</option>
            <option value="User">User</option>
        </select><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>

<?php
// Close the connection
$conn->close();
?>
