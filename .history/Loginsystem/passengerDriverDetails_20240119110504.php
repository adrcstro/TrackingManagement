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

            echo '<div style="position: relative; display: inline-block;">';
            echo '  <input type="text" id="Username" value="Driver Name:' . $row["Username"] .  '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 300px;">';
            echo '  <i class="fas fa-copy" style="position: absolute; top: 40%; right: 9px; transform: translateY(-50%); cursor: pointer;" onclick="pasteFromClipboard()"></i>';
            echo '</div>';
            
            

          
            echo '<p><input type="text" value="Vehicle Number: ' . $row["Age"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 330px;"></p>';
            echo '<p><input type="text" value="Plate Number: ' . $row["Password"] . '" readonly style="border: 1px solid #ccc; padding: 5px; margin-bottom: 10px; border-radius: 5px; width: 330px;"></p>';
            echo '</div>';

            echo '<div class="images">';
            echo '<img src="uploads/' . $row['PermittoOperate'] . '" style="border: 1px solid #ccc; border-radius: 5px; width: 350px; height: 300px;  margin-top:1rem; margin-right: 3rem;">';
            echo '</div>';

            echo '</div>';

echo'<script> 
function pasteFromClipboard() {
        // Read text from the clipboard
        navigator.clipboard.readText()
            .then(text => {
                // Set the value of the input field with id "address" to the text from the clipboard
                document.getElementById('PassSearchDriver').value = text;
            })
            .catch(err => {
                console.error('Failed to read text from clipboard', err);
            });
    }
    </script>







<script>
document.getElementById('copyComplaineeName').addEventListener('click', function() {
    // Get the input element
    var homeAddressInput = document.getElementById('Username');

    // Get the value of the input, excluding the "Home Address: " prefix
    var actualAddress = homeAddressInput.value.replace('Driver Name: ', '');

    // Create a temporary textarea element to copy the text without the prefix
    var tempTextArea = document.createElement('textarea');
    tempTextArea.value = actualAddress;

    // Append the textarea to the document
    document.body.appendChild(tempTextArea);

    // Select the text inside the textarea
    tempTextArea.select();
    tempTextArea.setSelectionRange(0, 99999); // For mobile devices

    // Copy the selected text to the clipboard
    document.execCommand('copy');

    // Remove the temporary textarea
    document.body.removeChild(tempTextArea);

    // Show Sweet Alert
    Swal.fire({
        icon: 'success',
        title: 'Copied!',
        text: 'The address has been copied to the clipboard.',
        showConfirmButton: false,
        timer: 1500 // Adjust the timer as needed
    });
});
</script>';



        }
    } else {
        echo "<p>No results found</p>";
    }
    $conn->close();
}
?>


</body>
</html>
