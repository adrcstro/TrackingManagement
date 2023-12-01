<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Report</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.68/vfs_fonts.js"></script>
</head>
<body>

    <!-- Your existing HTML code -->

    <form id="updateForm" action="report.php" method="get">
        <label for="searchId">Search Complain-ID</label>
        <input type="text" name="searchId" id="searchId" class="form-control" placeholder="Enter Complaint ID" required>
        <button type="submit" class="btn btn-success btn-sm m-1">
            <i class="fas fa-search"></i> Search
        </button>
    </form>

    <button type="button" class="btn btn-success btn-sm m-1" id="printButton" onclick="printReport()">
        <i class="fas fa-print"></i> Print Report
    </button>

    <script>
        function printReport() {
            var searchId = document.getElementById('searchId').value;
            if (searchId.trim() !== '') {
                // Fetch data and create PDF
                fetch('report.php?searchId=' + searchId)
                    .then(response => response.blob())
                    .then(blob => {
                        const file = new File([blob], 'Complaint_Report_' + searchId + '.pdf', { type: 'application/pdf' });
                        const fileURL = URL.createObjectURL(file);

                        // Open the PDF in a new tab for the user to download
                        window.open(fileURL);
                    })
                    .catch(error => {
                        console.error('Error generating PDF:', error);
                    });
            } else {
                alert('Please enter a valid Complaint ID.');
            }
        }
    </script>

    <!-- Your existing JS and other HTML code -->

</body>
</html>
