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
        // Clone the form element to preserve its current state
        const clonedForm = document.getElementById('updateForm').cloneNode(true);

        // Create a new form element and append it to the document body
        const newForm = document.createElement('form');
        newForm.appendChild(clonedForm);
        newForm.style.display = 'none'; // Hide the form
        document.body.appendChild(newForm);

        // Set the form's target attribute to '_blank' to open in a new tab
        newForm.target = '_blank';

        // Trigger the form submission
        newForm.submit();

        // Remove the temporary form from the document body
        document.body.removeChild(newForm);
    });
</script>




</body>
</html>
