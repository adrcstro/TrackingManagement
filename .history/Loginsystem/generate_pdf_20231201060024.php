<?php
// generate_pdf.php

// Include the TCPDF library
require_once('../tcpdf.php');

// Your database connection details
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
            // Letter content
            $letterContent = "Dear Sir/Madam,\n\n";
            $letterContent .= "I am writing to report a complaint with the following details:\n\n";
            $letterContent .= "Complaint ID: " . $row['ComplaintID'] . "\n";
            $letterContent .= "Type of Complaint: " . $row['TypeofComplaint'] . "\n";
            $letterContent .= "Date of Report: " . $row['DateofReport'] . "\n";
            $letterContent .= "Complainant Name: " . $row['ComplainantName'] . "\n";
            $letterContent .= "Contact Number: " . $row['ContactNumber'] . "\n";
            $letterContent .= "Address: " . $row['Address'] . "\n";
            $letterContent .= "Name of Complainee: " . $row['NameofComplainee'] . "\n\n";
            $letterContent .= "Thank you for your prompt attention to this matter.\n\n";
            $letterContent .= "Sincerely,\nYour Name";

            // Output the letter content to the PDF
            $pdf->MultiCell(0, 10, $letterContent);
        }

        // Output the PDF to the browser
        $pdf->Output();
    } else {
        echo "No records found for the given Complaint ID.";
    }
}

$conn->close();
?>
