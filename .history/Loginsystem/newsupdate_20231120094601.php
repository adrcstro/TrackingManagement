<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "plate-to-place-v-tracking";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['NewsID'])) {
        $newsid = $_POST['NewsID'];
        $headerofreport = $_POST['HeaderofNews'];
        $dateofNews = $_POST['DateofReport'];
        $bodytext = $_POST['Bodytext'];
       

        if (!empty($newsid)) {
            $stmt = $conn->prepare("UPDATE newsandevents SET Header=?, Date=?, Body=? WHERE NewsID=?");
            $stmt->bind_param("ssss",   $headerofreport,  $dateofNews,  $bodytext,$newsid);

            if ($stmt->execute()) {
                echo "Report record updated successfully";
            } else {
                echo "Error updating complaint record: " . $stmt->error;
            }

            $stmt->close();
        } else {
            echo "Please select a complaint to update";
        }
    }

$conn->close();
?>