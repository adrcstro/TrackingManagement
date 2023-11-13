<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
// Retrieve parameters from the URL
$type = $_GET['type'];
$id = urldecode($_GET['id']);

// Use the parameters to display the details
if ($type === 'license') {
    echo '<div style="text-align: center;">';
    echo '<p>Driver\'s License: ' . $id . '</p>';
    // Retrieve and display the Driver's License image
    echo '<img src="uploads/' . $id . '" alt="Driver\'s License" style="width: 400px; height: auto;">';
    echo '<br>'; // Add a line break
    // Add Bootstrap button to download Driver's License with margin-top
    echo '<a href="uploads/' . $id . '" download="DriversLicense" class="btn btn-primary mt-3 d-inline-block">Download Driver\'s License</a>';
    echo '</div>';
} elseif ($type === 'registration') {
    echo '<div style="text-align: center;">';
    echo '<p>Vehicle Registration: ' . $id . '</p>';
    // Retrieve and display the Vehicle Registration image
    echo '<img src="uploads/' . $id . '" alt="Vehicle Registration" style="display: block; margin: 0 auto; width: 700px; height: 900px;">';
    echo '<br>'; // Add a line break
    // Add Bootstrap button to download Vehicle Registration with centering class
    echo '<a href="uploads/' . $id . '" download="VehicleRegistration" class="btn btn-primary mt-3 d-inline-block">Download Vehicle Registration</a>';
    echo '</div>';
} else {
    echo '<p>Invalid type</p>';
}
?>

<!-- Add Bootstrap JS and Popper.js scripts -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
