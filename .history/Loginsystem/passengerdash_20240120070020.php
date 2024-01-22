<?php
require_once('Config.php');

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brangay 409 Zone 42 4th District of Sampaloc Manila</title>
  <link rel="shortcut icon" type="x-icon" href="../images/webicon.png">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="admin.css">
       
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.min.css">
 <!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10">

<!-- Your other HTML code -->

<!-- SweetAlert JS -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

 



</head>

<body>
    
<!-- Dashboard -->
<div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <!-- Vertical Navbar -->
    <nav class="navbar show navbar-vertical h-lg-screen navbar-expand-lg px-0 py-3 navbar-light bg-white border-bottom border-bottom-lg-0 border-end-lg" id="navbarVertical">
        <div class="container-fluid">
            <!-- Toggler -->
            <button class="navbar-toggler ms-n2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarCollapse" aria-controls="sidebarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Brand -->
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="../Home.php">
                <h3 class="text"><img src="../images/webicon.png" width="40"><span class="text-info"></span>BRGY-409</h3> 
            </a>
            <!-- User menu (mobile) -->
           
            <!-- Collapse -->



            <div class="collapse navbar-collapse" id="sidebarCollapse">
                <!-- Navigation -->
                <ul class="navbar-nav">
                <li class="nav-item">
            <a class="nav-link" href="#" onclick="showAdmin()">
                <i class="bi bi-house"></i> Dashboard
            </a>
        </li>
        
        <li class="nav-item">
    <a class="nav-link" href="#" onclick="showDriver()">
        <i class="fas fa-chart-line"></i> Drivers Rating Scale
    </a>
</li>


                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showCalculator()">
                            <i class="bi bi-cash-coin"></i> Fare Calculator
                        </a>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showWastemanagement()">
                            <i class="bi bi-recycle"></i> Waste Management
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showFileComplaint()">
                            <i class="bi bi-flag"></i> File Complaint
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showmanageComplaint()" >
                        <i class="bi bi-pin-map"></i> Manage Complaint
                        </a>
                    </li>



                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="bi bi-briefcase"></i> Lost&Found
                        
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" onclick="showlostitem()">Lost Items</a></li>
                            <li><a class="dropdown-item" href="#"onclick="showfounditem()">Found Items</a></li>
                          
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="DisplayNews()" id="navbar" role="button"  aria-expanded="false">
                            <i class="bi bi-file-text"></i> VIEW NEWS/EVENTS
                        
                        </a>
                        
                    </li>

                </ul>
                <!-- Divider -->
                <hr class="navbar-divider my-5 opacity-20">
             
                <!-- Push content down -->
                <div class="mt-auto"></div>
                <!-- User (md) -->
                <ul class="navbar-nav">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>



        </div>
    </nav>
    <!-- Main content -->
    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
        <!-- Header -->
        <header class="bg-surface-primary border-bottom pt-6 py-4">
            <div class="container-fluid">
                <div class="mb-npx">
                    <div class="row align-items-center">
                        <div class="col-sm-6 col-12 mb-4 mb-sm-0">
                            <!-- Title -->
                            <h1 class="h2 mb-0 ls-tight" id="title">
                            Plate-to-Place Tricycle Tracking Management Web-Application</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end" id="SIdebarBTN">
                            <div class="mx-n1">
                                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-toggle="modal" data-target="#edit">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                                </a>
                                <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1" data-toggle="modal" data-target="#create">
                                    <span class=" pe-2">
                                        <i class="bi bi-plus"></i>
                                    </span>
                                    <span>Create</span>
                                </a>
                               
                            </div>
                        </div>
                    </div>
                    <!-- Nav -->
                   
                </div>
            </div>
        </header>
        <!-- Main -->
        <main class="py-6 bg-surface-secondary">
            <div class="container-fluid">





                <!-- data sheets ------------------------------------------------------------------------------------------------------------------------------------------------>
                <div class="row g-6 mb-6">


                <div class="col-xl-3 col-sm-6 col-12">
    <div class="card shadow border-0">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Drivers</span>
                    
                    <?php
                    // Your database connection information
                  

                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Query to get the count of rows in the admintbl table
                    $sql = "SELECT COUNT(*) AS total FROM driverstbl";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Fetch the result
                        $row = $result->fetch_assoc();
                        $totalCount = $row["total"];

                        // Display the count in the specified HTML element
                        echo '<span class="h3 font-bold mb-0">' . $totalCount . '</span>';
                    } else {
                        echo "Error retrieving data from the database.";
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
                    
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-primary text-white text-lg">
                        <i class="bi bi-car-front"></i>
                    </div>
                </div>
            </div>
            <div class="mt-2 mb-0 text-sm">
                <span class="badge badge-pill bg-soft-success text-success me-2">
                    <i class="bi bi-arrow-up me-1"></i>100%
                </span>
                <span class="text-nowrap text-xs text-muted">Since last month</span>
            </div>
        </div>
    </div>
</div>




                    <div class="col-xl-3 col-sm-6 col-12">
    <div class="card shadow border-0">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Passengers</span>
                    
                    <?php
                    // Your database connection information
                   
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Query to get the count of rows in the admintbl table
                    $sql = "SELECT COUNT(*) AS total FROM passengertbl";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Fetch the result
                        $row = $result->fetch_assoc();
                        $totalCount = $row["total"];

                        // Display the count in the specified HTML element
                        echo '<span class="h3 font-bold mb-0">' . $totalCount . '</span>';
                    } else {
                        echo "Error retrieving data from the database.";
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
                    
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-primary text-white text-lg ">
                        <i class="bi bi-people"></i>
                    </div>
                </div>
            </div>
            <div class="mt-2 mb-0 text-sm">
                <span class="badge badge-pill bg-soft-success text-success me-2">
                    <i class="bi bi-arrow-up me-1"></i>100%
                </span>
                <span class="text-nowrap text-xs text-muted">Since last month</span>
            </div>
        </div>
    </div>
</div>




                    <div class="col-xl-3 col-sm-6 col-12">
    <div class="card shadow border-0">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Admins</span>
                    
                    <?php
                    // Your database connection information
                   
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Query to get the count of rows in the admintbl table
                    $sql = "SELECT COUNT(*) AS total FROM admintbl";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Fetch the result
                        $row = $result->fetch_assoc();
                        $totalCount = $row["total"];

                        // Display the count in the specified HTML element
                        echo '<span class="h3 font-bold mb-0">' . $totalCount . '</span>';
                    } else {
                        echo "Error retrieving data from the database.";
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
                    
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-primary text-white text-lg">
                        <i class="bi bi-person-fill"></i>
                    </div>
                </div>
            </div>
            <div class="mt-2 mb-0 text-sm">
                <span class="badge badge-pill bg-soft-success text-success me-2">
                    <i class="bi bi-arrow-up me-1"></i>100%
                </span>
                <span class="text-nowrap text-xs text-muted">Since last month</span>
            </div>
        </div>
    </div>
</div>




<div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Complaint</span>
                                        
                                        <?php
                    // Your database connection information
                   
                    // Create connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Check connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Query to get the count of rows in the admintbl table
                    $sql = "SELECT COUNT(*) AS total FROM complainttbl";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Fetch the result
                        $row = $result->fetch_assoc();
                        $totalCount = $row["total"];

                        // Display the count in the specified HTML element
                        echo '<span class="h3 font-bold mb-0">' . $totalCount . '</span>';
                    } else {
                        echo "Error retrieving data from the database.";
                    }

                    // Close the database connection
                    $conn->close();
                    ?>
                    

                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape  bg-primary text-white text-lg ">
                                            <i class="bi bi-flag-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>100%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
     <!-- data sheets ------------------------------------------------------------------------------------------------------------------------------------------------>



     <div  id="waste-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Waste Management for Barangay-409</h5>
 </div>
