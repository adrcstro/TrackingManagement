<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-wVv0y5xLZu6dzZLAMcSfGSE1xFkZDO9Q6M/QmbUihd2eR5Zbty2U2ls4lDds1xs8KzPQfZ85teW3cvPmmAmFYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Include SweetAlert library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</head>
<body>

<?php
require_once('Config.php');

if (isset($_GET['search'])) {
    $searchText = $_GET['search'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Username, Age, Password, PermittoOperate,Profile FROM driverstbl WHERE Username LIKE '%$searchText%' OR Age LIKE '%$searchText%' OR Password LIKE '%$searchText%'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div style="display: flex; flex-wrap: wrap;">';

            // Input Fields
            echo '<div  style="flex: 1; margin-right: 20px; margin-top: 20px; position: relative;">';


            echo "<div class='row text-center'>";
            echo "<div class='col-md-12 mb-4'>"; // Adjust the margin-bottom as needed
            echo "<div class='image-box border rounded p-2' style='display: inline-block; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);'>";
            echo '<img src="uploads/' . htmlspecialchars($row["Profile"]) . '" class="img-fluid mb-2 mt-2" style="width: 100px; height: 100px;">'; // Adjust the width and height as needed
            echo "</div>";
            echo "</div>";
            echo "</div>";

            echo ' <input type="text" id="Username" value="Driver Name: ' . $row["Username"] .  ' <i class="fas fa-copy"></i>" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;">';
      

          
            echo '<p><input type="text" value="Vehicle Number: ' . $row["Age"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 330px;"></p>';
            echo '<p><input type="text" value="Plate Number: ' . $row["Password"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 330px;"></p>';
            echo '</div>';

            echo '<div class="images">';
            echo '<img src="uploads/' . $row['PermittoOperate'] . '" style="border: 1px solid #ccc; border-radius: 5px; width: 350px; height: 300px;  margin-top:1rem; margin-right: 3rem;">';
            echo '</div>';

            echo '</div>';
        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>


</body>
</html>
