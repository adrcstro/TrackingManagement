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

  <div id="otp-field" style="display:none;">
    <input type="text" id="otp" placeholder="Enter OTP">
    <button onclick="submitOTP()">Submit OTP</button>
  </div>

  <button onclick="generateOTP()">Generate OTP</button>
</div>

<script>
  let generatedOTP = '';

  function generateOTP() {
    // You can use a random number generator or any other logic to generate OTP
    generatedOTP = Math.floor(1000 + Math.random() * 9000);
    alert('OTP generated: ' + generatedOTP);
    document.getElementById('otp-field').style.display = 'block';
  }

  function submitOTP() {
    let enteredOTP = document.getElementById('otp').value;
    if (enteredOTP === generatedOTP) {
      alert('OTP matched! Redirecting to another form.');
      // You can use window.location.href to redirect to another form
      // window.location.href = 'url_of_another_form';
    } else {
      alert('Incorrect OTP! Please try again.');
    }
  }
</script>

</body>
</html>