<div class="table-responsive">

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="../Images/waste.svg" class="img-fluid mb-5">
        
        </div>
         <div class="col-md-6">
         <h2 class="mt-7 text-center" id="FAQ"> Frequently Asked Questions</h2>
         <div class="accordion accordion-flush p-3" id="accordionFlushExample">
         <div class="accordion-item shadow">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              What is a waste management system?
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body"> A waste management system is a streamlined process that organizations use to dispose of, reduce, reuse, and prevent waste.</div>
            </div>
          </div>
          <div class="accordion-item bg-white shadow">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              How do you initiate to Start a Brgy-409 Waste Management System?
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">To begin the the Brgy-409 Waste MAnagement System you need to Visit our side and Create you perosnal Account</div>
            </div>
          </div>
          <div class="accordion-item shadow">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              How can users Navigate the System interms of System Instructions?
              </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">The System Provides a Detailed Description on how to begin and manage waste Collection Strategie</div>
            </div>
          </div>
          
        </div>
         </div>
    </div>
  </div>
                    </div>
                    <div class="card-footer border-0 py-3 d-flex justify-content-center flex-wrap">
                    <button id="btnhover" style="border-color: #603ce6; "  type="button" class="btn  btn-sm m-1">
                   Gets Started <i class="bi bi-box-arrow-in-up-right"></i></i></button>
</div>
</div>
    




     <!-- calculator sheets ------------------------------------------------------------------------------------------------------------------------------------------------>

    

     <div class="calculator-table card shadow border-0 mb-7" style="display:none;" id="calculator-table">
    <div class="card-header thead-light text-center">
        <h5 class="mb-0" id="calculator">Going Somewhere? Check your Fare</h5>
    </div>

    <div class="flex-container">
        <div class="table-responsive">
            <div class="calculator" style="flex: 1; padding-right: 20px;">
                <h2>Tricycle Fare Calculator</h2>

                <label for="location">Select Location:</label>
                <select id="location">
                    <option value="within">Within Barangay 409</option>
                    <option value="outside">Outside Barangay 409</option>
                </select>

                <label>Distance:</label>
                <input class="Inputcalculator" type="number" id="distance" placeholder="Enter distance" step="0.1">

                <select class="Inputcalculator" id="distanceUnit">
                    <option value="km">Kilometers (km)</option>
                    <option value="m">Meters (m)</option>
                </select>

                <label class="Labelcalculator" for="fareRate">Fare Rate (per kilometer)/(per meter)</label>
                <input class="Inputcalculator" type="number" id="fareRate" placeholder="Enter fare rate">

                <!-- Checkboxes for discounts -->
                <div style="justify-content: center;"  class="discounts">
                <input type="checkbox" id="isPWD">
                <label for="isPWD">PWD</label>

                <input type="checkbox" id="isStudent">
                <label for="isStudent">Student</label>

                <input type="checkbox" id="isSeniorCitizen">
                <label for="isSeniorCitizen">Senior Citizen</label>
                </div>
                
                <div style="text-align: center; margin-top: 30px;">
                    <button class="btn btn-primary" id="Buttoncalculator" onclick="calculateFare()">
                        <i class="fas fa-calculator"></i> Calculate Fare
                    </button>

                    <button id="calculatorbutton" class="btn btn-danger" onclick="resetInputs()">
                        <i class="fas fa-undo"></i> Reset Inputs
                    </button>
                </div>

                <script>
                    function resetInputs() {
                        document.getElementById("location").selectedIndex = 0;
                        document.getElementById("distance").value = "";
                        document.getElementById("fareRate").value = "";
                        document.getElementById("isPWD").checked = false;
                        document.getElementById("isStudent").checked = false;
                        document.getElementById("isSeniorCitizen").checked = false;
                        document.getElementById("result").innerHTML = "";
                    }
                </script>

                <div id="result"></div>
            </div>
        </div>

        <div class="map-container">
            <iframe frameborder="0" style="border:0;"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2295.7344092326657!2d120.99598241619746!3d14.601942961311995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9fb6c83552d%3A0x54ad786f735dc69e!2sBrgy.%20409%2C%20Sampaloc%2C%20Manila%2C%201008%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1699840691454!5m2!1sen!2sph"
                style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen></iframe>
        </div>
    </div>
</div>



     <!-- calculator sheets end ------------------------------------------------------------------------------------------------------------------------------------------------>

     <div class="modal fade" id="create">
        <div class="modal-dialog" id="createshortcut">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                
                <!-- Modal Body -->
                <div class="modal-body">
                <div class="container mt-4">
  <div class="row d-flex justify-content-center align-items-center">
    
    <div class="col-md-3">
      <div id="shorcard" class="card shadow">
        <img src="../Images/lostandfound.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Lost&Found</h5>
          <p class="card-text">Manage Lost&Found</p>
          <div class="shortcutbtn mt-1 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal" onclick="showlostitem()">
        <span class="pe-2">
        <i class="bi bi-briefcase"></i>
     </span>
    <span>Post Item</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
    <div id="shorcard" class="card shadow">
        <img src="../Images/complain.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">File Complain</h5>
          <p class="card-text">View Report</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal" onclick="showFileComplaint()">
        <span class="pe-2">
        <i class="bi bi-flag"></i>
     </span>
    <span>File Report</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
    <div id="shorcard" class="card shadow">
        <img src="../Images/rate.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Rate Drivers</h5>
          <p class="card-text">Send feedback</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal" onclick="showDriver()">
        <span class="pe-2">
        <i class="bi bi-star"></i>
     </span>
    <span>Submit Rate</span>
    </a>
    </div>
        </div>
      </div>
    </div>


  </div>
</div>
</div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="edit">
        <div class="modal-dialog" id="createshortcut">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Edit</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                
                <!-- Modal Body -->
                <div class="modal-body">
                <div class="container mt-4">
                <div class="row d-flex justify-content-center align-items-center">
    <div class="col-md-3">
    <div id="shorcard" class="card shadow">
        <img src="../Images/Personal.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Personal Information</h5>
          <p class="card-text">Edit Your Details</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal"  onclick="showAdmin()">
        <span class="pe-2">
        <i class="bi bi-person"></i>
     </span>
    <span>Edit</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
    <div id="shorcard" class="card shadow">
        <img src="../Images/lostandfound.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Lost&Found</h5>
          <p class="card-text">Edit Lost&Found</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal" onclick="showlostitem()">
        <span class="pe-2">
        <i class="bi bi-briefcase"></i>
     </span>
    <span>Edit Item</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    

  

  </div>
</div>
</div>
            </div>
        </div>
    </div>


     <!-- FileComplaint sheets end ------------------------------------------------------------------------------------------------------------------------------------------------>



     <div class="calculator-table card shadow border-0 mb-7" style="display:none;" id="File-table">
    <div class="card-header thead-light text-center">
        <h5 class="mb-0" id="calculator" >File Complain for Unprofessional Public Service</h5>
    </div>

    <div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-4 mb-4">
            <div id="cards" class="card">
                <img src="../Images/file3.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Poor Customer Service</h5>
                    <p class="card-text">Unprofessionalism can manifest through poor customer service, such as rude or disrespectful behavior from transport staff and Toda Drivers</p>
                    <div class="text-center">
    <a href="#" class="btn btn-primary btn-sm mt-2" data-toggle="modal" data-target="#FileReport">
        File Complaint
        <i class="fas fa-exclamation-triangle ml-2"></i>
    </a>
