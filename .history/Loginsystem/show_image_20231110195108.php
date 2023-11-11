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
    <form action="upload.php" method="post" enctype="multipart/form-data">
        <label for="file">Upload Permit to Operate:</label>
        <input type="file" name="file" id="file" accept="image/*">
        <input type="submit" value="Upload">
    </form>

    <hr>

    <!-- Display uploaded image -->
    <h3>Permit to Operate:</h3>
    <?php
        // PHP code to fetch and display the image from the database
        include('display.php');
    ?>
</body>
</html>
