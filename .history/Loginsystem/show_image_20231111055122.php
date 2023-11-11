<?php

// Assume you have a PDO connection established in your config.php
require_once "config.php";

if (isset($_POST['submit'])) {
    $targetDirectory = "uploads/"; // Create a directory named "uploads" to store the uploaded images
    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Check if the image file is a valid image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check if file already exists
    if (file_exists($targetFile)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["image"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
            
            // Save the file path in the database using PDO
            $imagePath = $targetFile;
            $sql = "UPDATE driverstbl SET PermittoOperate = :imagePath"; // Assuming there's only one record
            $stmt = $pdo->prepare($sql);
            $stmt->bindParam(':imagePath', $imagePath);
            $result = $stmt->execute();

            if (!$result) {
                echo "Error updating data in the database: " . $stmt->errorInfo()[2];
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>

    <h2>Upload Image</h2>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="image">Choose Image:</label>
        <input type="file" name="image" id="image" required>
        <br>
        <input type="submit" value="Upload" name="submit">
    </form>

    <h2>Display Image</h2>

    <?php
        // Display the uploaded image using PDO
        $sql = "SELECT PermittoOperate FROM driverstbl LIMIT 1"; // Assuming there's only one record, adjust if needed
        $stmt = $pdo->query($sql);

        if ($stmt) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            $imagePath = $row['PermittoOperate'];

            if ($imagePath) {
                echo "<img src='$imagePath' alt='Permit to Operate'>";
            } else {
                echo "No image available.";
            }
        } else {
            echo "Error fetching data from the database: " . $pdo->errorInfo()[2];
        }
    ?>

</body>
</html>
