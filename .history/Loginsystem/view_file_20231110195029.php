<?php
    // Database connection code goes here

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Check if the form was submitted
        $targetDir = "uploads/";
        $targetFile = $targetDir . basename($_FILES["file"]["name"]);

        // Check if file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, file already exists.";
        } else {
            // Upload the file
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                // Insert the file path into the database
                $filePath = $targetFile;
                // Database insert code goes here

                echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
?>