</div>


                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div id="cards" class="card">
                <img src="../Images/file1.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Overcharging Passengers</h5>
                    <p class="card-text">Some tricycle drivers may engage in overcharging passengers, especially if they perceive them to be tourists or unfamiliar with local fare rates. </p>
                    <div class="text-center">
    <a href="#" class="btn btn-primary btn-sm mt-2" data-toggle="modal" data-target="#FileReport">
        File Complaint
        <i class="fas fa-exclamation-triangle ml-2"></i>
    </a>
</div>

                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div id="cards" class="card">
                <img src="../Images/file2.jpg" class="card-img-top img-fluid" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Unsafe Driving Practices</h5>
                    <p class="card-text">Unprofessional behavior can also manifest in unsafe driving practices, such as speeding, reckless driving, or failure to adhere to traffic rules.</p>
                    <div class="text-center">
    <a href="#"  class="btn btn-primary btn-sm mt-2" data-toggle="modal" data-target="#FileReport">
        File Complaint
        <i class="fas fa-exclamation-triangle ml-2"></i>
    </a>
</div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>




<div class="modal" id="FileReport">
        <div id="wider-modal-dialog" class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">File Report for Unprofessional Public Service</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                
                <!-- Modal Body -->
    <div class="modal-body">
    <form  id="clear" action="passengerdash.php"  autocomplete="off"  enctype="multipart/form-data" method="post">
    <div class="form-group g-col-6 g-col-md-4 ">
    <label  for="Fileinput1">Type of Complaint</label>
    <select name="Fileinput1" id="Fileinput1" class="form-control" required>
        <option value="" selected disabled>Select a complaint type</option>
        <option value="overcharging">Overcharging</option>
        <option value="refusal_service">Refusal to Provide Service</option>
        <option value="reckless_driving">Reckless Driving</option>
        <option value="vehicle_condition">Vehicle Condition</option>
        <option value="unprofessional_behavior">Unprofessional Behavior</option>
        <option value="overloading">Overloading</option>
        <option value="route_deviation">Route Deviation</option>
        <option value="lack_of_safety_measures">Lack of Safety Measures</option>
        <option value="noise_and_air_pollution">Noise and Air Pollution</option>
        <option value="unsanitary_conditions">Unsanitary Condition</option>
        <option value="inadequate_lighting">Inadequate Lighting</option>
        <option value="inefficient_service">Inefficient Service</option>
        <!-- Add more options as needed -->
    </select>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="form-group g-col-6">
            <label for="datefilereport">Select Date</label>
            <input id="datefilereport" name="datefilereport" type="date" class="form-control" required>
        </div>

        
        <label for="Fileinput3">Name of Complainant</label>
<?php
if (isset($_GET['Username'])) {
    $requestedUsername = $_GET['Username'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Name FROM passengertbl WHERE Username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $requestedUsername);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Display the first fetched name in the input field
            $row = $result->fetch_assoc();
            echo '<input type="text" id="Fileinput3" name="Fileinput3" class="form-control" value="'.$row["Name"].'" readonly>';
        } else {
            echo "0 results";
        }

        $stmt->close();
    } else {
        echo "Error in statement preparation: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Username not provided in the URL.";
}
?>





        <div class="form-group g-col-6">
            <label for="Fileinput4">Contact Number</label>
            <input id="Fileinput4" name="Fileinput4" type="text" class="form-control" required>
        </div>
    </div>
    
    <div class="col-md-6">
        <div class="form-group g-col-6">
            <label for="Fileinput5">Home Address</label>
            <input id="Fileinput5" name="Fileinput5" type="text" class="form-control" required>
        </div>
        <div class="form-group g-col-6">
            <label for="Incident-Description">Incident Description</label>
            <input id="Incident-Description" name="Incident-Description" type="text" class="form-control" required>
        </div>
        <div class="form-group g-col-6">
            <label for="Fileinput6">Submit Any Proof To Identify Driver</label>
            <input name="Fileinput6" id="Fileinput6" type="file" class="form-control" accept=".jpg, .png .jpeg .pdf, .doc, .docx" required>
        </div>
    </div>

    
</div>



<div class="input-group mb-3 mt-5" style="border: 1px solid #ccc;">
<input type="text" name="PassSearchDriver" id="PassSearchDriver" class="form-control" placeholder="Search Name of Complainee" required>
 <button class="btn btn-outline-secondary" type="button" id="button-addon2">Paste</button>
</div>




    <div id="PasssearchResults"></div>  

    <div class="modal-footer justify-content-center" style="margin-top: 1rem;">
    <button id="filereportRegister" type="submit" value="Submit" class="btn btn-danger">
        <i class="fas fa-exclamation-triangle"></i> File Complaint
    </button>

    <!-- Add the new button -->
    <button id="copyComplaineeName" type="button" onclick="pasteFromClipboard()" class="btn btn-primary">
        <i class="fas fa-copy"></i> Copy Name
    </button>
</div>

</form>
</div>


<script> 
function pasteFromClipboard() {
        // Read text from the clipboard
        navigator.clipboard.readText()
            .then(text => {
                // Set the value of the input field with id "address" to the text from the clipboard
                document.getElementById('PassSearchDriver').value = text;
            })
            .catch(err => {
                console.error('Failed to read text from clipboard', err);
            });
    }
    </script>







<script>
document.getElementById('copyComplaineeName').addEventListener('click', function() {
    // Get the input element
    var homeAddressInput = document.getElementById('Username');

    // Get the value of the input, excluding the "Home Address: " prefix
    var actualAddress = homeAddressInput.value.replace('Driver Name: ', '');

    // Create a temporary textarea element to copy the text without the prefix
    var tempTextArea = document.createElement('textarea');
    tempTextArea.value = actualAddress;

    // Append the textarea to the document
    document.body.appendChild(tempTextArea);

    // Select the text inside the textarea
    tempTextArea.select();
    tempTextArea.setSelectionRange(0, 99999); // For mobile devices

    // Copy the selected text to the clipboard
    document.execCommand('copy');

    // Remove the temporary textarea
    document.body.removeChild(tempTextArea);

    // Show Sweet Alert
    Swal.fire({
        icon: 'success',
        title: 'Copied!',
        text: 'The address has been copied to the clipboard.',
        showConfirmButton: false,
        timer: 1500 // Adjust the timer as needed
    });
});
</script>



    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("PassSearchDriver");
        const searchResults = document.getElementById("PasssearchResults");

        searchInput.addEventListener("input", function() {
            const searchText = searchInput.value.toLowerCase();
            if (searchText.length > 0) {
                fetch(`passengerDriverDetails.php?search=${searchText}`)
                    .then(response => response.text())
                    .then(data => {
                        searchResults.innerHTML = data;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            } else {
                searchResults.innerHTML = "";
            }
        });
    });
</script>
  
</div>
        </div>
    </div>






    <div  id="Complein-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Manage your Complain</h5>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                    <?php
// Replace with your actual database credentials

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the passenger's username from the first code
if (isset($_GET['Username'])) {
    $usernameParam = $_GET['Username'];

    // Fetch data from the admin table for the specific complainee
    $sql = "SELECT * FROM complainttbl WHERE Name = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error in statement preparation: " . $conn->error);
    }

    $stmt->bind_param("s", $usernameParam);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo '<table class="table table-hover table-nowrap">
                <tr>
                    <thead class="thead-light">
                        <th>Complain-ID</th>
                        <th>Type of Complain</th>
                        <th>Date of Report</th>
                        <th>Complainant Name</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>Prof of Identity</th>
                        <th>Incident Description</th>
                        <th>Name of Complainee</th>
                    </thead>
                </tr>';

        // Output data of each row
        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                    <td>' . $row["ComplaintID"] . '</td>
                    <td>' . $row["TypeofComplaint"] . '</td>
                    <td>' . $row["DateofReport"] . '</td>
                    <td>' . $row["ComplainantName"] . '</td>
                    <td>' . $row["ContactNumber"] . '</td>
                    <td>' . $row["Address"] . '</td>
                    <td>' . $row["ProfofIdentity"] . '</td>
                    <td>' . $row["IncidentDescription"] . '</td>
                    <td>' . $row["NameofComplainee"] . '</td>
                </tr>';
        }
        echo '</table>';
    } else {
        echo "0 results";
    }

    $stmt->close();
} else {
    echo "Username not provided in the URL.";
}

