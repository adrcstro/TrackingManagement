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
$organizationName = "Barangay 409 Zone 42";
$organizationAddress = "Sta Teresita, Sampaloc Manila";

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
    
        // Logo
        $logoPath = '../Images/lettericon.jpg'; // Adjust the path based on your project structure
        $this->Image($logoPath, 45, 8, 25); // Adjust the coordinates and size as needed
        $this->Ln(9);
        // Organization details
        $this->Cell(0, 10, $this->organizationName, 0, 1, 'C');
        $this->Ln(-3); // Adjust the line spacing as needed
        $this->Cell(0, 10, $this->organizationAddress, 0, 1, 'C');
        $this->Ln(-3); // Adjust the line spacing as needed
    
        // Title
        $this->Cell(0, 10, 'Complaint Report Details', 0, 1, 'C');
        $this->Line(10, 35, 200, 35);
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

   
      
        // Assuming $result is the result set from your database query
        
        // Loop through the result set
        while ($row = $result->fetch_assoc()) {
            // Letter content resembling a police report
            $letterContent = "COMPLAINED REPORT\n\n";
        
            // Append complaint details to the letter content
            $letterContent .= "Complaint ID: " . $row['ComplaintID'] . ". ";
            $letterContent .= "This complaint is regarding a " . $row['TypeofComplaint'] . " that occurred on " . $row['DateofReport'] . ".\n\n";
            $letterContent .= "Complainant Details:\n";
            $letterContent .= "Name: " . $row['ComplainantName'] . ". ";
            $letterContent .= "Contact Number: " . $row['ContactNumber'] . ". ";
            $letterContent .= "Address: " . $row['Address'] . ".\n\n";
            $letterContent .= "Complainee Details:\n";
            $letterContent .= "Name: " . $row['NameofComplainee'] . ".\n\n";
        
            // Output the letter content to the PDF
            $pdf->MultiCell(0, 12, $letterContent);
        
            // Table 1: Incident Details
            $table1 = '<table border="1">
                        <tr>
                            <th>Incident Description</th>
                            <td>Please provide the incident description here.</td>
                        </tr>
                      </table>';
        
            // Table 2: Investigation Details
            $table2 = '<table border="1">
                        <tr>
                            <th>Investigation Details</th>
                            <td>Include any investigative details or actions taken.</td>
                        </tr>
                        <tr>
                            <th>Conclusion</th>
                            <td>In conclusion, this report summarizes the details of the complaint and actions taken.</td>
                        </tr>
                      </table>';
        
            // Output the first table to the PDF
            $pdf->MultiCell(0, 12, $table1);
        
            // Output the second table to the PDF
            $pdf->MultiCell(0, 12, $table2);
        
            // Thank you message
            $pdf->MultiCell(0, 12, "Thank you for your cooperation.\n\n");
        
            // Set the spacing from the top for the next iteration
            $pdf->SetY($pdf->GetY() + 10); // Adjust the Y position as needed
        }
       
        


        // Output the PDF to the browser
        $pdf->Output();
    } else {
        echo "No records found for the given Complaint ID.";
    }
}

$conn->close();
?>
