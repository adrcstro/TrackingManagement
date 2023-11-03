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
    margin-top: 1rem;
    position: absolute;
  }
.sign-in-form{
  margin-top: -2rem;
  
}
@media (max-width: 400px) {
  .heading h2{
    margin-top: 2rem;
    position: absolute;
  }
.sign-in-form{
  margin-top: -4rem;
  
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
                  />
                  <label>Confirm New Password</label>
                </div>




                <p class="text">
                  Done creating your new password on your login datails?

                  <a href="Login.php">sign in</a> to check
                </p>
                <input type="submit" value="Sign In" class="sign-btn" />

              
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