$conn->close();
?>
          


                    </table>
                    </div>
                    <div class="card-footer border-0 py-3 d-flex justify-content-center flex-wrap">
                    <button type="button" class="btn btn-primary btn-sm m-1" data-toggle="modal" data-target="#ComplainUpdate">
    <i class="bi bi-pencil"></i> Modify
</button>

<button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal"  data-target="#Complaindelete">
    <i class="bi bi-trash"></i> Remove
</button>

<button type="button" class="btn btn-secondary btn-sm m-1" data-toggle="modal" data-target="#ComplaintView">
    <i class="bi bi-file-text"></i> View Report
</button>


<button type="button" class="btn btn-info btn-sm m-1" id="refreshButton4">
    <i class="bi bi-arrow-clockwise"></i> Refresh
</button>

<script>
        document.getElementById("refreshButton4").addEventListener("click", function() {
            // Add your refresh functionality here
            // For example, you can reload the current page with the following line
            location.reload();
        });
    </script>
                    </div>
                </div>














     <!-- FileComplaint sheets end ------------------------------------------------------------------------------------------------------------------------------------------------>



     <div   id="Lostitem" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Lost Item</h5>
                    </div>
                    <div class="table-responsive">


                        <table class="table table-hover table-nowrap" >
                        <?php
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the admin table
$sql = "SELECT * FROM  lostitems";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-hover table-nowrap">
            <tr>
            <thead class="thead-light">
                <th>Item Image</th>
                <th>Lost Items ID</th>
                <th>Item Name</th>
                <th>Description</th>
                <th>Lost Location</th>
                <th>Lost Date</th>
                <th>Contact Person</th>
                <th>Contact Phone</th>
                <th>Contact Email</th>
                <!-- Add more table headers as needed for your specific data -->
                </thead>
                </tr>';
              
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
               
        <td><img src="uploads/' . $row["itemimage"] . '" alt="Item Image" width="100"></td>
                <td>' . $row["LostItemsID"] . '</td>
                <td>' . $row["ItemName"] . '</td>
                <td>' . $row["Description"] . '</td>
                <td>' . $row["LostLocation"] . '</td>
                <td>' . $row["LostDate"] . '</td>
                <td>' . $row["ContactPerson"] . '</td>
                <td>' . $row["ContactPhone"] . '</td>
                <td>' . $row["ContactEmail"] . '</td>

            </tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
                        </table>
                    </div>


                 <div class="card-footer border-0 py-3 d-flex justify-content-center flex-wrap">

                  
                 <button type="button" class="btn btn-success btn-sm m-1" data-toggle="modal" data-target="#postitemmodal" >
    <i class="bi bi-plus-circle"></i> Post Item
</button>


<button type="button" class="btn btn-warning btn-sm m-1" data-toggle="modal" data-target="#edititem">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal"  data-target="#deletlostitem">
    <i class="bi bi-trash"></i> Delete
</button>   

<button type="button" class="btn btn-info btn-sm m-1" id="refreshButton13">
<i class="bi bi-file-text"></i>  Refresh
</button>

<script>
        document.getElementById("refreshButton13").addEventListener("click", function() {
            // Add your refresh functionality here
            // For example, you can reload the current page with the following line
            location.reload();
        });
    </script>
                    </div>
                </div>


                <div class="modal fade" id="postitemmodal">
        <div class="modal-dialog" id="lostandfound"  >
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Post Items for Lost&Found</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="lostitem" action="passengerdash.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

               
       <div class="form-group">
  <label id="itemimage" for="itemimage">Item Image</label>
  <input  class="form-control" type="file"  name="itemimage" accept=".jpg, .png, .jpeg, .pdf, .doc, .docx">
</div>

                
                <div class="form-group">
                    <label id="ItemName" for="ItemName">Item Name</label>
                    <input type="text" name="ItemName" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label id="ContactPhone" for="ContactPhone">Contact Phone</label>
                    <input name="ContactPhone" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label id="Description" for="Description">Description</label>
                    <input name="Description" type="text" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
               
                <div class="form-group">
                    <label id="LostLocation" for="LostLocation">Lost Location</label>
                    <input name="LostLocation" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="LostDate" for="LostDate">Lost Date</label>
                    <input name="LostDate" type="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="ContactPerson" for="ContactPerson">Contact Person</label>
                    <input name="ContactPerson" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="ContactEmail" for="ContactEmail">Contact Email</label>
                    <input name="ContactEmail" type="text" class="form-control" required>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer mt-3 d-flex justify-content-center">
    <button id="SaveItem" type="submit" class="btn btn-success"><i class="fas fa-save"></i> Save</button>
</div>

</form>
</div>
            </div>
        </div>
    </div>
 
 
<script type="text/javascript">
$(function() {
    $('#SaveItem').click(function(e) {
        e.preventDefault();

        var valid = $('#lostitem')[0].checkValidity();

        if (valid) {
            var formData = new FormData($('#lostitem')[0]);

            $.ajax({
                type: 'POST',
                url: 'sample.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: data,
                    }).then(function() {
                        // Optionally, you can perform additional actions after the success message
                        window.location.reload(); // Reload the page to reflect changes
                    });
                },
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'There were errors while saving the data.',
                    });
                },
            });
        } else {
            // Handle invalid form data here
        }
    });
});


</script>




    <div class="modal fade" id="edititem">
        <div  id="editlostitem" class="modal-dialog">
            <div  class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Item Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="updateForm" action="admin.php"  method="post">
              
            
                        <div class="container">
        <div class="row">
            <div class="col-md-6">
            <label for="LostItemsID">Search Item-ID</label>
                        <select name="LostItemsID" id="LostItemsID" class="form-control" required>
                            <option value="" disabled selected>Select Item ID</option>
                            <?php
                      

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT LostItemsID FROM lostitems";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["LostItemsID"].'">'.$row["LostItemsID"].'</option>';
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </select>
                
                <div class="form-group">
                    <label id="updateItemName" for="updateItemName">Update Item Name</label>
                    <input type="text" name="updateItemName" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label id="updateContactPhone" for="updateContactPhone">Update Contact Phone</label>
                    <input name="updateContactPhone" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label id="updateDescription" for="updateDescription">Update Description</label>
                    <input name="updateDescription" type="text" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
               
                <div class="form-group">
                    <label id="updateLostLocation" for="updateLostLocation"> Update Lost Location</label>
                    <input name="updateLostLocation" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="updateLostDate" for="updateLostDate">Update Lost Date</label>
                    <input name="updateLostDate" type="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="updateContactPerson" for="updateContactPerson">Update Contact Person</label>
                    <input name="updateContactPerson" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="updateContactEmail" for="updateContactEmail">Update Contact Email</label>
                    <input name="updateContactEmail" type="text" class="form-control" required>
                </div>
            </div>
        </div>
    </div>
 
    
