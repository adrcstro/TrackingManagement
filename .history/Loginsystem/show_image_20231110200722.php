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
require_once('Config.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Image upload handling
if (isset($_POST['submit'])) {
    $image = $_FILES['image']['tmp_name'];
    $imageData = addslashes(file_get_contents($image));

    $sql = "INSERT INTO driverstbl (PermittoOperate) VALUES ('$imageData')";

    if ($conn->query($sql) === TRUE) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error uploading image: " . $conn->error;
    }
}

// Display the latest uploaded image
$sql = "SELECT * FROM driverstbl ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $imageData = $row['PermittoOperate'];
    echo '<img src="data:image/jpeg;base64,' . base64_encode($imageData) . '" alt="Uploaded Image">';
} else {
    echo "No image available.";
}

$conn->close();
?>

<form action="" method="post" enctype="multipart/form-data">
    <label for="image">Choose an image:</label>
    <input type="file" name="image" id="image" accept="image/*">
    <button type="submit" name="submit">Upload Image</button>
</form>

</body>
</html>
