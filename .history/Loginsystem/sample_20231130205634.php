<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Report</title>
    <!-- Add your CSS and Bootstrap links here -->
</head>
<body>

    <!-- Your existing form -->
    <form id="updateForm" action="generate_pdf.php" method="post" enctype="multipart/form-data">
        <label for="SearchReport">Search Complaint ID</label>
        <input type="text" name="SearchReport" id="SearchReport" class="form-control" placeholder="Type Any of These Details to Know the Driver: Name/VehicleNumber/PlateNumber" required>
    </form>

    <!-- Print Report Button -->
    <button type="button" class="btn btn-success btn-sm m-1" id="printButton">
        <i class="fas fa-print"></i> Print Report
    </button>

    <!-- Include necessary JavaScript files (jQuery in this example) -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>

    <!-- Your custom script -->
    <script src="sample.js"></script>
</body>
</html>
