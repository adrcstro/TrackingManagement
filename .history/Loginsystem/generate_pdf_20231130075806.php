<?php
require_once 'path/to/mpdf/vendor/autoload.php'; // Adjust the path to the mpdf library

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $searchReport = $_POST['SearchReport'];

    // Add your database connection code here

    // Replace 'your_database_name' with your actual database name
    $conn = new mysqli('localhost', 'username', 'password', 'your_database_name');

    if ($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    }

    $query = "SELECT * FROM complainttbl WHERE ComplaintID = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $searchReport);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $data = $result->fetch_assoc();

        // Use mpdf to generate PDF
        $mpdf = new \Mpdf\Mpdf();
        $html = "<h1>Complaint Report</h1>";
        $html .= "<p><strong>Complaint ID:</strong> {$data['ComplaintID']}</p>";
        $html .= "<p><strong>Type of Complaint:</strong> {$data['TypeofComplaint']}</p>";
        $html .= "<p><strong>Date of Report:</strong> {$data['DateofReport']}</p>";
        $html .= "<p><strong>Complainant Name:</strong> {$data['ComplainantName']}</p>";
        $html .= "<p><strong>Contact Number:</strong> {$data['ContactNumber']}</p>";
        $html .= "<p><strong>Address:</strong> {$data['Address']}</p>";
        $html .= "<p><strong>Name of Complainee:</strong> {$data['NameofComplainee']}</p>";

        $mpdf->WriteHTML($html);
        $mpdf->Output('complaint_report.pdf', 'D'); // 'D' will force a download

    } else {
        echo "No records found for the given Complaint ID.";
    }

    $stmt->close();
    $conn->close();
}
?>
