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
    // Add additional details for Driver's License if needed
} elseif ($type === 'registration') {
    echo '<p>Vehicle Registration: ' . $id . '</p>';
    // Add additional details for Vehicle Registration if needed
} else {
    echo '<p>Invalid type</p>';
}
?>

</body>
</html>
