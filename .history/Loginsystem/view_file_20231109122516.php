<?php
if(isset($_GET['file'])){
    $file = $_GET['file'];

    // Check if the file exists
    if(file_exists($file)){
        // Read the contents of the file
        $fileContent = file_get_contents($file);

        // Display the contents
        echo '<pre>' . htmlspecialchars($fileContent) . '</pre>';
    } else {
        echo "File not found: " . $file;
    }
} else {
    echo "No file specified.";
}
?>
