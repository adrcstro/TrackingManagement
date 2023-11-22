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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
 

<!-- Include SweetAlert library -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
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
            <a id="hide-table-link" class="nav-link" href="#" onclick="showPassengers()">
                <i class="bi bi-people"></i> Passengers
            </a>
        </li>     
         <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDriver()">
                            <i class="bi bi-car-front"></i> Drivers
                            
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
                        <a class="nav-link" href="#" onclick="showComplaincenter()">
                            <i class="bi bi-flag-fill"></i> Complaint Center
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-file-text"></i> NEWS/EVENTS
                        
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Create</a></li>
                            <li><a class="dropdown-item" href="#">Public News</a></li>
                          
                        </ul>
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
                                <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1">
                                    <span class=" pe-2">
                                        <i class="bi bi-pencil"></i>
                                    </span>
                                    <span>Edit</span>
                                </a>
                                <a href="#" class="btn d-inline-flex btn-sm btn-primary mx-1">
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





    

     <div class="calculator-table card shadow border-0 mb-7" style="display:none;" id="calculator-table">
    <div class="card-header thead-light text-center">
        <h5 class="mb-0" id="calculator" >Going Somewhere? Check your Fare</h5>
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

        <label class="Labelcalculator" id="Labelcalculator" for="distance">Distance (in kilometers):</label>
        <input class="Inputcalculator" type="number" id="distance" placeholder="Enter distance" step="0.1">

        <label class="Labelcalculator" for="fareRate">Fare Rate (per kilometer):</label>
        <input class="Inputcalculator" type="number" id="fareRate" placeholder="Enter fare rate">
        
        <div   style="text-align: center; margin-top: 30px;">
  <button class="btn btn-primary" id="Buttoncalculator" onclick="calculateFare()">
    <i class="fas fa-calculator"></i> Calculate Fare
  </button>

  <button id="calculatorbutton" class="btn btn-danger" onclick="resetInputs()">
    <i class="fas fa-undo"></i> Reset Inputs
  </button>
</div>


        <div id="result"></div>
    </div>
</div>

<script>
    function calculateFare() {
        // Add your calculateFare() function logic here
    }

    function resetInputs() {
        document.getElementById("location").selectedIndex = 0;
        document.getElementById("distance").value = "";
        document.getElementById("fareRate").value = "";
        document.getElementById("result").innerHTML = "";
    }
</script>


    <div class="map-container">
        <iframe
            frameborder="0" style="border:0;"
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2295.7344092326657!2d120.99598241619746!3d14.601942961311995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9fb6c83552d%3A0x54ad786f735dc69e!2sBrgy.%20409%2C%20Sampaloc%2C%20Manila%2C%201008%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1699840691454!5m2!1sen!2sph"
            style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" allowfullscreen
        ></iframe>
    </div>
    </div>

</div>






















<!--Drivers table ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


                <div   id="Dashboard-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Drivers Personal Information</h5>
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
                <th>Drivers License</th>
                <th>Vehicle Registration</th>
                <th>Vehicle Picture</th>
                <th>Phone Number</th>
                <th>Home Address</th>
                </thead>
                </tr>';
              
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
               
                <td>' . $row["Username"] . '</td>
                <td>' . $row["Age"] . '</td>
                <td>' . $row["Password"] . '</td>
                <td>' . $row["DriversLicense"] . '</td>
                <td>' . $row["VehicleRegistration"] . '</td>
                <td>' . $row["PermittoOperate"] . '</td>
                <td>' . $row["PhoneNumber"] . '</td>
                <td>' . $row["HomeAddress"] . '</td>
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
                 <button type="button" class="btn btn-warning btn-sm m-1" data-toggle="modal" data-target="#Driverupdate">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal"  data-target="#Driverdelete">
    <i class="bi bi-trash"></i> Delete
</button>
<button type="button" class="btn btn-primary btn-sm m-1" id="trackButton" data-toggle="modal" data-target="#Drivertrack">
    <i class="bi bi-geo"></i> Track
</button>
<button type="button" class="btn btn-info btn-sm m-1" id="refreshButton3">
    <i class="bi bi-arrow-clockwise"></i> Refresh
</button>

