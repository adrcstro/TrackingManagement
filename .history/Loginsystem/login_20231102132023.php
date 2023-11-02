<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="../images/webicon.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="login.css">
   
    <title>Brangay409-3WHeel-Tracking-System</title>
</head>

<body>

<main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form id="clear" action="loginprocess.php" autocomplete="off" method="post" class="sign-in-form"   >
  

              <div class="heading">
                <h2>Welcome!</h2>
                <h6>Not registred yet?</h6>
                <a href="#" class="toggle" data-target="img-2">Sign in</a>
              </div>

              <div class="dropdown" name="Role">
    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="loginDropdown">
        Select User Type:
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="#" onclick="changeLoginType('Passenger')">Passenger</a></li>
        <li><a class="dropdown-item" href="#" onclick="changeLoginType('Driver')">Driver</a></li>
        <li><a class="dropdown-item" href="#" onclick="changeLoginType('Admin')">Admin</a></li>
    </ul>
</div>

<div class="formsignin">
    <div class="actual-form">
        <div class="input-wrap">
            <input
                type="text"
                minlength="4"
                class="input-field"
                autocomplete="off"
                required
                id="Email"
                name="Email"
            />
            <label id="emailLabel" for="Email">Email</label>
        </div>

        <div class="input-wrap">
            <input
                type="password"
                minlength="4"
                class="input-field"
                autocomplete="off"
                required
                id="Password"
                name="Password"
            />
            <label id="passwordLabel" for="Password">Password</label>
        </div>
        <p class="text">
            Forgotten your password on your login details?
            <a href="Forgotpassword.php" data-target="img-3">Get help signing in</a>
        </p>
        <input type="submit" name="submit" value="Sign In" class="sign-btn" />
        <h5 id="textcon">Continue with</h5>
        <button type="button" class="login-with-google-btn">
            Sign in with Google
        </button>
    </div>
</div>

<script>
    function changeLoginType(type) {
        const emailLabel = document.getElementById('emailLabel');
        const passwordLabel = document.getElementById('passwordLabel');
        const loginDropdown = document.getElementById('loginDropdown');

        if (type === 'Admin') {
            emailLabel.textContent = 'Username';
            passwordLabel.textContent = 'Password';
            loginDropdown.textContent = 'Login as:Admin';
        } else if (type === 'Driver') {
            emailLabel.textContent = 'Name';
            passwordLabel.textContent = 'PlateNumber';
            loginDropdown.textContent = 'Login as:Driver';
        } else {
            emailLabel.textContent = 'Email';
            passwordLabel.textContent = 'Password';
            loginDropdown.textContent = 'Login as:Passenger:';
        }
    }
</script>


            </form>


            <form action="loginprocess.php" method="post" autocomplete="off" class="sign-up-form">
       
              <div class="heading">
            

                <h2>Get Started</h2>
                <h6>Already have an account?</h6>
                <a href="#" class="toggle" data-target="img-1">Sign up</a>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>