<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>
<body>
<button type="button" class="btn btn-success btn-sm m-1" id="printButton" data-toggle="modal">
    <i class="fas fa-print"></i> Print Report
</button>

<form id="updateForm" action="driverupdate.php" method="post" enctype="multipart/form-data">
    <label for="SearchReport">Search Complain-ID</label>
    <input type="text" name="SearchReport" id="SearchReport" class="form-control" placeholder="Type Any of These Details to Know the Driver: Name/VehicleNumber/PlateNumber" required>
</form>

<script>
$(document).ready(function() {
    $('#printButton').click(function() {
        // Get the complaint ID from the input field
        var complaintId = $('#SearchReport').val();

        // Check if the complaint ID is not empty
        if (complaintId.trim() !== '') {
            // Send AJAX request to generate PDF
            $.ajax({
                type: 'POST',
                url: 'generate_report.php',
                data: { complaint_id: complaintId },
                success: function() {
                    // Optional: Handle success, e.g., show a success message
                    console.log('PDF generated successfully');
                },
                error: function() {
                    // Optional: Handle error, e.g., show an error message
                    console.error('Error generating PDF');
                }
            });
        } else {
            // Optional: Handle empty complaint ID, e.g., show a warning message
            console.warn('Complaint ID is empty');
        }
    });
});
</script>   
</body>
</html>