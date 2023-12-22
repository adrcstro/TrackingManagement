<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-wVv0y5xLZu6dzZLAMcSfGSE1xFkZDO9Q6M/QmbUihd2eR5Zbty2U2ls4lDds1xs8KzPQfZ85teW3cvPmmAmFYg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    
</body>
</html>



<?php
require_once('Config.php');

if (isset($_GET['search'])) {
    $searchText = $_GET['search'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
 
    $sql = "SELECT Username, Age, Password, PermittoOperate FROM driverstbl WHERE Username LIKE '%$searchText%' OR Age LIKE '%$searchText%' OR Password LIKE '%$searchText%'";
    $result = $conn->query($sql);




    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div style="display: flex; flex-wrap: wrap;">';

// Input Fields
echo '<div  style="flex: 1; margin-right: 20px; position: relative;   ">';


echo '<div class="input-group mb-3 mt-5" style="border: 1px solid #ccc;">';
echo ' <input type="text" value="Driver Name: ' . $rowUsername = $row["Username"] . '" class="form-control" aria-describedby="button-addon2">';
echo ' <button class="btn btn-outline-secondary" type="button" id="button-addon2">Select</button>';
echo '</div>';


echo '<p><input type="text" value="Vehicle Number: ' . $row["Age"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 330px;"></p>';
echo '<p><input type="text" value="Plate Number: ' . $row["Password"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 330px;"></p>';
echo '</div>';

echo '<div class="images">';
echo '<img src="uploads/' . $row['PermittoOperate'] . '"
 style="border: 1px solid #ccc; border-radius: 5px; width: 350px; height: 300px;  margin-top:1rem; margin-right: 3rem;">';



echo '</div>';
echo '</div>';
      }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Get the button and input field by their IDs
    var button = document.getElementById('button-addon2');
    var passSearchDriverInput = document.getElementById('PassSearchDriver');

    // Add click event listener to the button
    button.addEventListener('click', function () {
        // Assuming $row["Username"] contains the desired value
        var usernameValue = <?php echo json_encode($row["Username"]); ?>;

        // Update the value of the input field with the usernameValue
        passSearchDriverInput.value = usernameValue;
    });
});
</script>