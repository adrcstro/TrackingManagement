<!DOCTYPE html>
<html>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST["submit"])) {
    $file = addslashes(file_get_contents($_FILES["fileToUpload"]["tmp_name"]));
    $fileName = $_FILES['fileToUpload']['name'];

    $sql = "INSERT INTO codeflix (name, image) VALUES ('$fileName', '$file')";

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
        echo '<img src="data:image/jpeg;base64,' . base64_encode($row['image']) . '" style="width:300px;height:300px;">';
        echo '<p>' . $row['name'] . '</p>';
        echo '</div>';
    }
} else {
    echo "0 results";
}
$conn->close();
?>

</body>
</html>
