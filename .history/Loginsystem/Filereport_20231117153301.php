<?php
$response = array(); // Create an associative array to store the response data

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    $response['status'] = 'error';
    $response['message'] = 'Connection failed: ' . $conn->connect_error;
    echo json_encode($response);
    exit();
}

if (isset($_POST['Fileinput1'], $_POST['datefilereport'], $_POST['Fileinput3'], $_POST['Fileinput4'], $_POST['Fileinput5'], $_POST['PassSearchDriver'])) {
    $fileinput1 = $_POST['Fileinput1'];
    $Datefilereport = $_POST['datefilereport'];
    $fileinput3 = $_POST['Fileinput3'];
    $fileinput4 = $_POST['Fileinput4'];
    $fileinput5 = $_POST['Fileinput5'];
    $passSearchDriver = $_POST['PassSearchDriver'];

    $fileinput6File = $_FILES['Fileinput6']['name'];
    $fileinput6Tmp = $_FILES['Fileinput6']['tmp_name'];

    // File upload functionality
    move_uploaded_file($fileinput6Tmp, "uploads/" . $fileinput6File);

    // SQL query to insert data into the database
    $sql = "INSERT INTO complainttbl (TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, ProfofIdentity, NameofComplainee) VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssss', $fileinput1, $Datefilereport, $fileinput3, $fileinput4, $fileinput5, $fileinput6File, $passSearchDriver);

    if ($stmt->execute()) {
        // Success response
        $response['status'] = 'success';
        $response['message'] = 'Your Report created successfully.';
    } else {
        // Error response
        $response['status'] = 'error';
        $response['message'] = 'Error: ' . $conn->error;
    }
} else {
    // Invalid request
    $response['status'] = 'error';
    $response['message'] = 'Invalid request parameters.';
}

// Output the response as JSON
echo json_encode($response);

$conn->close();
?>
