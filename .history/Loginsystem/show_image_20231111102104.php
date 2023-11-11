<?php
$con = mysqli_connect("localhost","root","","plate-to-place-v-tracking");
if (isset($_POST['upload'])) {
$file = $_POST['PermittoOperate']['name'];


$querry = "INSERT INTO driverstbl(image) VALUES('$file')";

$res =  mysqli_query($con, $querry);

if($res){
move_uploaded_file($_FILES["PermittoOperate"]["tmp_name"],"$file");

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
    <div class="contai">
        <div class="col-md-12">
            <div class="row">
                <div class="col-md-6">
<h3>Upload image</h3>

<form  class="my-5" method="post" enctype="multipart/form-data">
    <input type="file" name="PermittoOperate" class="form-control">
    <input type="submit" name="upload" class="form-control">

</form>


                </div>
<div class="col-md-6">
<h3>Display Image</h3>
</div>



            </div>
        </div>
    </div>
</body>
</html>