</form>
</div>
<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="lostitemUpdate" type="button" class="btn btn-primary">Save Item</button>
                </div>

            </div>
        </div>
    </div>

    <script>
  $(document).ready(function() {
    $("#lostitemUpdate").click(function() {
      var LostItemsID= $("#LostItemsID").val();
      var updateItemName = $("input[name='updateItemName']").val();
      var updateContactPhone = $("input[name='updateContactPhone']").val();
      var updateDescription = $("input[name='updateDescription']").val();
      var updateLostLocation = $("input[name='updateLostLocation']").val();
      var updateLostDate = $("input[name='updateLostDate']").val();
      var updateContactPerson = $("input[name='updateContactPerson']").val();
      var updateContactEmail = $("input[name='updateContactEmail']").val();



      $.post(
        "passengerupdate.php", // Replace with the actual file name for update
        {
            LostItemsID: LostItemsID,
            updateItemName:updateItemName,
            updateDescription:updateDescription,
            updateLostLocation:updateLostLocation,
            updateLostDate:updateLostDate,
            updateContactPerson:updateContactPerson,
            updateContactPhone:updateContactPhone,
            updateContactEmail:updateContactEmail
        },
        function(data, status) {
          if (status === 'success') {
            Swal.fire({
              title: 'Items Updated Successfully!',
              icon: 'success',
              confirmButtonText: 'Okay'
            }).then((result) => {
              if (result.isConfirmed) {
                $(".swal2-popup").addClass('light-theme');
              }
            });
          } else {
            // Handle error here
            Swal.fire({
              title: 'Error!',
              text: 'There was an error while updating the record.',
              icon: 'error',
              confirmButtonText: 'Okay'
            }).then((result) => {
              if (result.isConfirmed) {
                $(".swal2-popup").addClass('light-theme');
              }
            });
          }
        }
      );
    });
  });
</script>

<div class="modal fade" id="deletlostitem">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Lost Item Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="lostitemdelete" action="delete.php" method="post">
                    <div class="form-group">
                        <label for="itemsID">Delete Selected Item</label>
                        <select name="itemsID" id="itemsID" class="form-control" required>
                            <option value="" disabled selected>Select an Items ID</option>
                            <?php
                            // Your PHP code for populating the select options
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT LostItemsID FROM lostitems";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["LostItemsID"].'">'.$row["LostItemsID"].'</option>';
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="itemDelete" type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
        $(document).ready(function() {
            $('#lostitemdelete').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'delete.php', // Make sure this is the correct path to your delete.php file
                    data: formData,
                    dataType: 'json', // Set the dataType to 'json' to parse the JSON response
                    success: function(response) {
                        showAlert(response.type, response.message);
                    },
                    error: function() {
                        showAlert('error', 'Something went wrong. Please try again.');
                    }
                });
            });

            function showAlert(type, message) {
                Swal.fire({
                    title: type.charAt(0).toUpperCase() + type.slice(1),
                    text: message,
                    icon: type,
                    confirmButtonText: 'OK',
                });
            }
        });
    </script>


















                <div   id="founditem" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Found Items</h5>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap" >
                        <?php
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the admin table
$sql = "SELECT * FROM  founditems";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-hover table-nowrap">
            <tr>
            <thead class="thead-light">
                <th>Found Item Image</th>
                <th>Found Item ID</th>
                <th>Item Name</th>
                <th>Description</th>
                <th>Found Location</th>
                <th>Found Date</th>
                <th>Finder Person</th>
                <th>Finder Phone</th>
                <th>Finder Email</th>
                <!-- Add more table headers as needed for your specific data -->
                </thead>
                </tr>';
              
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
        <td><img src="uploads/' . $row["Founditemimage"] . '" alt="Item Image" width="70"></td>
                <td>' . $row["FoundItemsID"] . '</td>
                <td>' . $row["ItemName"] . '</td>
                <td>' . $row["Description"] . '</td>
                <td>' . $row["FoundLocation"] . '</td>
                <td>' . $row["FoundDate"] . '</td>
                <td>' . $row["FinderPerson"] . '</td>
                <td>' . $row["FinderPhone"] . '</td>
                <td>' . $row["FinderEmail"] . '</td>

            </tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>
                        </table>
                    </div>


                 <div class="card-footer border-0 py-3 d-flex justify-content-center flex-wrap">
       
                 <button type="button" class="btn btn-success btn-sm m-1" data-toggle="modal" data-target="#posfoundtitemmodal" >
    <i class="bi bi-plus-circle"></i> Post Found Item
</button>


<button type="button" class="btn btn-warning btn-sm m-1" data-toggle="modal" data-target="#editfounditem">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal"  data-target="#deletfoundlostitem">
    <i class="bi bi-trash"></i> Delete
</button>   


<button type="button" class="btn btn-info btn-sm m-1" id="refreshButton14">
<i class="bi bi-file-text"></i>  Refresh
</button>

<script>
        document.getElementById("refreshButton14").addEventListener("click", function() {
            // Add your refresh functionality here
            // For example, you can reload the current page with the following line
            location.reload();
        });
    </script>
                    </div>
                </div>



                <div class="modal fade" id="posfoundtitemmodal">
        <div class="modal-dialog" id="lostandfound"  >
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Post Found Items for Lost&Found</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="founditems" action="passengerdash.php" method="post" enctype="multipart/form-data">
    <div class="container">
        <div class="row">
            <div class="col-md-6">

               
       <div class="form-group">
  <label id="founditemimage" for="founditemimage">Found Item Image</label>
  <input  class="form-control" type="file" name="founditemimage" accept=".jpg, .png .jpeg .pdf, .doc, .docx">
</div>

                
                <div class="form-group">
                    <label id="foundItemName" for="foundItemName">Found Item Name</label>
                    <input type="text" name="foundItemName" class="form-control" required>
                </div>
             
                <div class="form-group">
                    <label id="foundDescription" for="foundDescription">Description</label>
                    <input name="foundDescription" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="foundLocation" for="foundLocation">Find Location</label>
                    <input name="foundLocation" type="text" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label id="foundDate" for="foundDate">Find Date</label>
                    <input name="foundDate" type="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="foundPerson" for="foundPerson">Finder Person</label>
                    <input name="foundPerson" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="foundContactPhone" for="foundContactPhone">Finder Phone</label>
                    <input name="foundContactPhone" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label id="foundEmail" for="foundEmail">Finder Email</label>
                    <input name="foundEmail" type="text" class="form-control" required>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer mt-3 d-flex  justify-content-center ">
                    <button id="SaveFOundItem" type="submit"  class="btn btn-success"><i class="fas fa-save"></i> Save</button>
                </div>
</form>
</div>
            </div>
        </div>
    </div>



    <script type="text/javascript">
$(function() {
    $('#SaveFOundItem').click(function(e) {
        e.preventDefault();

        var valid = $('#founditems')[0].checkValidity();

        if (valid) {
            var formData = new FormData($('#founditems')[0]);

            $.ajax({
                type: 'POST',
                url: 'sample.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: data,
                    }).then(function() {
                        // Optionally, you can perform additional actions after the success message
                        window.location.reload(); // Reload the page to reflect changes
                    });
                },
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'There were errors while saving the data.',
                    });
                },
            });
        } else {
            // Handle invalid form data here
        }
    });
});


</script>






<div class="modal fade" id="editfounditem">
        <div  id="editlostitem" class="modal-dialog">
            <div  class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Found Item Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="updateForm" action="admin.php"  method="post">
              
            
                        <div class="container">
        <div class="row">
            <div class="col-md-6">
            <label for="FoundItemsID">Search Item-ID</label>
                        <select name="FoundItemsID" id="FoundItemsID" class="form-control" required>
                            <option value="" disabled selected>Select Found Item ID</option>
                            <?php
                      

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT FoundItemsID  FROM founditems";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["FoundItemsID"].'">'.$row["FoundItemsID"].'</option>';
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </select>
                
                <div class="form-group">
                    <label id="foundupdateItemName" for="foundupdateItemName">Update Found Item Name</label>
                    <input type="text" name="foundupdateItemName" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label id="foundupdateContactPhone" for="foundupdateContactPhone">Update Found  Contact Phone</label>
                    <input name="foundupdateContactPhone" type="text" class="form-control" required>
                </div>

                <div class="form-group">
                    <label id="foundupdateDescription" for="foundupdateDescription">Update Found Description</label>
                    <input name="foundupdateDescription" type="text" class="form-control" required>
                </div>
            </div>
            <div class="col-md-6">
               
                <div class="form-group">
                    <label id="foundupdateLostLocation" for="foundupdateLostLocation">Update Found Location</label>
                    <input name="foundupdateLostLocation" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="foundupdateLostDate" for="foundupdateLostDate">Update Found  Date</label>
                    <input name="foundupdateLostDate" type="date" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="foundupdateContactPerson" for="foundupdateContactPerson">Update Finder  Person</label>
                    <input name="foundupdateContactPerson" type="text" class="form-control" required>
                </div>
                <div class="form-group">
                    <label id="foundupdateContactEmail" for="foundupdateContactEmail">Update Finder  Email</label>
                    <input name="foundupdateContactEmail" type="text" class="form-control" required>
                </div>
            </div>
        </div>
    </div>
 
    
