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
          echo "<script>alert('OTP generated: $generatedOTP');</script>";
      } elseif (isset($_POST['submit_otp'])) {
          $userOTP = $_POST['otp'];
          $generatedOTP = $_SESSION['generatedOTP'];
          if ($userOTP == $generatedOTP) {
              echo "<script>alert('OTP matched! Redirecting to another form.');";
              echo "window.location.href='another_form.php';</script>";
          } else {
              echo "<script>alert('Incorrect OTP! Please try again.');</script>";
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
</div>

</body>
</html>