<script>
        document.getElementById("refreshButton3").addEventListener("click", function() {
            // Add your refresh functionality here
            // For example, you can reload the current page with the following line
            location.reload();
        });
    </script>
                    </div>
                </div>



                <div class="modal" id="Driverupdate">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Drivers Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="updateForm" action="driverupdate.php" method="post" enctype="multipart/form-data">
                    <label for="SelectDriver">Select Driver Information to Update</label>
                    <select name="SelectDriver" id="SelectDriver" class="form-control" required>
                        <option value="" disabled selected>Select an option</option>
                        <?php
                                         
                      

                                                  $conn = new mysqli($servername, $username, $password, $dbname);
                      
                                                  if ($conn->connect_error) {
                                                      die("Connection failed: " . $conn->connect_error);
                                                  }
                      
                                                  $sql = "SELECT Username FROM driverstbl";
                                                  $result = $conn->query($sql);
                      
                                                  if ($result->num_rows > 0) {
                                                      while($row = $result->fetch_assoc()) {
                                                          echo '<option value="'.$row["Username"].'">'.$row["Username"].'</option>';
                                                      }
                                                  } else {
                                                      echo "0 results";
                                                  }
                                                  $conn->close();
                                                  ?>
                      
                      
                    </select>

                    <div class="form-group">
                        <label id="DriverAge" for="DriverAge">Unit#</label>
                        <input type="text" name="DriverAge" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label id="DriverPlanteNumber" for="DriverPlanteNumber">Plate Number</label>
                        <input name="DriverPlanteNumber" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label id="DriversDriversLicense" for="DriversDriversLicense">Drivers License</label>
                        <input type="file" name="DriversDriversLicense" accept=".jpg, .png, .jpeg, .pdf, .doc, .docx" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label id="DriverVehicleRegistration" for="DriverVehicleRegistrations">Vehicle Registration</label>
                        <input type="file" name="DriverVehicleRegistration" accept=".jpg, .png, .jpeg, .pdf, .doc, .docx" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label id="DriversPermittoOperate" for="DriversPermittoOperate">Vehicle Picture</label>
                        <input type="file" name="DriversPermittoOperate" accept=".jpg, .png, .jpeg, .pdf, .doc, .docx" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label id="DriversPhoneNumber" for="DriversPhoneNumber">Phone Number</label>
                        <input type="text" name="DriversPhoneNumber" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label id="DriversHomeAddress" for="DriversHomeAddress">Home Address</label>
                        <input type="text" name="DriversHomeAddress" class="form-control" required>
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button id="DriversRegister" type="submit" class="btn btn-primary">Save Driver</button>
            </div>
            </form>
        </div>
    </div>
</div>


