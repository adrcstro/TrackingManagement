<!DOCTYPE html>
<html>
<head>
<style>
  #otp-form {
    max-width: 300px;
    margin: 50px auto;
    padding: 20px;
    border: 1px solid #ccc;
  }
</style>
</head>
<body>

<div id="otp-form">
  <h2>OTP Verification</h2>
  <p>Enter the OTP sent to your email.</p>

  <?php
  session_start();
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST['generate_otp'])) {
          $generatedOTP = rand(1000, 9999);
          $_SESSION['generatedOTP'] = $generatedOTP;
          $_SESSION['otp_time'] = time() + 10; // OTP expires in 10 seconds
          echo "<script>alert('OTP generated: $generatedOTP');</script>";
      } elseif (isset($_POST['submit_otp'])) {
          $userOTP = $_POST['otp'];
          if (isset($_SESSION['generatedOTP']) && isset($_SESSION['otp_time']) && time() <= $_SESSION['otp_time']) {
              $generatedOTP = $_SESSION['generatedOTP'];
              if ($userOTP == $generatedOTP) {
                  echo "<script>alert('OTP matched! Redirecting to another form.');";
                  echo "window.location.href='another_form.php';</script>";
              } else {
                  echo "<script>alert('Incorrect OTP! Please try again.');";
                  echo "window.location.href='index.php';</script>";
              }
          } else {
              unset($_SESSION['generatedOTP']);
              echo "<script>alert('Your OTP has expired! Please generate a new OTP.');";
              echo "window.location.href='index.php';</script>";
          }
      }
  }
  ?>

  <div id="otp-field" <?php if (!isset($_SESSION['generatedOTP'])) { echo "style='display:none;'"; } ?>>
    <form method="post">
      <input type="text" name="otp" id="otp" placeholder="Enter OTP">
      <input type="submit" name="submit_otp" value="Submit OTP">
    </form>
  </div>

  <form method="post">
    <input type="submit" name="generate_otp" value="Generate OTP">
  </form>

  <p id="time" style="font-weight: bold; margin-top: 10px;"></p>
</div>

<script>
  var timer;
  function startTimer(duration, display) {
      var timer = duration, minutes, seconds;
      setInterval(function () {
          minutes = parseInt(timer / 60, 10);
          seconds = parseInt(timer % 60, 10);

          minutes = minutes < 10 ? "0" + minutes : minutes;
          seconds = seconds < 10 ? "0" + seconds : seconds;

          display.textContent = "OTP will expire in: " + seconds + " seconds";

          if (--timer < 0) {
              clearInterval(timer);
              alert('Your OTP has expired! Please generate a new OTP.');
              window.location.href = 'index.php';
          }
      }, 1000);
  }

  window.onload = function () {
      var tenSeconds = 10,
          display = document.querySelector('#time');
      startTimer(tenSeconds, display);
  };
</script>

</body>
</html>
