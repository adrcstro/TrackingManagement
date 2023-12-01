<?php
// generate_pdf.php

// Include the TCPDF library
require_once('../tcpdf.php');

// Your database connection details
$servername = "localhost"; // Replace with your server name
$username = "root"; // Replace with your username
$password = ""; // Replace with your password
$dbname = "plate-to-place-v-tracking"; 

// Organization details
$organizationName = "Your Organization Name";
$organizationAddress = "123 Organization Street, City";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

class PDF extends TCPDF {
    private $organizationName;
    private $organizationAddress;

    // Constructor to set organization details
    public function __construct($organizationName, $organizationAddress) {
        parent::__construct();
        $this->organizationName = $organizationName;
        $this->organizationAddress = $organizationAddress;
    }

    // Page header
    public function Header() {
        // Set font
        $this->SetFont('times', 'B', 12);

        // Organization details
        $this->Cell(0, 10, $this->organizationName, 0, 1, 'C');
        $this->Cell(0, 10, $this->organizationAddress, 0, 1, 'C');

        // Title
        $this->Cell(0, 10, 'Complaint Report', 0, 1, 'C');
    }

    // Page footer
    public function Footer() {
        // Position at 1.5 cm from bottom
        $this->SetY(-15);

        // Set font
        $this->SetFont('times', 'I', 8);

        // Page number
        $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage() . ' / ' . $this->getAliasNbPages(), 0, 0, 'C');
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Handle the search form submission
    $searchID = $_POST["SearchReport"];
    
    // Fetch data from the database based on the search ID
    $sql = "SELECT ComplaintID, TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, NameofComplainee FROM complainttbl WHERE ComplaintID = '$searchID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Create PDF instance with organization details
        $pdf = new PDF($organizationName, $organizationAddress);

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('times', '', 12);

        // Page body
     // Inside the while loop in generate_pdf.php
while ($row = $result->fetch_assoc()) {
    // Letter content resembling a police report
    $letterContent = "POLICE REPORT\n\n";
    $letterContent .= "Complaint ID: " . $row['ComplaintID'] . "\n";
    $letterContent .= "Type of Complaint: " . $row['TypeofComplaint'] . "\n";
    $letterContent .= "Date of Report: " . $row['DateofReport'] . "\n\n";
    $letterContent .= "Complainant Details:\n";
    $letterContent .= "Name: " . $row['ComplainantName'] . "\n";
    $letterContent .= "Contact Number: " . $row['ContactNumber'] . "\n";
    $letterContent .= "Address: " . $row['Address'] . "\n\n";
    $letterContent .= "Complainee Details:\n";
    $letterContent .= "Name: " . $row['NameofComplainee'] . "\n\n";
    $letterContent .= "Incident Description:\n";
    $letterContent .= "-------------------------\n";
    $letterContent .= "Provide a detailed description of the incident here.\n";
    $letterContent .= "-------------------------\n\n";
    $letterContent .= "Investigation Details:\n";
    $letterContent .= "-------------------------\n";
    $letterContent .= "Include any investigative details or actions taken.\n";
    $letterContent .= "-------------------------\n\n";
    $letterContent .= "Conclusion:\n";
    $letterContent .= "-------------------------\n";
    $letterContent .= "Provide a conclusion or summary of the report.\n";
    $letterContent .= "-------------------------\n\n";
    $letterContent .= "Thank you for your cooperation.\n\n";
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
