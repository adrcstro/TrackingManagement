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
$organizationName = "Republic of the Philippines";
$organizationAddress = "City of Manila";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

class PDF extends TCPDF
{
    private $organizationName;
    private $organizationAddress;

    // Constructor to set organization details
    public function __construct($organizationName, $organizationAddress)
    {
        parent::__construct();
        $this->organizationName = $organizationName;
        $this->organizationAddress = $organizationAddress;
    }

    // Page header
    public function Header()
    {
        // Set font
        $this->SetFont('times', 'B', 12);

        // Logo
        $logoPath = '../Images/lettericon.jpg'; // Adjust the path based on your project structure
        $this->Image($logoPath, 140, 7, 26);
        $logoPath = '../Images/logomanila.jpg'; // Adjust the path based on your project structure
        $this->Image($logoPath, 45, 8, 23); // Adjust the coordinates and size as needed
        $this->Ln(9);
        // Organization details
        $this->Cell(0, 10, $this->organizationName, 0, 1, 'C');
        $this->Ln(-3); // Adjust the line spacing as needed
        $this->Cell(0, 10, $this->organizationAddress, 0, 1, 'C');
        $this->Ln(-3); // Adjust the line spacing as needed

        // Title
        $this->Cell(0, 10, 'Barangay-409 Sampaloc Manila', 0, 1, 'C');
        $this->Line(10, 35, 200, 35);
    }

    // Page footer
    public function Footer()
    {
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
    $sql = "SELECT ComplaintID, TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, NameofComplainee , IncidentDescription FROM complainttbl WHERE ComplaintID = '$searchID'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Create PDF instance with organization details
        $pdf = new PDF($organizationName, $organizationAddress);

        // Add a page
        $pdf->AddPage();

        // Set font
        $pdf->SetFont('times', '', 12);

        while ($row = $result->fetch_assoc()) {
            // Letter content resembling a police report
            $letterContent = "COMPLAINED REPORT\n\n";

            // ... (rest of the letter content code remains unchanged)

            // Output the letter content to the PDF
            $pdf->MultiCell(0, 12, $letterContent);

            // Watermark image
            $watermarkPath = '../Images/logoicon.png'; // Adjust the path based on your project structure
            $pdf->Image($watermarkPath, 80, 60, 60, 0, 'PNG'); // Adjust the coordinates and size as needed

            // Add a table with two columns and two rows
            $pdf->SetFillColor(200, 220, 255); // Set the background color for the first row

            // ... (rest of the table code remains unchanged)
        }

        // Output the PDF to the browser
        $pdf->Output();
    } else {
        echo "No records found for the given Complaint ID.";
    }
}

$conn->close();
?>
