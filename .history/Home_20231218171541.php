



<!DOCTYPE html>
<html lang="en">
<head>   
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="x-icon" href="../images/webicon.png">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="style.css">
   
    <title>Brangay409-3WHeel-Tracking-System</title>
</head>
<body>
 
<!-- NAvvar-->
<nav class="navbar navbar-expand-lg navbar-light  bg-white shadow">
    <div class="container">
    <a class="navbar-brand" href="#">
      <img src="../images/webicon.png" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
      Bootstrap
    </a>



      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#carouselExampleDark">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#aboutus">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#FAQ">FAQ</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#Contact">Contact</a>
          </li>
        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Blogs
            </a>
            <ul class="dropdown-menu" id="box" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="Home.php">News</a></li>
              <li><a class="dropdown-item" href="#">Events</a></li>
              
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
        </ul>
        <form class="d-flex" id="btn-phonenavbar">
    <button class="btn btn-brand" type="button" name="login" onclick="redirectToLogin()">Login</button>
    <button class="btn-signup" type="button" onclick="redirectToSignUp()">Sign up</button>
</form>
<script>
    function redirectToLogin() {
        window.location.href = "Loginsystem/login.php";
    }

    function redirectToSignUp() {
        // Replace "yourSignUpFile.php" with the actual filename you want to redirect to
        window.location.href = "Loginsystem/passenger.php";
    }
</script>

        
      </div>
    </div>
  </nav>

<!--home copntent-->
<div id="carouselExampleDark" class="carousel carousel-light slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">



      <div class="carousel-item text-center bg-cover vh-100 active slide-1" data-bs-interval="3000">

        <div class="container h-100 d-flex align-items-center justify-content-center"> 
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <h6 class="text-white">Welcome to BRGY.409 Plate-to-Place Tricycle Tracking Management</h6>
            <h1 class="display-1 fw-bold text-white">Report/File Complaint</h1>
            <a href="#" class="btn btn-brand">Take an Action</a>
            <a href="#" class="btn btn-secondary">Get Started</a>
        </div>
      </div>
    </div>
  </div>


      <div class="carousel-item text-center bg-cover vh-100 slide-2 " data-bs-interval="2000">
        
        <div class="container h-100 d-flex align-items-center justify-content-center"> 
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <h6 class="text-white">Welcome to Plate-to-Place Tricycle Tracking Management</h6>
            <h1 class="display-1 fw-bold text-white">Fast Public Service</h1>
            <a href="#" class="btn btn-brand">Take an Action</a>
            <a href="#" class="btn btn-secondary" id="transbtn">Get Started</a>
        </div>
        </div>
      </div>
    </div>



      <div class="carousel-item text-center bg-cover vh-100 slide-3"data-bs-interval="1000">

        <div class="container h-100 d-flex align-items-center justify-content-center"> 
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <h6 class="text-white">Welcome to Plate-to-Place Tricycle Tracking Management</h6>
            <h1 class="display-1 fw-bold text-white">Track Vehicle Information</h1>
            <a href="#" class="btn btn-brand">Take an Action</a>
            <a href="#" class="btn btn-secondary">Get Started</a>
        </div>
        </div>
      </div>
    </div>
    </div>

    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>


<!--About Section-->

<div class="Heading" id="aboutus">
<h1>About Us</h1>
<p>Brangay 409 Zone 42 4th District of Sampaloc Manila</p>
</div>
<div class="abt-container">
<section class="about">
  <div class="about-images">
<img src="Images/abt.gif">
  </div>
<div class="about-content">
  <h2>Plate-to-Place Tricycle Tracking Management in Brangay 409 Sampaloc Manila</h2>
<p>Barangay 409 is a barangay in the city of Manila, under the administrative district 
  of Sampaloc. Its population as determined by the 2020 Census was 1,921. This represented 
  0.10% of the total population of Manila.The Plate-to-place tricycle tracking management systems 
  offer comprehensive solutions for monitoring and optimizing tricycle transportation operations in Barangay. 
  409 These advanced systems are designed to enhance the efficiency and safety of tricycle services </p>
  <a href="https://www.philatlas.com/luzon/ncr/manila/barangay-409.html" target="_blank" class="read-more">Read More</a>
</div>
</section>
</div>





