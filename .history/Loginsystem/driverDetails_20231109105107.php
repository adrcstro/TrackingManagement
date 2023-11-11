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
            echo '<p><input type="text" value="' . $row["Username"] . '" readonly></p>';
            echo '<p><input type="text" value="' . $row["Age"] . '" readonly></p>';
            echo '<p><input type="text" value="' . $row["Password"] . '" readonly></p>';
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>
