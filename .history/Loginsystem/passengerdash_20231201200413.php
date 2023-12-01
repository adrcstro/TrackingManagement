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
            <div class="navbar-user d-lg-none">
                <!-- Dropdown -->
                <div class="dropdown">
                    <!-- Toggle -->
                  
                    <!-- Menu -->
                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sidebarAvatar">
                        <a href="#" class="dropdown-item">Profile</a>
                        <a href="#" class="dropdown-item">Settings</a>
                        <a href="#" class="dropdown-item">Billing</a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">Logout</a>
                    </div>
                </div>
            </div>
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
                        <a class="nav-link" href="#">
                            <i class="bi bi-recycle"></i> Waste Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showFileComplaint()">
                            <i class="bi bi-flag-fill"></i> File Complaint
                        </a>
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
                                Plate-to-Place Tricycle Tracking Management Complain&Report Web-Application System</h1>
                        </div>
                        <!-- Actions -->
                        <div class="col-sm-6 col-12 text-sm-end" id="SIdebarBTN">
                            <div class="mx-n1">
                                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1 rounded-pill">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                                </a>
                                <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1 rounded-pill">
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
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">TODA Drivers</span>
                    
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
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Registered Passengers</span>
                    
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
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Complaint/Report</span>
                                        
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

                <label class="Labelcalculator" id="Labelcalculator" for="distance">Distance:</label>
                <input class="Inputcalculator" type="number" id="distance" placeholder="Enter distance" step="0.1">

                <select class="Inputcalculator" id="distanceUnit">
                    <option value="km">Kilometers (km)</option>
                    <option value="m">Meters (m)</option>
                </select>

                <label class="Labelcalculator" for="fareRate">Fare Rate (per kilometer):</label>
                <input class="Inputcalculator" type="number" id="fareRate" placeholder="Enter fare rate">

                <div style="text-align: center; margin-top: 30px;">
                    <button class="btn btn-primary rounded-pill" id="Buttoncalculator" onclick="calculateFare()">
                        <i class="fas fa-calculator"></i> Calculate Fare
                    </button>

                    <button id="calculatorbutton" class="btn btn-danger rounded-pill" onclick="resetInputs()">
                        <i class="fas fa-undo"></i> Reset Inputs
                    </button>
                </div>
                <script>
    function resetInputs() {
        document.getElementById("location").selectedIndex = 0;
        document.getElementById("distance").value = "";
        document.getElementById("fareRate").value = "";
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
    <a href="#" class="btn btn-primary btn-sm mt-2 rounded-pill" data-toggle="modal" data-target="#FileReport">
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
    <a href="#" class="btn btn-primary btn-sm mt-2 rounded-pill" data-toggle="modal" data-target="#FileReport">
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
    <a href="#"  class="btn btn-primary btn-sm mt-2 rounded-pill" data-toggle="modal" data-target="#FileReport">
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
    <form  id="clear" action="Filereport.php"  autocomplete="off"  enctype="multipart/form-data" method="post">
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
<div class="form-group g-col-6 g-col-md-4">
        <label  for="datefilereport">Select Date</label>
        <input id="datefilereport" name="datefilereport" type="date" class="form-control" required>
    </div>
    <div class="form-group g-col-6 g-col-md-4">
        <label  for="Fileinput3">Name of Complainant</label>
        <input id="Fileinput3" name="Fileinput3" type="text" class="form-control" required>
    </div>
    <div class="form-group g-col-6 g-col-md-4">
        <label  for="Fileinput4">Contact Number</label>
        <input id="Fileinput4" name="Fileinput4" type="text" class="form-control" required>
    </div>
    <div class="form-group g-col-6 g-col-md-4">
        <label  for="Fileinput5">Home Address</label>
        <input id="Fileinput5" name="Fileinput5" type="text" class="form-control" required>
    </div>
    <div class="form-group g-col-6 g-col-md-4">
        <label  for="Fileinput6">Submit Any Prof To Identify Driver</label>
        <input name="Fileinput6" id="Fileinput6" type="file" class="form-control" accept=".jpg, .png .jpeg .pdf, .doc, .docx" required>
    </div>

    <div class="form-group g-col-6 g-col-md-4">
    <label for="PassSearchDriver">Search Name of Complainee</label>
    <input type="text" name="PassSearchDriver" id="PassSearchDriver" class="form-control" placeholder="VehicleNumber/PlateNumber" required>
    </div>

<div class="input-group mb-3 mt-5" style="border: 1px solid #ccc;">
<label for="PassSearchDriver">Search Name of Complainee</label>
<input type="text" name="PassSearchDriver" id="PassSearchDriver" class="form-control"required>
 <button class="btn btn-outline-secondary" type="button" id="button-addon2">Paste</button>
</div>




    <div id="PasssearchResults"></div>  

    <div class="modal-footer justify-content-center" style="margin-top: 1rem;">
    <button id="filereportRegister" type="submit" value="Submit" class="btn btn-danger rounded-pill">
        <i class="fas fa-exclamation-triangle"></i> File Complaint
    </button>

    <!-- Add the new button -->
    <button id="copyComplaineeName" type="button" class="btn btn-primary rounded-pill">
        <i class="fas fa-copy"></i> Copy Name
    </button>
</div>

</form>
</div>


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



















     <!-- FileComplaint sheets end ------------------------------------------------------------------------------------------------------------------------------------------------>



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
               
                 <button type="button" class="btn btn-success btn-sm m-1 rounded-pill" id="trackButton" data-toggle="modal" data-target="#Drivertrack">
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

            <button type="button" class="btn btn-secondary btn-sm m-1 rounded-pill" id="copyButton" data-toggle="modal" data-dismiss="modal">
    <i class="fas fa-times"></i> Close
</button>
<button type="button" class="btn btn-success btn-sm m-1 rounded-pill" id="submitRatingButton" data-toggle="modal">
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
        $("#submitRatingButton").click(function () {
            // Get the form data
            var formData = $("#updateForm").serialize();

            // Send an AJAX request
            $.ajax({
                type: "POST",
                url: "submit_rating.php", // Adjust the path to your PHP file
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
                            // You can redirect or perform other actions here
                            if (result.isConfirmed) {
                                window.location.href = 'passengerdash.php';
                            }
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
        $query = "SELECT NewsID, Header, Date, Body, Image FROM newsandevents";
        $result = mysqli_query($your_db_connection, $query);

        // Check if the query was successful
        if ($result) {
            // Fetch data row by row
            while ($row = mysqli_fetch_assoc($result)) {
                $header = $row['Header'];
                $date = $row['Date'];
                $body = $row['Body'];
                $image = $row['Image'];

                // Display data in Bootstrap cards
                echo '<div class="col-md-4 mb-5">'; // Adjusted margin-bottom to mb-5
                echo '<div class="cardss">';
                echo '<img src="uploads/' . $image . '" class="card-img-top" alt="Card Image">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $header . '</h5>';
                echo '<p class="card-text"><small class="text-muted">' . $date . '</small></p>';
                
                // Cut the text if it is longer than 250 characters
                $trimmed_body = strlen($body) > 90 ? substr($body, 0, 90) . '...' : $body;
                echo '<p class="card-text">' . $trimmed_body . ' <a href="#" class="read-more" data-toggle="modal" data-target="#readMoreModal' . $row['NewsID'] . '">Read More</a></p>';
                
                echo '</div>';
                echo '</div>';
                echo '</div>';

                // Modal for full text
                echo '<div class="modal fade" id="readMoreModal' . $row['NewsID'] . '" tabindex="-1" role="dialog" aria-labelledby="readMoreModalLabel' . $row['NewsID'] . '" aria-hidden="true">';
                echo '<div class="modal-dialog read-more-modal" role="document">';
                echo '<div class="modal-content">';
                echo '<div class="modal-header">';
                echo '<h5 class="modal-title" id="readMoreModalLabel' . $row['NewsID'] . '">' . $header . '</h5>';
                echo '<button type="button" class="close" data-dismiss="modal" aria-label="Close">';
                echo '<span aria-hidden="true">&times;</span>';
                echo '</button>';
                echo '</div>';
                echo '<div class="modal-body">';
                echo '<p>' . $body . '</p>';
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
                        <h5 class="mb-0">Passenger Details</h5>
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
$sql = "SELECT * FROM passengertbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-hover table-nowrap">
            <tr>
            <thead class="thead-light">
                <th>Name</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Phone</th>
                <th>Home Address</th>
                <th>Email</th>
                
                </thead>
                </tr>';
              
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
               
                <td>' . $row["Name"] . '</td>
                <td>' . $row["Age"] . '</td>
                <td>' . $row["Gender"] . '</td>
                <td>' . $row["Phone"] . '</td>
                <td>' . $row["HomeAddress"] . '</td>
                <td>' . $row["Username"] . '</td>
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
<button type="button" class="btn btn-warning btn-sm m-1 rounded-pill" data-toggle="modal" data-target="#Passengerupdate">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm m-1 rounded-pill" data-toggle="modal"  data-target="#passengerdelete">
    <i class="bi bi-trash"></i> Delete
</button>

 <button type="button" class="btn btn-info btn-sm m-1 rounded-pill" id="refreshButton2">
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
                      

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT Name FROM passengertbl";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["Name"].'">'.$row["Name"].'</option>';
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
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
    <div class="form-group">
        <label id="PassengerEmail" for="PassengerEmail">Email</label>
        <input type="text" name="PassengerEmail" class="form-control" required>
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
      var PassengerEmail = $("input[name='PassengerEmail']").val();
      $.post(
        "passengerupdate.php", // Replace with the actual file name for update
        {
          SelectPassenger: SelectPassenger,
          PassengerAge: PassengerAge,
          PassengerGender: PassengerGender,
          PassengerPhone: PassengerPhone,
          PassengerAddress: PassengerAddress,
          PassengerEmail: PassengerEmail
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
                <h4 class="modal-title">Delete Administrator Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="PassengerDelete" action="passengerdelete.php" method="post">
                    <div class="form-group">
                        <label for="SelectPassenger">Delete Selected Passenger </label>
                        <select name="SelectPassenger" id="SelectPassenger" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <?php
                            // Your PHP code for populating the select options
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT Name FROM Passengertbl";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["Name"].'">'.$row["Name"].'</option>';
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
                    url: 'passengerdelete.php', // Make sure this is the correct path to your delete.php file
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










<!--Admin end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="passengerdash.js"></script>

<script type="text/javascript">
  $(function(){
    $('#filereportRegisterr').click(function(e){
        var valid = this.form.checkValidity();

        if(valid){
            var formData = new FormData();
            formData.append('Fileinput1', $('#Fileinput1').val());
            formData.append('datefilereport', $('#datefilereport').val());
            formData.append('Fileinput3', $('#Fileinput3').val());
            formData.append('Fileinput4', $('#Fileinput4').val());
            formData.append('Fileinput5', $('#Fileinput5').val());
            formData.append('Fileinput6', $('#Fileinput6')[0].files[0]); // File input
            formData.append('PassSearchDriver', $('#PassSearchDriver').val());

            e.preventDefault();    

            $.ajax({
                type: 'POST',
                url: 'Filereport.php',
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
