<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="../images/webicon.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="passenger.css">
   
    <title>Brangay409-3WHeel-Tracking-System</title>
</head>

<body>

<main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form id="clear" action="Passenger.php" autocomplete="off" method="post" class="sign-in-form">
  
<script>
    function changeLoginType(type) {
        document.getElementById('loginDropdown').innerText = 'Login as ' + type;
    }
</script>   
              <div class="heading">
                <h2>Get Started</h2>
                <h6>Already have an Account?</h6>
                <a href="login.php" class="loginaccount" data-target="img-2">Log in</a>
              </div>
              <div class="dropdown">
    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false" id="loginDropdown">
        Signup as Passenger
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="Passenger.php" onclick="changeLoginType('Passenger')">Passenger</a></li>
        <li><a class="dropdown-item" href="Driverlogin.php" onclick="changeLoginType('Driver')">Driver</a></li>
      
    </ul>
</div>
<div class="formsignin">



              <div class="actual-form">
                <div class="input-wrap">
                  <input
                   id="Name"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="Name"
                  />
                  <label>Name</label>
                </div>

                <div class="input-wrap">
                  <input
                    id="Age"
                    type="text"
                    minlength="2"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="Age"
                  />
                  <label>Age</label>
                </div>

                <div class="input-wrap">
                  <input
                  id="Gender"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="Gender"
                  />
                  <label>Gender</label>
                </div>

                <div class="input-wrap">
                  <input
                    id="Phone"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="Phone"
                  />
                  <label>Phone Number</label>
                </div>
                <div class="input-wrap">
                  <input
                    id="HomeAddress"
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="HomeAddress"
                  />
                  <label>Home Address</label>
                </div>

                <div class="input-wrap">
                  <input
                  id="Email"
                    type="email"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="Email"
                  />
                  <label>Email</label>
                </div>
                <div class="input-wrap">
                  <input
                  id="Password"
                    type="password"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    name="Password"
                  />
                  <label>Password</label>
                </div>
                <p class="text">
                  Forgotten your password on your login datails?

                  <a href="Forgotpassword.php" data-target="img-2">Get help signing in</a>
                </p>
                <input id="Register" type="submit" name="create" value="Sign Up" class="sign-btn" />
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
    <img src="../images/Signup.svg" class="image img-2 show" alt="" />
  </div>
  
  <div class="col-md-12">
         <h2 class="text-center" id="FAQ">FAQ Upon Signing in</h2>
         <div class="accordion accordion-flush " id="accordionFlushExample">
          <div class="accordion-item bg-white shadow">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                What is the purpose of the Tricycle Tracking Management System in Barangay 409?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">The Tricycle Tracking Management System aims to streamline tricycle operations and ensure passenger safety and efficient transportation services within the barangay.</div>
            </div>
          </div>
          <div class="accordion-item shadow">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                How can I register my tricycle in the Tricycle Tracking Management System?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">To register your tricycle, visit the barangay office and submit the required documents, including the tricycle's registration papers, driver's license, and other necessary permits.</div>
            </div>
          </div>
          <div class="accordion-item shadow">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                What are the benefits of the Tricycle Tracking Management System for tricycle drivers and operators?
              </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">The system provides improved transparency in fare collection, enhances security measures for both drivers and passengers, and facilitates better route planning, leading to increased efficiency and profitability for tricycle operators.
              </div>
            </div>
          </div>

          <div class="accordion-item shadow">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                How does the Tricycle Tracking Management System ensure passenger safety?
              </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">The system integrates safety measures such as  Report Management, Legal Action Provider, and driver identification features, which enable swift responses to any emergency situations during tricycle rides.</div>
            </div>
          </div>
         
      

        </div>
         </div>


</div>
        </div>
      </div>
    </main>

    <script src="../js/bootstrap.bundle.js"></script>
    <script src="login.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript"> 
    
    $(function(){
		$('#Register').click(function(e){

			var valid = this.form.checkValidity();

			if(valid){


      var Name        = $('#Name').val();
      var Age         = $('#Age').val();
      var Gender      = $('#Gender').val();
      var Phone       = $('#Phone').val();
      var HomeAddress = $('#HomeAddress').val();
      var Email       = $('#Email').val();
      var Password    = $('#Password').val();
				e.preventDefault();	
				$.ajax({
					type: 'POST',
					url: 'process.php',
				  data:{Name: Name,Age: Age ,Gender: Gender,Phone: Phone,HomeAddress: HomeAddress,Email: Email,Password: Password},
          success: function(data) {
    swal("Success", data, "success").then((value) => {
        if (value) {
            $('#clear')[0].reset(); // Reset the form
        }
    });
},
					error: function(data){
						swal("Error", "There were errors while saving the data.", "error");
					}
				});

			}else{
				
			}

		});		

		
	});
	
    </script>
</body>


</html>