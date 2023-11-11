<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Driver's Permit</title>
</head>
<body>
    <h2>Driver's Permit Information</h2>

    <!-- Form to upload image -->
    <?php
    // Database connection code
    require_once('Config.php');

    $connection = mysqli_connect($servername, $username, $password, $dbname);

    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

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
                $query = "INSERT INTO driverstbl (PermittoOperate) VALUES ('$filePath')";
                mysqli_query($connection, $query);

                echo "The file " . htmlspecialchars(basename($_FILES["file"]["name"])) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    ?>

    <form action="" method="post" enctype="multipart/form-data">
        <label for="file">Upload Permit to Operate:</label>
        <input type="file" name="file" id="file" accept="image/*">
        <input type="submit" value="Upload">
    </form>

    <hr>

    <!-- Display uploaded image -->
    <h3>Permit to Operate:</h3>
    <?php
    // Fetch the image path from the database
    $query = "SELECT PermittoOperate FROM driverstbl ORDER BY id DESC LIMIT 1";
    $result = mysqli_query($connection, $query);

    if ($result && mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $imagePath = $row['PermittoOperate'];

        // Display the image
        echo "<img src='$imagePath' alt='Permit to Operate'>";
    } else {
        echo "No image found.";
    }

    // Close the database connection
    mysqli_close($connection);
    ?>
</body>
</html>
