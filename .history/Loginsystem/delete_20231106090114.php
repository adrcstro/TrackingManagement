<?php
require_once('Config.php');

?>





<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the input field is set
    if (isset($_POST['input1'])) {
        $selectedAdmin = $_POST['input1'];

        // Perform the delete operation
        $conn = new mysqli($servername, $username, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and bind
        $stmt = $conn->prepare("DELETE FROM admintbl WHERE Admin = ?");
        $stmt->bind_param("s", $selectedAdmin);

        // Execute the statement
        if ($stmt->execute() === TRUE) {
            echo "Record deleted successfully";
        } else {
            echo "Error deleting record: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "Please select an option";
    }
}
?>

