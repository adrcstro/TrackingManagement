<?php
// Include TCPDF library
require_once('..//tcpdf.php');

// Function to generate PDF report
function generatePDF($data) {
    // Create instance of TCPDF
    $pdf = new TCPDF();
    
    // Set document information
    $pdf->SetCreator('Your Name');
    $pdf->SetAuthor('Your Name');
    $pdf->SetTitle('Complaint Report');
    
    // Add a page
    $pdf->AddPage();
    
    // Set font
    $pdf->SetFont('times', 'B', 12);
    
    // Add content to the PDF
    foreach ($data as $key => $value) {
        $pdf->Cell(40, 10, $key, 1);
        $pdf->Cell(0, 10, $value, 1);
        $pdf->Ln();
    }
    
    // Output the PDF
    $pdf->Output('complaint_report.pdf', 'I');
}

// Check if the request is an AJAX request
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['complaint_id'])) {
    // Fetch data from the database based on the complaint_id
    $complaint_id = $_POST['complaint_id'];

    // Perform database query and fetch data into $complaintData (replace this with your actual query)
    // Example query: SELECT * FROM complainttbl WHERE ComplaintID = $complaint_id
    // Example data retrieval: $complaintData = mysqli_fetch_assoc($result);

    // Call the function to generate PDF with fetched data
    generatePDF($complaintData);
} else {
    // Handle other cases or redirect if needed
    echo "Invalid request!";
}
?>
