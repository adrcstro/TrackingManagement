<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Include necessary styles/scripts -->
</head>
<body>
    <form id="updateForm" action="generate_report.php" method="post" enctype="multipart/form-data">
        <label for="SearchReport">Search Complain-ID</label>
        <input type="text" name="SearchReport" id="SearchReport" class="form-control" placeholder="Type Any of These Details to Know the Driver: Name/VehicleNumber/PlateNumber" required>
        <button type="submit" class="btn btn-success btn-sm m-1" id="printButton">
            <i class="fas fa-print"></i> Print Report
        </button>
    </form>

    <!-- Include necessary scripts -->
</body>
</html>
