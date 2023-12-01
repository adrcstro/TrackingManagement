<?php
// Include database connection code here

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchReport = $_POST["SearchReport"];

    // Fetch data from the database based on $searchReport
    // Replace "your_database_connection_code" with the actual code to connect to your database
    $conn = new mysqli("localhost", "root", "", "plate-to-place-v-tracking");
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT ComplaintID, TypeofComplaint, DateofReport, ComplainantName, ContactNumber, Address, NameofComplainee FROM complainttbl WHERE ComplaintID = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $searchReport);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    // Generate PDF using TCPDF
    require_once('tcpdf/tcpdf.php');

    
    $pdf->SetAutoPageBreak(true, 10);
    $pdf->AddPage();

    // Output data in the PDF
    $pdf->SetFont('Arial', 'B', 12);
    $pdf->Cell(40, 10, 'Complaint ID:');
    $pdf->Cell(40, 10, $data['ComplaintID'], 0, 1);

    // Repeat the above lines for other columns

    // Save the PDF to a file
    $pdfFilePath = 'reports/' . $data['ComplaintID'] . '_report.pdf';
    $pdf->Output($pdfFilePath, 'F');

    // Close the database connection
    $stmt->close();
    $conn->close();

    // Return the PDF file path
    echo json_encode(['pdfFilePath' => $pdfFilePath]);
} else {
    echo "Invalid request.";
}
?>
