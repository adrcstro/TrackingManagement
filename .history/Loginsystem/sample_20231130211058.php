<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include your CSS and other meta tags here -->
</head>
<body>

<!-- Your existing HTML content -->

<button type="button" class="btn btn-success btn-sm m-1" id="printButton">
    <i class="fas fa-print"></i> Print Report
</button>

<form id="updateForm" action="generate_pdf.php" method="post">
    <label for="SearchReport">Search Complain-ID</label>
    <input type="text" name="SearchReport" id="SearchReport" class="form-control" placeholder="Type Any of These Details to Know the Driver: Name/VehicleNumber/PlateNumber" required>
    <input type="submit" value="Generate PDF" class="btn btn-primary">
</form>

<!-- Include jQuery and the script to handle the button click -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function() {
        $('#printButton').click(function() {
            $('#updateForm').submit();
        });
    });
</script>

</body>
</html>
