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
            
            $letterContent .= "I am writing to report a complaint with the following details:\n\n";
            
            $letterContent .= "Complaint ID: " . $row['ComplaintID'] . ". ";
            $letterContent .= "This complaint is regarding a " . $row['TypeofComplaint'] . " that occurred on " . $row['DateofReport'] . ".\n\n";
            
            $letterContent .= "Complainant Details:\n";
            $letterContent .= "Name: " . $row['ComplainantName'] . ". ";
            $letterContent .= "Contact Number: " . $row['ContactNumber'] . ". ";
            $letterContent .= "Address: " . $row['Address'] . ".\n\n";
            
            $letterContent .= "Complainee Details:\n";
            $letterContent .= "Name: " . $row['NameofComplainee'] . ".\n\n";
            
            $letterContent .= "Incident Description:\n";
            $letterContent .= "I would like to provide a detailed description of the incident:\n\n";
            $letterContent .= "". $row['IncidentDescription'] ."\n\n";
            
            $letterContent .= "Investigation Details:\n";
            $letterContent .= "We have taken the following actions during the investigation:\n\n";
            $letterContent .= "Include any investigative details or actions taken.\n\n";
            
            $letterContent .= "Conclusion:\n";
            $letterContent .= "In conclusion, this report summarizes the details of the complaint and actions taken.\n\n";
            
            $letterContent .= "Thank you for your cooperation.\n\n";
        
            // Set the spacing from the top
            $pdf->SetY(50);
        
            // Output the letter content to the PDF
            $pdf->MultiCell(0, 12, $letterContent);
            
     

            // Add a table with two columns and two rows
            $pdf->SetFillColor(200, 220, 255); // Set the background color for the first row

            // First column with color (width: 50)
            $pdf->Cell(90, 10, 'Complainee Details', 1, 0, 'C', 1);
            // Second column with color (width: 70)
            $pdf->Cell(100, 10, 'Proof of Identity', 1, 1, 'C', 1);

   // Move to the next line
            // First row, first column without color (width: 50)
            // Fetch additional data from driverstbl based on NameofComplainee
            $complaineeName = $row['NameofComplainee'];
            $driverInfoQuery = "SELECT Age, Password, PhoneNumber, HomeAddress, PermittoOperate FROM driverstbl WHERE Username = '$complaineeName'";
            $driverInfoResult = $conn->query($driverInfoQuery);
            
            if ($driverInfoResult) {
                if ($driverInfoResult->num_rows > 0) {
                    $driverInfo = $driverInfoResult->fetch_assoc();
            
                    // Display complainee information
                    $pdf->Cell(90, 10, "Complainee: $complaineeName", 1, 0, 'C');
                    
                    // Display Prof of Identity with the image
                    $pdf->Cell(100, 10, "", 1, 0, 'C');
                  
                    $profImagePath = 'uploads/' . $driverInfo['PermittoOperate'];
                    if (file_exists($profImagePath) && (strtolower(pathinfo($profImagePath, PATHINFO_EXTENSION)) == 'jpg' || strtolower(pathinfo($profImagePath, PATHINFO_EXTENSION)) == 'jpeg' || strtolower(pathinfo($profImagePath, PATHINFO_EXTENSION)) == 'png')) {
                        // Embed the image in the cell
                        $pdf->Image($profImagePath, $pdf->GetX() + 12, $pdf->GetY() + 2, 70, 6, 'JPEG');
                    } else {
                        // If the image file is not found or not a valid format, display a placeholder or handle accordingly
                        $pdf->Cell(70, 10, "Image Not Available", 1, 0, 'C');
                    }







                    // Continue displaying other information
                    $pdf->Cell(90, 10, "Vehicle Number: " . $driverInfo['Age'], 1, 1, 'C');
                    $pdf->Cell(90, 10, "Plate Number: " . $driverInfo['Password'], 1, 1, 'C');
                    $pdf->Cell(90, 10, "PhoneNumber: " . $driverInfo['PhoneNumber'], 1, 1, 'C');
                    $pdf->Cell(90, 10, "Address: " . $driverInfo['HomeAddress'], 1, 1, 'C');
                } else {
                    // No information found for the complainee.
                    $pdf->Cell(50, 60, "No details found for Complainee: $complaineeName", 1, 0, 'C');
                }
            } else {
                // Handle the query error
                echo "Error: " . $conn->error;
            }
            
           
        }
        



        // Output the PDF to the browser
        $pdf->Output();
    } else {
        echo "No records found for the given Complaint ID.";
    }
}

$conn->close();
?>
