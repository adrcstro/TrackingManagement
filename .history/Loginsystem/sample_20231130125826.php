<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Report Generator</title>

    <!-- Include TCPDF files -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.0/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js"></script>
</head>
<body>

<div class="container">
    <h1>Complaint Report Generator</h1>

    <form id="updateForm" action="generate_pdf.php" method="post">
        <label for="SearchReport">Search Complaint ID</label>
        <input type="text" name="SearchReport" id="SearchReport" class="form-control" placeholder="Type Complaint ID" required>
        <button type="button" class="btn btn-success btn-sm m-1" id="printButton">
            <i class="fas fa-print"></i> Print Report
        </button>
    </form>
</div>

<script>
$(document).ready(function() {
    $("#printButton").on("click", function() {
        var searchReport = $("#SearchReport").val();

        $.ajax({
            type: "POST",
            url: "generate_pdf.php",
            data: { SearchReport: searchReport },
            dataType: "json",
            success: function(response) {
                if (response.pdfFilePath) {
                    // Open the generated PDF in a new tab
                    window.open(response.pdfFilePath, '_blank');
                } else {
                    alert("Error generating PDF.");
                }
            },
            error: function() {
                alert("Error communicating with the server.");
            }
        });
    });
});
</script>

</body>
</html>
