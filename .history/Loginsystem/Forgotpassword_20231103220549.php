<?php
require_once('Config.php');
?>

<?php
// Database configuration

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to reset password
// ...

// Function to reset password
// ...

// Function to reset password
// ...

// Function to reset password
function resetPassword($tableName, $username, $newPassword) {
    global $conn;
    $sql = "SELECT * FROM $tableName WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        return false; // Return false if the username is not found
    } else {
        $sql = "UPDATE $tableName SET password = '$newPassword' WHERE username = '$username'";
        if ($conn->query($sql) === TRUE) {
            return true; // Return true if the password reset was successful
        } else {
            echo "Error updating record: " . $conn->error;
            return false; // Return false if an error occurred during the update
        }
    }
}

// Usage
// ...

if (isset($_POST['reset_password'])) {
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];
    $confirmNewPassword = $_POST['confirm_new_password'];

    if ($newPassword !== $confirmNewPassword) {
        echo "Your password Does not match.";
    } else {
        $tableName1 = "admintbl"; // replace with your actual table names
        $tableName2 = "driverstbl";
        $tableName3 = "passengertbl";
        $success1 = resetPassword($tableName1, $username, $newPassword);
        $success2 = resetPassword($tableName2, $username, $newPassword);
        $success3 = resetPassword($tableName3, $username, $newPassword);

        if ($success1 || $success2 || $success3) {
            echo "Password reset successfully for at least one table.";
        } else {
            echo "Your Username is not Registered in Our System.";
        }
    }
}
// ...
?>
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to reset password
// ...

// Function to reset password
// ...

// Function to reset password
// ...

// Function to reset password
function resetPassword($tableName, $username, $newPassword) {
    global $conn;
    $sql = "SELECT * FROM $tableName WHERE username = '$username'";
    $result = $conn->query($sql);

    if ($result->num_rows == 0) {
        return false; // Return false if the username is not found
    } else {
        $sql = "UPDATE $tableName SET password = '$newPassword' WHERE username = '$username'";
        if ($conn->query($sql) === TRUE) {
            return true; // Return true if the password reset was successful
        } else {
            echo "Error updating record: " . $conn->error;
            return false; // Return false if an error occurred during the update
        }
    }
}

// Usage
// ...

if (isset($_POST['reset_password'])) {
    $username = $_POST['username'];
    $newPassword = $_POST['new_password'];
    $confirmNewPassword = $_POST['confirm_new_password'];

    if ($newPassword !== $confirmNewPassword) {
        echo "Your password Does not match.";
    } else {
        $tableName1 = "admintbl"; // replace with your actual table names
        $tableName2 = "driverstbl";
        $tableName3 = "passengertbl";
        $success1 = resetPassword($tableName1, $username, $newPassword);
        $success2 = resetPassword($tableName2, $username, $newPassword);
        $success3 = resetPassword($tableName3, $username, $newPassword);

        if ($success1 || $success2 || $success3) {
            echo "Password reset successfully for at least one table.";
        } else {
            echo "Your Username is not Registered in Our System.";
        }
    }
}
// ...
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="../images/webicon.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="login.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Brangay409-3WHeel-Tracking-System</title>
</head>

<body>
<?php
// Establish connection to MySQL

$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Code for processing the form submission
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $code = $_POST['code'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Verify the code and perform password update
    // Assuming the code verification process here

    // Update password in three tables
    $tables = ['admintbl', 'driverstbl', 'passengertbl']; // Change these to your actual table names

    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

    foreach ($tables as $table) {
        $sql = "UPDATE $table SET password='$hashed_password' WHERE username='your_username'";
        if ($conn->query($sql) === TRUE) {
            echo "Password updated successfully for table: $table";
        } else {
            echo "Error updating password: " . $conn->error;
        }
    }

    // Close the MySQL connection
    $conn->close();
}
?>






<style>
@media (max-width: 816px) {
  .heading h2{
    margin-top: 1rem;
    position: absolute;
  }
.sign-in-form{
  margin-top: -2rem;
  
}

}
@media (max-width: 528px) {
  .heading h2{
    margin-top: 1.1rem;
    position: absolute;
  }
.sign-in-form{
  margin-top: -1rem;
  
}
}
@media (max-width: 400px) {
  .heading h2{
    margin-top: -2rem;
    position: absolute;
  }
.sign-in-form{
  margin-top: 1rem;
}
}
</Style>
<main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form action="index.html" autocomplete="off" class="sign-in-form">
              <div class="heading">
                <h2>Forgot password?</h2>
              </div>

              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="email"
                  />
                  <label>Enter Email</label>
                </div>
                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="code"
                  />
                  <label>Enter Code</label>
                </div>
                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="new_password"
                  />
                  <label>Enter New Password</label>
                </div>
              

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="confirm_password"
                  />
                  <label>Confirm New Password</label>
                </div>




                <p class="text">
                  Done creating your new password on your login datails?

                  <a href="Login.php">sign in</a> to check
                </p>
                <input type="submit" name="submit" value="Sign In" class="sign-btn" />

              
              </div>
            </form>
          </div>

          <div class="carousel">
            <div class="images-wrapper">
              <img src="../images/forgot.svg" class="image img-3 show" alt="" />
              
            </div>

            <div class="text-slider">
              <div class="text-wrap">
                <div class="text-group">
                  <h2 >Set new Password</h2>
                </div>
              </div>

              <div class="bullets">
                <span class="active" id="forgot" data-value="3"></span>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


      
</body>
<script src="../js/bootstrap.bundle.js"></script>
    <script src="login.js"></script>

</html>