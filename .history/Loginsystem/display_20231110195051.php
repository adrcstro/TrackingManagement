<?php
    // Database connection code goes here

    // Fetch the image path from the database (modify the query according to your database structure)
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
?>
