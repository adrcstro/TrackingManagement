<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Upload</title>
</head>
<body>

    <h2>Upload Image</h2>

    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="image">Choose Image:</label>
        <input type="file" name="image" id="image" required>
        <br>
        <input type="submit" value="Upload" name="submit">
    </form>

    <h2>Display Image</h2>

    <?php
        // Display the uploaded image
        require_once "config.php"; // Include your database connection configuration file

        $sql = "SELECT PermittoOperate FROM driverstbl"; // Assuming there's only one record, adjust if needed

        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);
            $imagePath = $row['PermittoOperate'];

            if ($imagePath) {
                echo "<img src='$imagePath' alt='Permit to Operate'>";
            } else {
                echo "No image available.";
            }
        } else {
            echo "Error fetching data from the database: " . mysqli_error($conn);
        }
    ?>

</body>
</html>
