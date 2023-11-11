<?php
require_once('Config.php');


if (isset($_GET['search'])) {
    $searchText = $_GET['search'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Username, Age, Password FROM driverstbl WHERE Username LIKE '%$searchText%' OR Age LIKE '%$searchText%' OR Password LIKE '%$searchText%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo '<p><input type="text" value="<strong>Driver Name: </strong>' . $row["Username"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px;margin-top: 20px; border-radius: 5px;" readonly></p>';
            echo '<p><input type="text" value="<strong>Vehicle Number: </strong>' . $row["Age"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px;" readonly></p>';
            echo '<p><input type="text" value="<strong>Plate Number: </strong>' . $row["Password"] . '" style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px;" readonly></p>';
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