<div class="container-fluid" id="Services">
  <h1 class="text-center mt-5 text-underline">System Service Offers</h1>
  <div class="row mb-5">
      <div class="col-12 col-sm-6 col-md-3 m-auto">
          <!-- card starts here -->
          <div class="card shadow">
              <img src="images/s1.svg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3 class="text-center">News/Events</h3>
                  <hr class="mx-auto w-75">
                  <p>
                    Tricycle tracking management systems are evolving to offer more comprehensive services By integrating real-time
                     news updates and local event notifications within their platforms.
              </div>
          </div>
          <!-- card ends here -->
      </div>
      <!-- col ends here -->
      <div class="col-12 col-sm-6 col-md-3 m-auto">
          <!-- card starts here -->
          <div class="card shadow">
              <img src="images/s2.svg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3 class="text-center">Access Data</h3>
                  <hr class="mx-auto w-75">
                  <p></p>
                      Plate-to-Place Barangay Tricycle Tracking management Offers services that can access the Vihecle Information
                    of Driver by the Authorize personel for Possible Complain
                  </p>
              </div>
          </div>
          <!-- card ends here -->
      </div>
      <!-- col ends here -->
      <div class="col-12 col-sm-6 col-md-3 m-auto">
          <!-- card starts here -->
          <div class="card shadow">
              <img src="images/s3.svg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3 class="text-center">File Complaint</h3>
                  <hr class="mx-auto w-75">
                  <p>
                    This systems have expanded their capabilities to include a "File a Report for Inconvenience" 
                    allowing commuters to report any inconvenience encountered during their tricycle rides. 
                  </p>
              </div>
          </div>
          <!-- card ends here -->
      </div>
      <!-- col ends here -->
      <div class="col-12 col-sm-6 col-md-3 m-auto">
          <!-- card starts here -->
          <div class="card shadow">
              <img src="images/s4.svg" alt="" class="card-img-top">
              <div class="card-body">
                  <h3 class="text-center">Tracking System</h3>
                  <hr class="mx-auto w-75">
                  <p>
                      Plate-to-Place systems have significantly improved their offerings by providing 
                      comprehensive tracking management services to help Passenger to report any Inconvenience Services.
                  </p>
              </div>
          </div>
          <!-- card ends here -->
      </div>
      <!-- col ends here -->
  </div>
</div>

<!--Accordion part-->


<section class="section p-7" id="FAQ">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="Images/FAQ.svg" class="img-fluid mb-5">
        
        </div>
         <div class="col-md-6">
         <h2 class="mt-7 text-center" id="FAQ"> Frequently Asked Questions</h2>
         <div class="accordion accordion-flush p-3" id="accordionFlushExample">
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
          <div class="accordion-item shadow">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFifth" aria-expanded="false" aria-controls="flush-collapseFifth">
                Can I report any issues or concerns related to tricycle services through the Tricycle Tracking Management System?
              </button>
            </h2>
            <div id="flush-collapseFifth" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">Yes, the system allows residents to lodge complaints or report any issues through the designated platform, ensuring prompt resolution of problems and effective communication between the community and the barangay authorities.</div>
            </div>
          </div>
          <div class="accordion-item shadow">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                How does the Tricycle Tracking Management System contribute to the overall development of Barangay 409?
              </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">The system contributes to the modernization of transportation services, enhances the overall image of the barangay, and fosters a safer and more efficient environment for both residents and visitors, thus facilitating the growth and development of the community.</div>
            </div>
          </div>
      

        </div>
         </div>
    </div>
  </div>
</section>




<!--contact-->
  
<section id="Contact">
  <div class="contact-container bg-white custom-shadow mt-n6">
    <div class="form-container">
      <h3>Message Us</h3>
      <form action="" class="contact-form ">
      <input type="text" placeholder="Your Name" required>
      <input type="email" name="" id="" placeholder="Enter Your Email..." required>
      <textarea name="" id="" cols="30" rows="10" placeholder="Write Message Here"></textarea>
      <input type="submit" value="Send" class="send-button" id="btn-colorwhite">
      </form>
    </div>
<!-- maps-->
<div class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3860.9497197988367!2d120.99470875990235!3d14.601940135825647!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9fb6c83552d%3A0x54ad786f735dc69e!2sBrgy.%20409%2C%20Sampaloc%2C%20Manila%2C%201008%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1698386693082!5m2!1sen!2sph" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>



  </div>
</section>

<!--footer section-->
<footer>
  <div class="footer-container">
      <div class="footer-row">
            <div class="col" id="company">
              <a class="logo text-white"  href="#">BRGY-409 CITY OF MANILA</a>
                <p id="fotlog">
                  Barangay 409 is situated at approximately 14.6020, 120.9972, in the island of Luzon. 
               
                </p>
                <div class="social">
                  <a href="https://www.facebook.com/Barangay409" target="_blank"><i class="fab fa-facebook"></i></a>
                  <a href="https://www.instagram.com/explore/locations/406245693534408/barangay-409-manila-city/"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.youtube.com/@JoshuaSariego" target="_blank"><i class="fab fa-youtube"></i></a>
                 
                </div>
            </div>


            <div class="col" id="services">
               <h3>Services</h3>
               <div class="links">
                  <a href="#">Tracking Management</a>
                  <a href="#">Report Driver Violation</a>
                  <a href="#">Improved Safety</a>
                  <a href="#">News/Events</a>
               </div>
            </div>

            <div class="col" id="useful-links">
               <h3>Links</h3>
               <div class="links">
                  <a href="#carouselExampleDark">Home</a>
                  <a href="#aboutus">About</a>
                  <a href="#Services">Services</a>
                  <a href="#Contact">Contact</a>
               </div>
            </div>

            <div class="col" id="contact">
                <h3>Contact</h3>
                <div class="contact-details">
                   <i class="fa fa-location"></i>
                   <p>Brangay 409 Sampaloc Manila, 4th District,Zone 42</p>
                </div>
                <div class="contact-details">
                   <i class="fa fa-phone"></i>
                   <p>+1-8755856858</p>
                </div>
            </div>
      </div>
</div>
<div class="footer-bottom">
  <p>&copy; 2023 Brgy-409 City of Manila. All Rights Reserved.</p>
</div>
</footer>

    <script src="js/bootstrap.bundle.js"></script>
    <script src="script.js"></script>






</body>
</html>