</form>
</div>
<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="FounditemUpdate" type="button" class="btn btn-primary">Save Item</button>
                </div>

            </div>
        </div>
    </div>

    <script>
  $(document).ready(function() {
    $("#FounditemUpdate").click(function() {
      var FoundItemsID= $("#FoundItemsID").val();
      var foundupdateItemName = $("input[name='foundupdateItemName']").val();
      var foundupdateDescription = $("input[name='foundupdateDescription']").val();
      var foundupdateLostLocation = $("input[name='foundupdateLostLocation']").val();
      var foundupdateLostDate = $("input[name='foundupdateLostDate']").val();
      var foundupdateContactPerson = $("input[name='foundupdateContactPerson']").val();
      var foundupdateContactPhone = $("input[name='foundupdateContactPhone']").val();
      var foundupdateContactEmail = $("input[name='foundupdateContactEmail']").val();



      $.post(
        "passengerupdate.php", // Replace with the actual file name for update
        {
            FoundItemsID: FoundItemsID,
            foundupdateItemName:foundupdateItemName,
            foundupdateDescription:foundupdateDescription,
            foundupdateLostLocation:foundupdateLostLocation,
            foundupdateLostDate:foundupdateLostDate,
            foundupdateContactPerson:foundupdateContactPerson,
            foundupdateContactPhone:foundupdateContactPhone,
            foundupdateContactEmail:foundupdateContactEmail
        },
        function(data, status) {
          if (status === 'success') {
            Swal.fire({
              title: 'Items Updated Successfully!',
              icon: 'success',
              confirmButtonText: 'Okay'
            }).then((result) => {
              if (result.isConfirmed) {
                $(".swal2-popup").addClass('light-theme');
              }
            });
          } else {
            // Handle error here
            Swal.fire({
              title: 'Error!',
              text: 'There was an error while updating the record.',
              icon: 'error',
              confirmButtonText: 'Okay'
            }).then((result) => {
              if (result.isConfirmed) {
                $(".swal2-popup").addClass('light-theme');
              }
            });
          }
        }
      );
    });
  });
</script>


<div class="modal fade" id="deletfoundlostitem">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Found Item Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="founditemsdelete" action="passifdelete.php" method="post">
                    <div class="form-group">
                        <label for="foundItemsID">Delete Selected Item</label>
                        <select name="foundItemsID" id="foundItemsID" class="form-control" required>
                            <option value="" disabled selected>Select an Items ID</option>
                            <?php
                            // Your PHP code for populating the select options
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT FoundItemsID FROM founditems";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["FoundItemsID"].'">'.$row["FoundItemsID"].'</option>';
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="founditemDelete" type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
        $(document).ready(function() {
            $('#founditemsdelete').submit(function(e) {
                e.preventDefault();
                var formData = $(this).serialize();
                $.ajax({
                    type: 'POST',
                    url: 'delete.php', // Make sure this is the correct path to your delete.php file
                    data: formData,
                    dataType: 'json', // Set the dataType to 'json' to parse the JSON response
                    success: function(response) {
                        showAlert(response.type, response.message);
                    },
                    error: function() {
                        showAlert('error', 'Something went wrong. Please try again.');
                    }
                });
            });

            function showAlert(type, message) {
                Swal.fire({
                    title: type.charAt(0).toUpperCase() + type.slice(1),
                    text: message,
                    icon: type,
                    confirmButtonText: 'OK',
                });
            }
        });
    </script>
















     <!--Drivers table ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


     <div   id="Dashboard-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Drivers Professional Public Service Rating Scale</h5>
                    </div>
                    <div class="table-responsive">


                        <table class="table table-hover table-nowrap" >
                        <?php
// Replace with your actual database credentials


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the admin table
$sql = "SELECT * FROM driverstbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-hover table-nowrap">
            <tr>
            <thead class="thead-light">
                <th>Drivers Name</th>
                <th>Unit#</th>
                <th>Plate Number</th>
                <th>Vehicle Picture</th>
                
                </thead>
                </tr>';
              
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
               
                <td>' . $row["Username"] . '</td>
                <td>' . $row["Age"] . '</td>
                <td>' . $row["Password"] . '</td>
                <td>' . $row["PermittoOperate"] . '</td>
            </tr>';
    }
    echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>            
                        </table>
                    </div>


                 <div class="card-footer border-0 py-3 d-flex justify-content-center flex-wrap">
               
                 <button type="button" class="btn btn-success btn-sm m-1" id="trackButton" data-toggle="modal" data-target="#Drivertrack">
    <i class="bi bi-check-circle"></i> Submit Rating
</button>


                    </div>
                </div>


                
 

<div class="modal fade" id="Drivertrack">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Rate Drivers Public Service</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                
                <form id="updateForm" action="submit_rating.php" method="post" enctype="multipart/form-data">
                    <label for="SearchDriver">Search for Driver Name</label>
                    <input type="text" name="SearchDriver" id="SearchDriver" class="form-control" placeholder="Driver's Name" required>
             
                <div id="searchResults"></div>
            </div>

 
            <div class="custom-btn-container">


            <div id="Rate" style="width: 80%; margin: auto; display:none;  margin-bottom: 20px;">
    <label for="Rate">Rate:</label>
    <textarea class="form-control mx-auto" name="Rate" id="RateTextArea" style="width: 100%;" placeholder="Rate"></textarea>
</div>
    <!-- Adjust the 'width' and 'margin' values as needed -->
    
    <!-- Buttons for rating -->
    <button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(1)">
    <i class="bi bi-star"></i> 1 Star
</button>

<button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(2)">
    <i class="bi bi-star"></i> 2 Stars
</button>

<button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(3)">
    <i class="bi bi-star"></i> 3 Stars
</button>

<button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(4)">
    <i class="bi bi-star"></i> 4 Stars
</button>

<button type="button" class="btn btn-outline-secondary btn-sm m-1 custom-btn" data-toggle="modal" data-target="#commentsArea" onclick="updateRating(5)">
    <i class="bi bi-star"></i> 5 Stars
</button>



<script>
    function updateRating(rating) {
        document.getElementById("RateTextArea").value = rating + "";
        // You can customize this value as per your requirement
    }
</script>




<div id="commentsArea" style="display:none; width: 80%; margin: 0 auto;">
    <label for="comments">Comments:</label>
    <textarea class="form-control mx-auto" name="comments" id="comments" style="width: 100%;" placeholder="Comments"></textarea>
    <!-- Adjust the 'width' and 'margin' values as needed -->
</div>

<script>
    function showCommentsArea(rating) {
        // Show the comments area when a button is clicked
        document.getElementById('commentsArea').style.display = 'block';

        // You can use the 'rating' parameter to do something specific for each rating if needed
        // For example, you can store the rating in a variable or perform additional actions based on the rating
    }
