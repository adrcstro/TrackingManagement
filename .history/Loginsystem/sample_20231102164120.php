<?php
// Start the session
session_start();

// Set your MySQL database credentials
$servername = "localhost";
$username = "username"; // Your MySQL username
$password = "password"; // Your MySQL password
$dbname = "myDB"; // Your database name

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

    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' AND usertype = '$usertype'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Set session variables
        $_SESSION["username"] = $username;
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
        <input type="text" id="username" name="username"><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password"><br><br>

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
