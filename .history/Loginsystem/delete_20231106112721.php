


<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedAdmin = $_POST['input1'];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        echo "connection_error";
    } else {
        // SQL to delete a record
        $sql = "DELETE FROM admintbl WHERE Admin = '$selectedAdmin'";

        if ($conn->query($sql) === TRUE) {
            echo "success";
        } else {
            echo "delete_error";
        }

        $conn->close();
    }
}
?>

