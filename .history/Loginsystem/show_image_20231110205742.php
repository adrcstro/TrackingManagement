<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>

<?php
// Database connection


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $targetDirectory = "uploads/";

    // Check if the directory exists, create it if not
    if (!is_dir($targetDirectory)) {
        mkdir($targetDirectory, 0755, true);
    }

    $targetFile = $targetDirectory . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Rest of your code remains the same...
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="image">Select Image:</label>
    <input type="file" name="image" id="image" accept="image/*">
    <button type="submit" name="submit">Upload Image</button>
</form>

</body>
</html>
