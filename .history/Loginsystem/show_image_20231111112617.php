<?php
$con = mysqli_connect("localhost", "root", "", "image");

if (isset($_POST['upload'])) {
    $file = $_FILES['image']['name'];
    $file_tmp = $_FILES['image']['tmp_name'];

    $query = "INSERT INTO up(image) VALUES('$file')";
    $res =  mysqli_query($con, $query);

    if ($res) {
        move_uploaded_file($_FILES["image"]["tmp_name"], "$file");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
                    <h3>Upload image</h3>

                    <form class="my-5" method="post" enctype="multipart/form-data">
                        <input type="file" name="image" class="form-control">
                        <input type="submit" name="upload" class="form-control">
                    </form>
                </div>

                <div class="col-md-6">
                    <h3>Display Image</h3>

                    <?php
                    $result = mysqli_query($con, "SELECT * FROM up");
                    while ($row = mysqli_fetch_array($result)) {
                        echo '<img src="uploads/' . $row['image'] . '" width="300" height="200" />';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
