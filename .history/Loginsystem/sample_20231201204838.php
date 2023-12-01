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
        // Open a new tab/window
        var newTab = window.open('', '_blank');

        // Check if the new tab has been successfully opened
        if (newTab) {
            // Clone the form to preserve the original form in the current tab
            var clonedForm = document.getElementById('updateForm').cloneNode(true);

            // Append the cloned form to the new tab's document body
            newTab.document.body.appendChild(clonedForm);

            // Submit the cloned form in the new tab
            clonedForm.submit();
        } else {
            // Display an error message if the new tab couldn't be opened
            alert('Unable to open a new tab. Please enable pop-ups for this site.');
        }
    });
</script>



</body>
</html>
