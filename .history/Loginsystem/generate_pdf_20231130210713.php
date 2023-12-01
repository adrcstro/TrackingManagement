<?php
// Include the TCPDF library
require_once('../tcpdf.php');

// Function to generate PDF
function generatePDF($data) {
    $pdf = new TCPDF();
    $pdf->SetMargins(10, 10, 10);
    $pdf->AddPage();

    // Set font
    $pdf->SetFont('helvetica', '', 12);

    // Add data to the PDF
    $content = '<h2>Complaint Report</h2>';
    foreach ($data as $row) {
        $content .= '<p><b>Complaint ID:</b> ' . $row['ComplaintID'] . '</p>';
        $content .= '<p><b>Type of Complaint:</b> ' . $row['TypeofComplaint'] . '</p>';
        $content .= '<p><b>Date of Report:</b> ' . $row['DateofReport'] . '</p>';
        $content .= '<p><b>Complainant Name:</b> ' . $row['ComplainantName'] . '</p>';
        $content .= '<p><b>Contact Number:</b> ' . $row['ContactNumber'] . '</p>';
        $content .= '<p><b>Address:</b> ' . $row['Address'] . '</p>';
        $content .= '<p><b>Name of Complainee:</b> ' . $row['NameofComplainee'] . '</p>';
        $content .= '<hr>';
    }

    $pdf->writeHTML($content, true, false, true, false, '');
    
    // Output PDF to the browser
    $pdf->Output('complaint_report.pdf', 'I');
}

// Fetch data from the database based on the search criteria
if(isset($_POST['SearchReport'])) {
    $searchCriteria = $_POST['SearchReport'];

    // Replace with your database connection logic
    $servername = "localhost"; // Replace with your server name
    $username = "root"; // Replace with your username
    $password = ""; // Replace with your password
    $dbname = "plate-to-place-v-tracking";

    $conn = new mysqli($host, $username, $password, $database);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT TypeofComplaint,DateofReport,ComplainantName,ContactNumber,Address , NameofComplainee   FROM complainttbl WHERE ComplaintID = '$searchCriteria'";
    $result = $conn->query($sql);

    $data = array();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    } else {
        echo "No records found for the given ComplaintID.";
        exit();
    }

    $conn->close();

    // Generate PDF
    generatePDF($data);
} else {
    echo "Invalid request. Please provide a valid ComplaintID.";
}
?>