<script>
  $(document).ready(function() {
    $("#DriversRegister").click(function(e) {
      e.preventDefault(); // Prevent default form submission

      var SelectDriver = $("#SelectDriver").val();
      var DriverAge = $("input[name='DriverAge']").val();
      var DriverPlanteNumber = $("input[name='DriverPlanteNumber']").val();
      var DriversDriversLicense = $("input[name='DriversDriversLicense']").prop('files')[0];
      var DriverVehicleRegistration = $("input[name='DriverVehicleRegistration']").prop('files')[0];
      var DriversPermittoOperate = $("input[name='DriversPermittoOperate']").prop('files')[0];
      var DriversPhoneNumber = $("input[name='DriversPhoneNumber']").val();
      var DriversHomeAddress = $("input[name='DriversHomeAddress']").val();

      var formData = new FormData();
      formData.append('SelectDriver', SelectDriver);
      formData.append('DriverAge', DriverAge);
      formData.append('DriverPlanteNumber', DriverPlanteNumber);
      formData.append('DriversDriversLicense', DriversDriversLicense);
      formData.append('DriverVehicleRegistration', DriverVehicleRegistration);
      formData.append('DriversPermittoOperate', DriversPermittoOperate);
      formData.append('DriversPhoneNumber', DriversPhoneNumber);
      formData.append('DriversHomeAddress', DriversHomeAddress);

      $.ajax({
        url: "passengerupdate.php", // Replace with the actual file name for update
        type: "POST",
        data: formData,
        processData: false,
        contentType: false,
        success: function(data) {
          Swal.fire({
            title: 'Updated Successfully!',
            icon: 'success',
            confirmButtonText: 'Okay'
          }).then((result) => {
            if (result.isConfirmed) {
              $(".swal2-popup").addClass('light-theme');
            }
          });
        },
        error: function() {
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
      });
    });
  });
</script>



<div class="modal" id="Driverdelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Administrator Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="driversDelete" action="driversdelete.php" method="post">
                    <div class="form-group">
                        <label for="SelectDriver">Delete Selected Driver Information </label>
                        <select name="SelectDriver" id="SelectDriver" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <!-- PHP code for populating the select options -->
                            <?php
                            require_once('Config.php');
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT Username FROM driverstbl";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["Username"].'">'.$row["Username"].'</option>';
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
                        <button type="button" id="DriversDelete" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(document).ready(function() {
        $('#DriversDelete').click(function() {
            var formData = $('#driversDelete').serialize();
            $.ajax({
                type: 'POST',
                url: 'driversdelete.php', // Make sure this is the correct path to your delete.php file
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








<div class="modal" id="Drivertrack">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Track Drivers Personal Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="updateForm" action="driverupdate.php" method="post" enctype="multipart/form-data">
                    <label for="SearchDriver">Search for Driver Information Any of these Name/VehicleNumber/PlateNumber</label>
                    <input type="text" name="SearchDriver" id="SearchDriver" class="form-control" placeholder="Type Any of These Details to Know the Driver: Name/VehicleNumber/PlateNumber" required>
                </form>
                <div id="searchResults"></div>
            </div>
            <div class="modal-footer">
            <button type="button" class="btn btn-primary btn-sm m-1" id="trackButton" data-toggle="modal" onclick="redirect()">
    <i class="bi bi-map"></i> View in Maps
</button>



<button type="button" class="btn btn-primary btn-sm m-1" id="copyButton" data-toggle="modal">
    <i class="fas fa-copy"></i> Copy Address
</button>

<script>
document.getElementById('copyButton').addEventListener('click', function() {
    // Get the input element
    var homeAddressInput = document.getElementById('homeAddress');

    // Get the value of the input, excluding the "Home Address: " prefix
    var actualAddress = homeAddressInput.value.replace('Home Address: ', '');

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
    function redirect() {
        // Replace 'https://example.com' with the URL you want to open in a new tab
        window.open('https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1653.974654744845!2d120.99601275370223!3d14.601926798815713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9fb6c83552d%3A0x54ad786f735dc69e!2sBrgy.%20409%2C%20Sampaloc%2C%20Manila%2C%201008%20Metro%20Manila!5e1!3m2!1sen!2sph!4v1699882464530!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>', '_blank');
    }
</script>


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
                fetch(`driverDetails.php?search=${searchText}`)
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






























<!--Drivers table END------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->










<!--passenger table------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


                <div  id="Passengers-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Passengers Personal Information</h5>
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
<button type="button" class="btn btn-warning btn-sm m-1" data-toggle="modal" data-target="#Passengerupdate">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal"  data-target="#passengerdelete">
    <i class="bi bi-trash"></i> Delete
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












<!--passenger table end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->












<!--Complaintable-start----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->




<div  id="Complein-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Complain Center</h5>
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

// Fetch data from the admin table
$sql = "SELECT * FROM complainttbl";
$result = $conn->query($sql);

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
                <th>Name of Complainee</th>
                </thead>
                </tr>';
              
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
               
                <td>' . $row["ComplaintID"] . '</td>
                <td>' . $row["TypeofComplaint"] . '</td>
                <td>' . $row["DateofReport"] . '</td>
                <td>' . $row["ComplainantName"] . '</td>
                <td>' . $row["ContactNumber"] . '</td>
                <td>' . $row["Address"] . '</td>
                <td>' . $row["ProfofIdentity"] . '</td>
                <td>' . $row["NameofComplainee"] . '</td>
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
                    <button type="button" class="btn btn-primary btn-sm m-1" data-toggle="modal" data-target="#ComplainUpdate">
    <i class="bi bi-arrow-up"></i> Modify
</button>

<button type="button" class="btn btn-success btn-sm m-1" data-toggle="modal" data-target="#ComplaintDelete">
    <i class="bi bi-check"></i> Remove
</button>

<button type="button" class="btn btn-secondary btn-sm m-1" data-toggle="modal" data-target="#ComplaintDelete">
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


<!--Complaintable-end----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


























<!--Admin------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------>







                <div  id="Admin-table" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Admins</h5>
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
$sql = "SELECT * FROM admintbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-hover table-nowrap">
            <tr>
            <thead class="thead-light">
                <th>BRGY-Admin</th>
                <th>Username</th>
                <th>Password</th>
                <th>Date Created</th>
                <!-- Add more table headers as needed for your specific data -->
                </thead>
                </tr>';
              
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>
               
                <td>' . $row["Admin"] . '</td>
                <td>' . $row["Username"] . '</td>
                <td>' . $row["Password"] . '</td>
                <td>' . $row["DateCreated"] . '</td>
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
                  
                    <button type="button" class="btn btn-success btn-sm m-1" data-toggle="modal" data-target="#myModal" >
    <i class="bi bi-plus-circle"></i> Create
</button>


<button type="button" class="btn btn-warning btn-sm m-1" data-toggle="modal" data-target="#update">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal"  data-target="#delete">
    <i class="bi bi-trash"></i> Delete
</button>

 <button type="button" class="btn btn-info btn-sm m-1" id="refreshButton">
        <i class="bi bi-arrow-clockwise"></i> Refresh
    </button>
<script>
        document.getElementById("refreshButton").addEventListener("click", function() {
            // Add your refresh functionality here
            // For example, you can reload the current page with the following line
            location.reload();
        });
    </script>
</div>



</div>




            </div>
        </main>
    </div>
</div>
  

 





  <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create Administrator Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                
                <!-- Modal Body -->
                <div class="modal-body">
                <form action="admin.php"  method="post">
    <div class="form-group">
        <label id="input1" for="input1">BRGY-Admin</label>
        <input name="input1" type="text" class="form-control" required>
    </div>
    <div class="form-group">
        <label id="input2" for="input2">Username</label>
        <input type="text" name="input2" class="form-control" required>
    </div>
    <div class="form-group">
        <label id="datePicker" for="datePicker">Select Date</label>
        <input name="datePicker" type="date" class="form-control" required>
    </div>
    <div class="form-group">
        <label id="input3" for="input3">Password</label>
        <input name="input3" type="text" class="form-control" required>
    </div>
</form>
</div>
<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="Register" type="button" class="btn btn-primary" >Save</button>
                </div>

            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>
    /* Custom CSS for light theme */
    .swal2-popup {
        background-color: #f9f9f9 !important;
    }
    .swal2-title {
        color: #333333 !important;
    }
    .swal2-content {
        color: #555555 !important;
    }
</style>

<script>
    $(document).ready(function(){
        $("#Register").click(function(){
            var input1 = $("input[name='input1']").val();
            var input2 = $("input[name='input2']").val();
            var datePicker = $("input[name='datePicker']").val();
            var input3 = $("input[name='input3']").val();
            $.post("Insert.php",
            {
                input1: input1,
                input2: input2,
                datePicker: datePicker,
                input3: input3
            },
            function(data, status){
                Swal.fire({
                    title: 'Success!',
                    text: 'New record created successfully',
                    icon: 'success',
                    confirmButtonText: 'Okay',
                });
                // Apply custom class for light theme
                $(".swal2-popup").addClass('light-theme');
            });
        });
    });
</script>



<div class="modal" id="update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Administrator Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="updateForm" action="admin.php" method="post"">
                    <div class="form-group">
                        <label for="input1">Select BRGY-ADMIN</label>
                        <select name="input1" id="input1" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <?php
                      

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT Admin FROM admintbl";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["Admin"].'">'.$row["Admin"].'</option>';
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label id="input2" for="input2">Update Username</label>
                        <input type="text" name="input2" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label id="datePicker" for="datePicker">Update Select Date</label>
                        <input name="datePicker" type="date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label id="input3" for="input3">Update Password</label>
                        <input name="input3" type="text" class="form-control" required>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button id="Update" type="submit" class="btn btn-primary" >Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php

// Set up your database connection details
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form has been submitted for updating
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $updated_admin = $_POST['input1'];
    $updated_username = $_POST['input2'];
    $updated_date = $_POST['datePicker'];
    $updated_password = $_POST['input3'];

    if (!empty($updated_admin)) {
        $sql = "UPDATE admintbl SET Username='$updated_username', Password='$updated_password', DateCreated='$updated_date' WHERE Admin='$updated_admin'";

        if ($conn->query($sql) === TRUE) {
           
        } else {
            echo "Error updating record: " . $conn->error;
        }
    } else {
        echo "Please select an admin to update";
    }
      
}

// Close the database connection
$conn->close();
?>


<script>
  $(document).ready(function() {
    $("#Update").click(function() {
      var input1 = $("input[name='input1']").val();
      var input2 = $("input[name='input2']").val();
      var datePicker = $("input[name='datePicker']").val();
      var input3 = $("input[name='input3']").val();
      $.post(
        "admin.php", // Replace with the actual file name for update
        {
          input1: input1,
          input2: input2,
          datePicker: datePicker,
          input3: input3
        },
        function(data, status) {
          Swal.fire({
            title: 'Success!',
            text: 'Record updated successfully',
            icon: 'success',
            confirmButtonText: 'Okay',
          }).then((result) => {
            if (result.isConfirmed) {
              $(".swal2-popup").addClass('light-theme');
            }
          });
        }
      );
    });
  });
</script>

<!-- Delete Button -->

<!-- Your modal HTML -->
<div class="modal" id="delete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Administrator Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="Delete" action="delete.php" method="post">
                    <div class="form-group">
                        <label for="input1">Delete Selected BRGY-ADMIN </label>
                        <select name="input1" id="input1" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <?php
                            // Your PHP code for populating the select options
                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT Admin FROM admintbl";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["Admin"].'">'.$row["Admin"].'</option>';
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
                        <button id="Delete" type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<!-- Make sure you have the correct path to the necessary libraries -->


<script>
        $(document).ready(function() {
            $('#Delete').submit(function(e) {
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







<!--Admin end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->






























<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="dashboard.js"></script>

   
</body>
</html>
