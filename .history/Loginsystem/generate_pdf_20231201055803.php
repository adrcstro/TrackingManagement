<?php
// generate_pdf.php

// Include the TCPDF library
require_once('tcpdf/tcpdf.php');

// Your database connection details
$servername = "your_servername";
$username = "your_username";
$password = "your_password";
$dbname = "your_dbname";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the search form submission
    $searchID = $_POST["SearchReport"];
    
    // Fetch data from the database based on the search ID
    $sql = "SELECT ComplaintID, TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, NameofComplainee FROM complainttbl WHERE ComplaintID = '$searchID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Create PDF instance
        $pdf = new TCPDF();
        
        // Set document information
        $pdf->SetCreator('Your Name');
        $pdf->SetAuthor('Your Name');
        $pdf->SetTitle('Complaint Report');
        $pdf->SetSubject('Complaint Details');

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('times', '', 12);

        // Fetch and display data in the PDF
        while ($row = $result->fetch_assoc()) {
            $pdf->Cell(0, 10, 'Complaint ID: ' . $row['ComplaintID'], 0, 1);
            $pdf->Cell(0, 10, 'Type of Complaint: ' . $row['TypeofComplaint'], 0, 1);
            $pdf->Cell(0, 10, 'Date of Report: ' . $row['DateofReport'], 0, 1);
            $pdf->Cell(0, 10, 'Complainant Name: ' . $row['ComplainantName'], 0, 1);
            $pdf->Cell(0, 10, 'Contact Number: ' . $row['ContactNumber'], 0, 1);
            $pdf->Cell(0, 10, 'Address: ' . $row['Address'], 0, 1);
            $pdf->Cell(0, 10, 'Name of Complainee: ' . $row['NameofComplainee'], 0, 1);
        }

        // Output the PDF to the browser
        $pdf->Output();
    } else {
        echo "No records found for the given Complaint ID.";
    }
}

$conn->close();
?>
