<?php
require_once('Config.php');
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

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $usertype = $_POST['usertype'];

  $table_name = "";
  $column_name = ""; // Add the column name you want to fetch here
  if ($usertype == 'admin') {
      $table_name = "admintbl";
      $column_name = "Username, Password"; // Replace with the actual column name
  } elseif ($usertype == 'driver') {
      $table_name = "driverstbl";
      $column_name = "Username, Password"; // Replace with the actual column name
  } elseif ($usertype == 'passenger') {
      $table_name = "passengertbl";
      $column_name = "Username, Password"; // Replace with the actual column name
  }

  $sql = "SELECT $column_name FROM $table_name WHERE username = ? AND password = ?";
  $stmt = $conn->prepare($sql);
  $stmt->bind_param("ss", $username, $password);
  $stmt->execute();
  $result = $stmt->get_result();

  if ($result->num_rows > 0) {
      // User exists, redirect to respective dashboards
      if ($usertype == 'admin') {
          echo "<script>
                  swal('Success', 'Logged in successfully!', 'success').then(() => {
                      window.location.href = 'admin.php';
                  });
              </script>";
          exit();
      } elseif ($usertype == 'driver') {
          echo "<script>
                  swal('Success', 'Logged in successfully!', 'success').then(() => {
                      window.location.href = 'driverdash.php';
                  });
              </script>";
          exit();
      } elseif ($usertype == 'passenger') {
          echo "<script>
                  swal('Success', 'Logged in successfully!', 'success').then(() => {
                      window.location.href = 'passengerdash.php';
                  });
              </script>";
          exit();
      }
  } else {
      echo "<script>
              swal('Error', 'Login failed. Please check your username and password.', 'error');
          </script>";
  }
}
?>






<main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form id="clear"  action="<?php echo $_SERVER['PHP_SELF']; ?>" autocomplete="off" method="post" class="sign-in-form"   >
  

              <div class="heading">
                <h2>Welcome!</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle" data-target="img-2">Sign up</a>
              </div>
              
          
              <select name="usertype" id="usertype" onchange="handleChange()">
    <option value="admin">Admin</option>
    <option value="driver">Driver</option>
    <option value="passenger">Passenger</option>
</select>

<div class="formsignin">
    <div class="actual-form">
        <div class="input-wrap">
            <input
                type="text"
                minlength="2"
                class="input-field"
                autocomplete="off"
                required
                id="username" 
                name="username"
            />
            <label id="emailLabel" for="username">Email</label>
        </div>

        <div class="input-wrap">
            <input
                type="password"
                minlength="4"
                class="input-field"
                autocomplete="off"
                required
                id="password"
                name="password"
            />
            <label id="passwordLabel" for="password">Password</label>
        </div>
        <p class="text">
            Forgotten your password on your login details?
            <a href="Forgotpassword.php" data-target="img-3">Get help signing in</a>
        </p>
        <input type="submit" name="submit" value="Submit" class="sign-btn" />
        <h5 id="textcon">Continue with</h5>
        <button type="button" class="login-with-google-btn">
            Sign in with Google
        </button>
    </div>
</div>




            </form>


            <form action="loginprocess.php" method="post" autocomplete="off" class="sign-up-form">
       
              <div class="heading">
            

                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle" data-target="img-1">Sign in</a>
              </div>
              <div id="secropdown" class="dropdownsignup">
    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="loginDropdown">
        Signup as
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="Passenger.php" onclick="changeLoginType('Passenger')">Passenger</a></li>
        <li><a class="dropdown-item" href="Driverlogin.php" onclick="changeLoginType('Driver')">Driver</a></li>
    </ul>
</div>
              <div class="actual-form">
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="email"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Email</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                  />
                  <label>Password</label>
                </div>
                <p class="text">
                  By signing up, I agree to the
                  <a href="#">Terms of Services</a> and
                  <a href="#">Privacy Policy</a>
                </p>
                <input type="submit" value="Sign Up" class="sign-btn" />
                <div class="logtext">   
                <h5 id="textcon">Continue with</h5>
                <button type="button" class="login-with-google-btn" >
                Sign in with Google
                 </button>
                 </div>
              </div>
            </form>



          </div>

          <div class="carousel">
  <div class="images-wrapper">
    <img src="../images/login.svg" class="image img-1 show" data-image="img-1" alt="" />
    <img src="../images/Signup.svg" class="image img-2" data-image="img-2" alt="" />
    <img src="../images/Forgot.svg" class="image img-3" data-image="img-3" alt="" />
  </div>

  <div class="text-slider">
    <div class="text-wrap">
      <div class="text-group">
        <h2>Get Started</h2>
        <h2>Join us</h2>
        <h2>Set new Password</h2>
      </div>
    </div>

    <div class="bullets">
      <span class="active" id="login" data-value="1"></span>
     
    </div>
  </div>
</div>

<script>
  document.addEventListener("DOMContentLoaded", function () {
    const toggles = document.querySelectorAll(".toggle");

    toggles.forEach(function (toggle) {
      toggle.addEventListener("click", function (e) {
        e.preventDefault();
        const target = toggle.getAttribute("data-target");
        const images = document.querySelectorAll(".image");
        images.forEach(function (image) {
          if (image.classList.contains(target)) {
            image.classList.add("show");
          } else {
            image.classList.remove("show");
          }
        });
      });
    });
  });
 
</script>





          
        </div>
      </div>
    </main>


    <script src="../js/bootstrap.bundle.js"></script>
    <script src="login.js"></script>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     
</body>

</html>
<?php
$conn->close();

