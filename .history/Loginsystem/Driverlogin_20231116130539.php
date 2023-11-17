<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="../images/webicon.png">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="driver.css">
   
    <title>Brangay409-3WHeel-Tracking-System</title>
</head>

<body>    



<main>
      <div class="box">
        <div class="inner-box">
          <div class="forms-wrap">
            <form id="clear" action="process.php" method="post" autocomplete="off" class="sign-in-form" enctype="multipart/form-data">
  
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
        Signup as Driver
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
                    type="text"
                    minlength="2"
                    class="input-field"
                    autocomplete="off"
                    required
                    id="Username"
                    name="Username"
                  />
                  <label for="Username">Name</label>
                </div>
 
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="2"
                    class="input-field"
                    autocomplete="off"
                    required
                    id="Age"
                    name="Age"
                  />
                  <label for="Age">Tricycle Unit#</label>
                </div>

                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    id="Password"
                    name="Password"
                  />
                  <label for="Password">Plate Number</label>
                </div>

                <div id="Filefield" class="input-wrap">
  <label for="DriversLicense" class="custom-label">Driver's license</label>
  <input required class="form-control" type="file" id="DriversLicense" name="DriversLicense" accept=".jpg, .png .jpeg .pdf, .doc, .docx" title="Please ensure the image is clear and legible" >
</div>

<div id="Filefield" class="input-wrap">
  <label for="VehicleRegistration" class="custom-label">Vehicle Registration</label>
  <input required class="form-control" type="file" id="VehicleRegistration" name="VehicleRegistration" accept=".jpg, .png .jpeg .pdf, .doc, .docx" title="Please ensure the image is clear and legible" >
</div>
<div id="Filefield" class="input-wrap">
  <label for="PermittoOperate" class="custom-label">Vehicle Unit Apperance</label>
  <input required class="form-control" type="file" id="PermittoOperate" name="PermittoOperate" accept=".jpg, .png .jpeg .pdf, .doc, .docx" title="Please ensure the image is clear and legible" >
</div>

                
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    id="PhoneNumber"
                    name="PhoneNumber"
                    
                  />
                  <label for="PhoneNumber">Phone Number</label>
                </div>
                <div class="input-wrap">
                  <input
                    type="text"
                    minlength="4"
                    class="input-field"
                    autocomplete="off"
                    required
                    id="HomeAddress"
                    name="HomeAddress"
                  />
                  <label for="HomeAddress">Home Address</label>
                </div>
                <p class="text">
                  Forgotten your password on your login datails?

                  <a href="Forgotpassword.php" data-target="img-2">Get help signing in</a>
                </p>
                <input id="Registerdriver"   type="submit" value="Submit" class="sign-btn" />
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
         <h2 class="mt-2 text-center" id="FAQ">FAQ Upon Signing in</h2>
         <div class="accordion accordion-flush p-2" id="accordionFlushExample">
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
    $('#Registerdriver').click(function(e){

        var valid = this.form.checkValidity();

        if(valid){

            var formData = new FormData();
            formData.append('Username', $('#Username').val());
            formData.append('Age', $('#Age').val());
            formData.append('Password', $('#Password').val());
            formData.append('DriversLicense', $('#DriversLicense')[0].files[0]);
            formData.append('VehicleRegistration', $('#VehicleRegistration')[0].files[0]);
            formData.append('PermittoOperate', $('#PermittoOperate')[0].files[0]);
            formData.append('PhoneNumber', $('#PhoneNumber').val());
            formData.append('HomeAddress', $('#HomeAddress').val());

            e.preventDefault();    

            $.ajax({
                type: 'POST',
                url: 'process.php',
                data: formData,
                processData: false,
                contentType: false,
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

            
        } else {
            // Handle invalid form data here
        }
    });        

});


    
    
    
    
    
    </script>

      
</body>

</html>