</script>

</div>



            <div class="modal-footer">

            <button type="button" class="btn btn-secondary btn-sm m-1"  data-toggle="modal" data-dismiss="modal">
    <i class="fas fa-times"></i> Close
</button>
<button type="submit" class="btn btn-success btn-sm m-1" id="submitRatingButton" data-toggle="modal">
    <i class="fas fa-check"></i> Submit Rating
</button>

</form>

            </div>
        </div>
    </div>
</div>

<!-- Your existing HTML code remains unchanged -->

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("SearchDriver");
        const searchResults = document.getElementById("searchResults");

        searchInput.addEventListener("input", function() {
            const searchText = searchInput.value.toLowerCase();
            if (searchText.length > 0) {
                fetch(`passengerDriverDetails.php?search=${searchText}`)
                    .then(response => response.text())
                    .then(data => {
                        searchResults.innerHTML = data;
                    })
                    .catch(error => {
                        console.error('Error:', error);
                    });
            } else {
                searchResults.innerHTML = "";
            }
        });
    });
</script>

<!-- Include SweetAlert library -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function () {
        // When the Submit Rating button is clicked
        $("#submitRatingButton").click(function (event) {
            // Prevent the default form submission
            event.preventDefault();

            // Get the form data
            var formData = {
                'SearchDriver': $('#SearchDriver').val(),
                'Rate': $('#RateTextArea').val(),
                'comments': $('#comments').val()
            };

            // Send an AJAX request
            $.ajax({
                type: "POST",
                url: "submit_rating.php",
                data: formData,
                success: function (response) {
                    if (response.includes('Rating submitted successfully')) {
                        // Rating submitted successfully
                        Swal.fire({
                            icon: 'success',
                            title: 'Success',
                            text: 'Rating submitted successfully',
                            confirmButtonText: 'OK'
                        }).then((result) => {
                            // You can perform other actions here if needed
                        });
                    } else {
                        // Error occurred
                        Swal.fire({
                            icon: 'error',
                            title: 'Error',
                            text: 'Error submitting rating: ' + response,
                            confirmButtonText: 'OK'
                        });
                    }
                },
                error: function () {
                    // Handle errors
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Error submitting rating.',
                        confirmButtonText: 'OK'
                    });
                }
            });
        });
    });
</script>



               























     

<!--Drivers table END------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->





<!--Display  news and events-end----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->







<div  id="Displayenews" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Public News Announcements</h5>
                    </div>
                    <div class="table-responsive">
                    <div class="container mt-5 mb-5">
    <div class="row">
    <?php
      // Replace these with your actual database connection details
      $host = "localhost";
      $username = "root";
      $password = "";
      $database = "plate-to-place-v-tracking";

      // Create a database connection
      $your_db_connection = mysqli_connect($host, $username, $password, $database);

      // Check the connection
      if (!$your_db_connection) {
          die("Connection failed: " . mysqli_connect_error());
      }

      // Fetch data from the "newsandevents" table
      $query = "SELECT NewsID, Header,Time, Date, Body, Image FROM newsandevents";
      $result = mysqli_query($your_db_connection, $query);

      // Check if the query was successful
      if ($result) {
          // Fetch data row by row
          while ($row = mysqli_fetch_assoc($result)) {
              $header = $row['Header'];
              $time = $row['Time'];
              $date = $row['Date'];
              $body = $row['Body'];
              $image = $row['Image'];

              // Display data in Bootstrap cards
              echo '<div class="col-md-4 mb-4 newscard">';
              echo '<div class="card h-100 border rounded shadow-sm d-flex flex-column align-items-stretch">';
              // Add styling to the card image
              echo '<img src="uploads/' . $image . '" class="card-img-top" alt="Card Image" style="width: 100%; height: 200px; object-fit: cover;">';
              
              echo '<div class="card-body mt-0 flex-grow-1">';
              echo '<div class="d-flex justify-content-between">';
              echo '<p class="card-text"><small class="text-muted">' . date('F j, Y', strtotime($date)) . ' | ' . date('g:i A', strtotime($time)) . '</small></p>';
              echo '</div>';
              echo '<h5 class="card-title">' . $header . '</h5>';
              $trimmed_body = strlen($body) > 50 ? substr($body, 0, 50) . '...' : $body;
              echo '<p class="card-text">' . $trimmed_body . '</p>';
              echo '</div>';
              echo '<div style="border:none;" class="card-footer text-center bg-transparent">';
              echo '<a href="#" class="read-more-btn btn btn" data-toggle="modal" data-target="#readMoreModal' . $row['NewsID'] . '">Read More  <i class="bi bi-arrow-right-square"></i></a>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              
              // Rest of your code remains the same...
              
              // Modal for full text
              echo '<div class="modal fade newscard" id="readMoreModal' . $row['NewsID'] . '" tabindex="-1" role="dialog" aria-labelledby="readMoreModalLabel' . $row['NewsID'] . '" aria-hidden="true">';
              echo '<div class="modal-dialog" role="document">';
              echo '<div class="modal-content">';
              echo '<div style="background-color: #603ce3" class="modal-header">';
              echo '<h5 style="color: #fff;" class="modal-title">' . $header . '</h5>';
              echo '<button style="background-color: #603ce3; color: #fff; border:none;" type="button" class="close" data-dismiss="modal" aria-label="Close">';
              echo '<span aria-hidden="true">&times;</span>';
              echo '</button>';
              echo '</div>';
              echo '<div class="modal-body">';
              // Add styling to the modal image
              echo '<img src="uploads/' . $image . '" class="card-img-top" alt="Card Image" style="width: 100%; height: 300px; object-fit: cover;">';
              
              echo '<div>';
              echo '<p class="card-text mt-4"><small class="text-muted">' . date('F j, Y', strtotime($date)) . ' | ' . date('g:i A', strtotime($time)) . '</small></p>';
              echo '</div>';
              echo '<p class="lead">' . $body . '</p>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              echo '</div>';
              
              

              
              
              

          }

          // Free result set
          mysqli_free_result($result);
      } else {
          // Handle the error if the query fails
          echo "Error: " . mysqli_error($your_db_connection);
      }

      // Close the database connection
      mysqli_close($your_db_connection);
  ?>
    </div>
