<?php
require_once('mpdf/autoload.php');

// Function to fetch data from the database
function fetchDataFromDatabase($complaintId)
{
    // Replace these with your database connection details
    $servername = "localhost"; // Replace with your server name
    $username = "root"; // Replace with your username
    $password = ""; // Replace with your password
    $dbname = "plate-to-place-v-tracking";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch data based on the given ComplaintID
    $sql = "SELECT * FROM complainttbl WHERE ComplaintID = '$complaintId'";
    $result = $conn->query($sql);

    // Check if data is found
    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $conn->close();
        return $data;
    } else {
        $conn->close();
        return false;
    }
}

// Function to generate PDF
function generatePDF($data)
{
    $mpdf = new \Mpdf\Mpdf();

    // HTML content for the PDF
    $html = "
    <h1>Complaint Report</h1>
    <p><strong>Complaint ID:</strong> {$data['ComplaintID']}</p>
    <p><strong>Type of Complaint:</strong> {$data['TypeofComplaint']}</p>
    <p><strong>Date of Report:</strong> {$data['DateofReport']}</p>
    <p><strong>Complainant Name:</strong> {$data['ComplainantName']}</p>
    <p><strong>Contact Number:</strong> {$data['ContactNumber']}</p>
    <p><strong>Address:</strong> {$data['Address']}</p>
    <p><strong>Name of Complainee:</strong> {$data['NameofComplainee']}</p>
    ";

    // Add more styling if needed

    // Write HTML content to PDF
    $mpdf->WriteHTML($html);

    // Output the PDF
    $mpdf->Output();
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the ComplaintID from the form
    $complaintId = $_POST["SearchReport"];

    // Fetch data from the database
    $data = fetchDataFromDatabase($complaintId);

    // Check if data is found
    if ($data) {
        // Generate and output the PDF
        generatePDF($data);
    } else {
        echo "Data not found.";
    }
}
?>
