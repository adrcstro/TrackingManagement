<!-- index.html -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Report</title>
</head>
<body>
    <!-- Search form -->
    <form id="updateForm" action="generate_pdf.php" method="post" enctype="multipart/form-data">
        <label for="SearchReport">Search Complain-ID</label>
        <input type="text" name="SearchReport" id="SearchReport" class="form-control" placeholder="Type Any of These Details to Know the Driver: Name/VehicleNumber/PlateNumber" required>
        <button type="button" class="btn btn-success btn-sm m-1" id="printButton" data-toggle="modal">
            <i class="fas fa-print"></i> Print Report
        </button>
    </form>

    <script>
    document.getElementById('printButton').addEventListener('click', function() {
        // Trigger the form submission
        document.getElementById('updateForm').submit();

        // Open a new tab and set the URL to the PDF file
        window.open('generate_pdf.php', '_blank');
    });
</script>




</body>
</html>
