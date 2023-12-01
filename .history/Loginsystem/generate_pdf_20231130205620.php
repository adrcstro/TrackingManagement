<?php
require('../tcpdf.php');

// Connect to your database (update with your credentials)
$servername = "your_database_server";
$username = "your_database_username";
$password = "your_database_password";
$dbname = "your_database_name";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch data from the database
function fetchData($id) {
    global $conn;
    $id = $conn->real_escape_string($id);

    $query = "SELECT * FROM complainttbl WHERE ComplaintID = '$id'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return false;
    }
}

// Get the ID from the form
if (isset($_POST['SearchReport'])) {
    $id = $_POST['SearchReport'];

    // Fetch data based on the ID
    $data = fetchData($id);

    if ($data) {
        // Create PDF
        $pdf = new TCPDF();
        $pdf->AddPage();

        // Output the data in the PDF
        $pdf->SetFont('times', '', 12);
        $pdf->Cell(0, 10, 'Complaint ID: ' . $data['ComplaintID'], 0, 1);
        $pdf->Cell(0, 10, 'Type of Complaint: ' . $data['TypeofComplaint'], 0, 1);
        $pdf->Cell(0, 10, 'Date of Report: ' . $data['DateofReport'], 0, 1);
        $pdf->Cell(0, 10, 'Complainant Name: ' . $data['ComplainantName'], 0, 1);
        $pdf->Cell(0, 10, 'Contact Number: ' . $data['ContactNumber'], 0, 1);
        $pdf->Cell(0, 10, 'Address: ' . $data['Address'], 0, 1);
        $pdf->Cell(0, 10, 'Name of Complainee: ' . $data['NameofComplainee'], 0, 1);

        // Output the PDF as a file
        $pdf->Output('complaint_report.pdf', 'D');
    } else {
        echo "Data not found!";
    }
}

$conn->close();
?>
