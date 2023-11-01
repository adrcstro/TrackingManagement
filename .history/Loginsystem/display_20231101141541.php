<!DOCTYPE html>
<html>
<body>

<form action="display.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $file = addslashes(file_get_contents($_FILES["fileToUpload"]["tmp_name"]));
    $fileName = $_FILES['fileToUpload']['name'];

    $sql = "INSERT INTO driverstbl (Name, DriversLicense) VALUES ('$fileName', '$file')";

    if ($conn->query($sql) === true) {
        echo "Image uploaded successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$sql = "SELECT id, Name, image FROM codeflix";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div style="float: left; margin: 10px;">';
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['DriversLicense']) . '" style="width:300px;height:300px;">';
        echo '<p>' . $row['Name'] . '</p>';
        echo '</div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
