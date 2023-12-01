<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaint Report</title>
    <!-- Add Bootstrap and Font Awesome CSS links here -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
</head>
<body>

<div class="container mt-5">
    <form id="updateForm" action="generate_pdf.php" method="post" enctype="multipart/form-data">
        <label for="SearchReport">Search Complain-ID</label>
        <input type="text" name="SearchReport" id="SearchReport" class="form-control" placeholder="Type Any of These Details to Know the Driver: Name/VehicleNumber/PlateNumber" required>
    </form>

    <button type="button" class="btn btn-success btn-sm m-1" id="printButton" data-toggle="modal">
        <i class="fas fa-print"></i> Print Report
    </button>
</div>

<!-- Add Bootstrap and jQuery scripts here -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function () {
        $("#printButton").click(function () {
            // Submit the form to generate the PDF
            $("#updateForm").attr("action", "generate_pdf.php");
            $("#updateForm").submit();
        });
    });
</script>

</body>
</html>
