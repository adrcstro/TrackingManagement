<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="../images/webicon.png">
    <!-- Add Bootstrap CSS link -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<?php
// Function to check if a file is an image based on its extension
function isImage($file) {
    $allowed_extensions = ['jpg', 'jpeg', 'png', 'gif'];
    $extension = pathinfo($file, PATHINFO_EXTENSION);
    return in_array(strtolower($extension), $allowed_extensions);
}

// Retrieve parameters from the URL
$type = $_GET['type'];
$id = urldecode($_GET['id']);

// Use the parameters to display the details
if ($type === 'license' || $type === 'registration') {
    $filePath = 'uploads/' . $id;

    // Check if the file exists
    if (file_exists($filePath)) {
        echo '<div style="text-align: center;">';
        echo '<p>' . ($type === 'license' ? 'Driver\'s License' : 'Vehicle Registration') . ': ' . $id . '</p>';
        
        // Check if the file is an image
        if (isImage($filePath)) {
            // Display the image
            echo '<img src="' . $filePath . '" alt="' . ($type === 'license' ? 'Driver\'s License' : 'Vehicle Registration') . '" style="width: 400px; height: auto;">';
        } else {
            // Display a link for non-image files
            echo '<a href="' . $filePath . '" download="' . ($type === 'license' ? 'DriversLicense' : 'VehicleRegistration') . '" class="btn btn-primary mt-3 d-inline-block">Download ' . ($type === 'license' ? 'Driver\'s License' : 'Vehicle Registration') . '</a>';
        }

        echo '</div>';
    } else {
        echo '<p>File not found</p>';
    }
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
