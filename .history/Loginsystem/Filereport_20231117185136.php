<?php
// Your database connection code...
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submit'])) { // Change 'submit' to the name attribute of your submit button

    // Sanitize and escape input data to prevent SQL injection
    $fileinput1 = mysqli_real_escape_string($conn, $_POST['Fileinput1']);
    $Datefilereport = mysqli_real_escape_string($conn, $_POST['datefilereport']);
    $fileinput3 = mysqli_real_escape_string($conn, $_POST['Fileinput3']);
    $fileinput4 = mysqli_real_escape_string($conn, $_POST['Fileinput4']);
    $fileinput5 = mysqli_real_escape_string($conn, $_POST['Fileinput5']);
    $passSearchDriver = mysqli_real_escape_string($conn, $_POST['PassSearchDriver']);

    $fileinput6File = $_FILES['Fileinput6']['name'];
    $fileinput6Tmp = $_FILES['Fileinput6']['tmp_name'];

    // Your SQL query to insert data into the database
    $sql = "INSERT INTO complainttbl (TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, ProfofIdentity, NameofComplainee) VALUES (?, ?, ?, ?, ?, ?, ?)";
    
    // Prepare the SQL statement
    $stmt = $conn->prepare($sql);

    // Bind parameters
    $stmt->bind_param('sssssss', $fileinput1, $Datefilereport, $fileinput3, $fileinput4, $fileinput5, $fileinput6File, $passSearchDriver);

    // Execute the SQL statement
    if ($stmt->execute()) {
        // Move the uploaded file to a specific folder
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

    // Close the prepared statement
    $stmt->close();
} else {
    // Send a JSON response if the form is not submitted
    $response = array(
        'status' => 'error',
        'message' => 'Form not submitted'
    );
}

// Close the database connection
$conn->close();

// Set the content type and echo the JSON response
header('Content-Type: application/json');
echo json_encode($response);
?>
