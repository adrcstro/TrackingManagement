<?php
session_start();

$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'plate-to-place-v-tracking';

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['username']) && isset($_POST['password']) && isset($_POST['role'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    switch ($role) {
        case 'Admin':
            $table = 'admintbl';
            $redirect = 'admin.php';
            break;
        case 'Driver':
            $table = 'driverstbl';
            $redirect = 'driverdash.php';
            break;
        case 'Passenger':
            $table = 'passengertbl';
            $redirect = 'passengerdash.php';
            break;
        default:
            echo "Invalid user role";
            exit();
    }

    $sql = "SELECT * FROM $table WHERE username='$username' AND password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: $redirect");
        exit();
    } else {
        echo "Invalid username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form method="post" action="">
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username"><br>
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password"><br><br>
        <div class="dropdown" name="Role">
            <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="loginDropdown">
                Select User Type:
            </button>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#" onclick="changeLoginType('Passenger')">Passenger</a></li>
                <li><a class="dropdown-item" href="#" onclick="changeLoginType('Driver')">Driver</a></li>
                <li><a class="dropdown-item" href="#" onclick="changeLoginType('Admin')">Admin</a></li>
            </ul>
        </div><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
