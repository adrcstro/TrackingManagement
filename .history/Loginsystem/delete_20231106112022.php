



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
        echo '<script>';
        echo 'showAlert("error", "Error", "Connection failed. Please try again.");';
        echo '</script>';
    } else {
        // SQL to delete a record
        $sql = "DELETE FROM admintbl WHERE Admin = '$selectedAdmin'";

        if ($conn->query($sql) === TRUE) {
            echo '<script>';
            echo 'showAlert("success", "Record Deleted", "The selected admin has been deleted.");';
            echo '</script>';
        } else {
            echo '<script>';
            echo 'showAlert("error", "Error", "Error deleting record. Please try again.");';
            echo '</script>';
        }

        $conn->close();
    }
}
?>