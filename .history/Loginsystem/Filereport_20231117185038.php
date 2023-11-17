<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST['submit'])) { // Change 'submit' to the name attribute of your submit button
    $fileinput1 = mysqli_real_escape_string($conn, $_POST['Fileinput1']);
    $Datefilereport = mysqli_real_escape_string($conn, $_POST['datefilereport']);
    // ... Other fields ...

    $fileinput6File = $_FILES['Fileinput6']['name'];
    $fileinput6Tmp = $_FILES['Fileinput6']['tmp_name'];

    // Your SQL query and binding parameters...

    if ($stmt->execute()) {
        move_uploaded_file($fileinput6Tmp, "uploads/" . $fileinput6File);

        // Send a JSON response for success
        $response = array(
            'status' => 'success',
            'message' => 'Report Submitted Successfully'
        );
    } else {
        // Send a JSON response for error
        $response = array(
            'status' => 'error',
            'message' => 'There was an error submitting the report. Please try again.'
        );
    }

    header('Content-Type: application/json');
    echo json_encode($response);
}

$conn->close();
?>