</div>
<script>
    // Initialize Bootstrap tooltips
    $(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
                    </div>
                    <div class="card-footer border-0 py-3 d-flex justify-content-center flex-wrap">
             

    </div>
    </div>
























<!--Display  news and events-end----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->















































<!--Admin------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>







                <div  id="Admin-table" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Passenger Personal Details</h5>
 </div>
<div class="table-responsive">
<?php

if (isset($_GET['Username'])) {
    $usernameParam = $_GET['Username'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Name, Age, Gender, Phone, HomeAddress, Username FROM passengertbl WHERE Username = ?";
    $stmt = $conn->prepare($sql);

    if (!$stmt) {
        die("Error in statement preparation: " . $conn->error);
    }

    $stmt->bind_param("s", $usernameParam);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo '<div class="container">';
            echo '<div class="row">';
            echo '<div class="col-md-6">';
            echo  '<img src="../Images/Personal.svg" class="img-fluid mb-5 mt-2">';
            echo "</div>";
            echo '<div class="col-md-6">';
            echo '<h2 class="mt-7 text-center" id="FAQ">Passenger Information</h2>';
            echo "<div class='container mt-2'>";
            echo "<form>";
            
            // First Column
            echo "<div class='row'>";
            echo "<div class='col-md-6 mb-3'>";
            echo "<label for='name'>Name:</label>";
            echo "<input type='text' id='name' value='" . htmlspecialchars($row["Name"]) . "' class='form-control' readonly>";
            echo "</div>";
            echo "<div class='col-md-6 mb-3'>";
            echo "<label for='age'>Age:</label>";
            echo "<input type='text' id='age' value='" . htmlspecialchars($row["Age"]) . "' class='form-control' readonly>";
            echo "</div>";
            echo "<div class='col-md-6 mb-3'>";
            echo "<label for='gender'>Gender:</label>";
            echo "<input type='text' id='gender' value='" . htmlspecialchars($row["Gender"]) . "' class='form-control' readonly>";
            echo "</div>";
            echo "<div class='col-md-6 mb-3'>";
            echo "<label for='phone'>Phone:</label>";
            echo "<input type='text' id='phone' value='" . htmlspecialchars($row["Phone"]) . "' class='form-control' readonly>";
            echo "</div>";
            echo "</div>";
            
      
echo "<div class='mb-3'>";
echo "<label for='homeAddress'>Home Address:</label>";
echo "<input type='text' id='homeAddress' value='" . htmlspecialchars($row["HomeAddress"]) . "' class='form-control' readonly>";
echo "</div>";

echo "<div class='mb-3'>";
echo "<label for='username'>Username:</label>";
echo "<input type='text' id='username' value='" . htmlspecialchars($row["Username"]) . "' class='form-control' readonly>";
echo "</div>";

            
            echo "</form>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
        }
    } else {
        echo "0 results";
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Username not provided in the URL.";
}

?>




         
           </div>
                    <div class="card-footer border-0 py-3 d-flex justify-content-center flex-wrap">
<button type="button" class="btn btn-warning btn-sm m-1" data-toggle="modal" data-target="#Passengerupdate">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal"  data-target="#passengerdelete">
    <i class="bi bi-trash"></i> Delete Account
</button>

 <button type="button" class="btn btn-info btn-sm m-1" id="refreshButton2">
        <i class="bi bi-arrow-clockwise"></i> Refresh
    </button>
<script>
        document.getElementById("refreshButton2").addEventListener("click", function() {
            // Add your refresh functionality here
            // For example, you can reload the current page with the following line
            location.reload();
        });
    </script>
                    </div>
                </div>



        <div class="modal" id="Passengerupdate">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Passenger Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="updateForm" action="admin.php"  method="post">
                <label for="SelectPassenger">Select Passenger Infomation</label>
                        <select name="SelectPassenger" id="SelectPassenger" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <?php
if (isset($_GET['Username'])) {
    $requestedUsername = $_GET['Username'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Name FROM passengertbl WHERE Username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $requestedUsername);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Display the fetched names
            while ($row = $result->fetch_assoc()) {
                echo '<option value="'.$row["Name"].'">'.$row["Name"].'</option>';
            }
        } else {
            echo "0 results";
        }

        $stmt->close();
    } else {
        echo "Error in statement preparation: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Username not provided in the URL.";
}
?>

                        </select>
            
    <div class="form-group">
        <label id="PassengerAge" for="PassengerAge">Age</label>
        <input type="text" name="PassengerAge" class="form-control" required>
    </div>
    <div class="form-group">
        <label id="PassengerGender" for="PassengerGender">Gender</label>
        <input name="PassengerGender" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label id="PassengerPhone" for="PassengerPhone">Phone</label>
        <input type="text" name="PassengerPhone" class="form-control" required>
    </div>
    <div class="form-group">
        <label id="PassengerAddress" for="PassengerAddress">Home Address</label>
        <input type="text" name="PassengerAddress" class="form-control" required>
    </div>
</form>
</div>
<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="PassengerRegister" type="button" class="btn btn-primary" >Save Passenger</button>
                </div>

            </div>
        </div>
    </div>



    <script>
  $(document).ready(function() {
    $("#PassengerRegister").click(function() {
      var SelectPassenger = $("#SelectPassenger").val();
      var PassengerAge = $("input[name='PassengerAge']").val();
      var PassengerGender = $("input[name='PassengerGender']").val();
      var PassengerPhone = $("input[name='PassengerPhone']").val();
      var PassengerAddress = $("input[name='PassengerAddress']").val();
      $.post(
        "passengerupdate.php", // Replace with the actual file name for update
        {
          SelectPassenger: SelectPassenger,
          PassengerAge: PassengerAge,
          PassengerGender: PassengerGender,
          PassengerPhone: PassengerPhone,
          PassengerAddress: PassengerAddress
        },
        function(data, status) {
          if (status === 'success') {
            Swal.fire({
              title: 'Updated Successfully!',
              icon: 'success',
              confirmButtonText: 'Okay'
            }).then((result) => {
              if (result.isConfirmed) {
                $(".swal2-popup").addClass('light-theme');
              }
            });
          } else {
            // Handle error here
            Swal.fire({
              title: 'Error!',
              text: 'There was an error while updating the record.',
              icon: 'error',
              confirmButtonText: 'Okay'
            }).then((result) => {
              if (result.isConfirmed) {
                $(".swal2-popup").addClass('light-theme');
              }
            });
          }
        }
      );
    });
  });
</script>









<div class="modal" id="passengerdelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Passenger Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="PassengerDelete" action="delete.php" method="post">
                    <div class="form-group">
                        <label for="SelectPassenger">Delete Selected Passenger </label>
                        <select name="SelectPassenger" id="SelectPassenger" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <?php
if (isset($_GET['Username'])) {
    $requestedUsername = $_GET['Username'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT Name FROM passengertbl WHERE Username = ?";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("s", $requestedUsername);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Display the fetched names
            while ($row = $result->fetch_assoc()) {
                echo '<option value="'.$row["Name"].'">'.$row["Name"].'</option>';
            }
        } else {
            echo "0 results";
        }

        $stmt->close();
    } else {
        echo "Error in statement preparation: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Username not provided in the URL.";
}
?>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="PassengerDelete" type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Make sure you have the correct path to the necessary libraries -->


<script>
    $(document).ready(function() {
        $('#PassengerDelete').submit(function(e) {
            e.preventDefault();
            var formData = $(this).serialize();
            $.ajax({
                type: 'POST',
                url: 'delete.php',
                data: formData,
                dataType: 'json',
                success: function(response) {
                    showAlert(response.type, response.message);

                    // Check if the response indicates success
                    if (response.type === 'success') {
                        // Redirect to login.php
                        window.location.href = 'login.php';
                    }
                },
                error: function() {
                    showAlert('error', 'Something went wrong. Please try again.');
                }
            });
        });

        function showAlert(type, message) {
            Swal.fire({
                title: type.charAt(0).toUpperCase() + type.slice(1),
                text: message,
                icon: type,
                confirmButtonText: 'OK',
            });
        }
    });
</script>





<style>
    .modal {
        animation: zoomIn 0.3s;
    }

    @keyframes zoomIn {
        from { transform: scale(0); }
        to { transform: scale(1); }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        var modal = document.getElementById('myModal');
        modal.addEventListener('show.bs.modal', function () {
            modal.classList.add('modal');
        });
        modal.addEventListener('hide.bs.modal', function () {
            modal.classList.remove('modal');
        });
    });
</script>






<!--Admin end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="passengerdash.js"></script>

<script type="text/javascript">
$(function() {
    $('#filereportRegister').click(function(e) {
        e.preventDefault();

        var valid = $('#clear')[0].checkValidity();

        if (valid) {
            var formData = new FormData($('#clear')[0]);

            $.ajax({
                type: 'POST',
                url: 'sample.php',
                data: formData,
                processData: false,
                contentType: false,
                success: function(data) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: data,
                    }).then(function() {
                        // Optionally, you can perform additional actions after the success message
                        window.location.reload(); // Reload the page to reflect changes
                    });
                },
                error: function(data) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'There were errors while saving the data.',
                    });
                },
            });
        } else {
            // Handle invalid form data here
        }
    });
});


</script>

</body>
</html>
