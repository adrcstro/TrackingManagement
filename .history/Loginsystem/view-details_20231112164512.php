<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Add any additional styles or scripts needed for the view-details page -->
</head>
<body>

<?php
// Retrieve parameters from the URL
$type = $_GET['type'];
$id = urldecode($_GET['id']);

// Use the parameters to display the details
if ($type === 'license') {
    echo '<p>Driver\'s License: ' . $id . '</p>';
    // Retrieve and display the Driver's License image
    echo '<img src="uploads/' . $id . '" alt="Driver\'s License" style="width: 400px; height: auto;">';
} elseif ($type === 'registration') {
    echo '<p>Vehicle Registration: ' . $id . '</p>';
    // Retrieve and display the Vehicle Registration image
    echo '<img src="uploads/' . $id . '" alt="Vehicle Registration" style="display: block; margin: 0 auto; width: 600px; height: 700px;">';

} else {
    echo '<p>Invalid type</p>';
}
?>

</body>
</html>
