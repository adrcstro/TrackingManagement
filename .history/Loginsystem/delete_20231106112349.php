


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

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


