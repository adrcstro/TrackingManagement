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

    
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


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
                        <a class="nav-link" href="#" onclick="showWastemanagement()">
                            <i class="bi bi-recycle"></i> Waste Management
                        </a>
                    </li>


                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showComplaincenter()">
                        <i class="bi bi-flag"></i> Complaint Center
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showwarning()">
                        <i class="bi bi-exclamation-diamond"></i> Issue a Warning
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

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-file-text"></i> NEWS/EVENTS
                        
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#" onclick="showNews()">Create/Edit</a></li>
                            <li><a class="dropdown-item" href="#" onclick="DisplayNews()">Public News</a></li>
                          
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
                        <a class="nav-link" href="#" onclick="logout()">
                            <i class="bi bi-box-arrow-left"></i> Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <script>
function logout() {
    // Display a SweetAlert confirmation dialog
    Swal.fire({
        title: "Are you sure?",
        text: "You will be logged out!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, log me out!",
    }).then((result) => {
        // If the user confirms the logout, redirect to logout.php
        if (result.isConfirmed) {
            window.location.href = 'login.php';
        }
    });
}
</script>



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
      <div id="shorcard" class="card shadow ">
        <img src="../images/Adminshot.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Administrator</h5>
          <p class="card-text">Manage Administrator</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal"  onclick="showAdmin()">
        <span class="pe-2">
        <i class="bi bi-person"></i>
     </span>
    <span>Create Admin</span>
    </a>
    </div>
        </div>
      </div>
    </div>

 

    <div class="col-md-3 ">
    <div id="shorcard" class="card shadow ">
        <img src="../images/news.svg" class="card-img-top" alt="Card Image">
        <div  class="card-body">
          <h5 class="card-title">News/Events</h5>
          <p class="card-text">Manage Announcement</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal" onclick="showNews()">
        <span class="pe-2">
        <i class="bi bi-file-text"></i>
     </span>
    <span>Publish News</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
    <div id="shorcard" class="card shadow ">
        <img src="../images/lostandfound.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Lost&Found</h5>
          <p class="card-text">Manage Lost&Found</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
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
        <img src="../images/Adminshot.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Administrator</h5>
          <p class="card-text">Edit Administrator</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal"  onclick="showAdmin()">
        <span class="pe-2">
        <i class="bi bi-person"></i>
     </span>
    <span>Edit Admin</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
    <div id="shorcard" class="card shadow ">
        <img src="../images/complain.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Complain Center</h5>
          <p class="card-text">Edit Report Details</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal" onclick="showComplaincenter()">
        <span class="pe-2">
        <i class="bi bi-flag"></i>
     </span>
    <span>Edit Report</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
    <div id="shorcard" class="card shadow ">
        <img src="../images/news.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">News/Events</h5>
          <p class="card-text">Edit Announcement</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal" onclick="showNews()">
        <span class="pe-2">
        <i class="bi bi-file-text"></i>
     </span>
    <span>Edit News</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3">
    <div id="shorcard" class="card shadow ">
        <img src="../images/lostandfound.svg" class="card-img-top" alt="Card Image">
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

    <div class="col-md-3 mt-7">
    <div id="shorcard" class="card shadow ">
        <img src="../images/passenger.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Passenger</h5>
          <p class="card-text">Edit Passenger Details</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal" onclick="showPassengers()">
        <span class="pe-2">
        <i class="bi bi-people"></i>
     </span>
    <span>Edit Passenger</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-7">
    <div id="shorcard" class="card shadow ">
        <img src="../images/drivershort.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Driver</h5>
          <p class="card-text">Edit Driver Details</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal"  onclick="showDriver()">
        <span class="pe-2">
        <i class="bi bi-car-front"></i>
     </span>
    <span>Edit Driver</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-7">
    <div id="shorcard" class="card shadow ">
        <img src="../images/identity.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Track Driver Details</h5>
          <p class="card-text">View Driver Details</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal"  onclick="showDriver()">
        <span class="pe-2">
        <i class="bi bi-person"></i>
     </span>
    <span>Edit Driver</span>
    </a>
    </div>
        </div>
      </div>
    </div>

    <div class="col-md-3 mt-7">
    <div id="shorcard" class="card shadow ">
        <img src="../images/Rate.svg" class="card-img-top" alt="Card Image">
        <div class="card-body">
          <h5 class="card-title">Driver Ratings</h5>
          <p class="card-text">Driver's Performance</p>
          <div class="shortcutbtn mt-2 d-flex justify-content-center align-items-center">  
          <a href="#" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" data-dismiss="modal"  onclick="showDriver()">
        <span class="pe-2">
        <i class="bi bi-car-front"></i>
     </span>
    <span>Drivers Rating</span>
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


<!--wastemanagement  table ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


    <div  id="waste-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Waste Management for Barangay-409</h5>
 </div>
<div class="table-responsive">

<div class="container">
    <div class="row">
      <div class="col-md-6">
        <img src="../images/waste.svg" class="img-fluid mb-5">
        
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

<button target="_blank" id="btnhover" style="border-color: #603ce6;" type="button" class="btn btn-sm m-1">
    Get Started <i class="bi bi-box-arrow-in-up-right"></i>
</button>

<script>
    document.getElementById("btnhover").addEventListener("click", function() {
        window.open("http://barangay409wastemanagement.infinityfreeapp.com/intropage.php", '_blank');
    });
</script>

</div>
</div>
    




<!--calculatortable ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->




    
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
                
                <div class="card-footer border-0 py-3 d-grid gap-1 d-md-flex justify-content-md-center mt-4">
                    <button class="btn btn-primary btn-sm w-100 mb-1" id="Buttoncalculator" onclick="calculateFare()">
                        <i class="fas fa-calculator "></i> Calculate Fare
                    </button>

                    <button id="calculatorbutton" class="btn btn-danger btn-sm w-100 mb-1" onclick="resetInputs()">
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














<div   id="issuewarning" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Issued Warning For Drivers</h5>
                    </div>
    
                    <div class="table-responsive">
                        <table class="table table-hover table-nowrap" >
               

                
<div class="container mt-5 mb-5">
    <div class="row">
    <?php
// Replace these with your actual database connection details

// Create a database connection
$your_db_connection = mysqli_connect($servername, $username, $password, $dbname);

// Check the connection
if (!$your_db_connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Fetch data from the "driverstbl" table
$query = "SELECT id, Username, Age, Password, PermittoOperate, PhoneNumber, HomeAddress, Profile FROM driverstbl";
$result = mysqli_query($your_db_connection, $query);

// Check if the query was successful
if ($result) {
    // Fetch data row by row
    while ($row = mysqli_fetch_assoc($result)) {

        $profile = $row['Profile'];
        $drivername = $row['Username'];
        $ViehicleNumber = $row['Age'];
        $PlateNumber = $row['Password'];
        $image = $row['PermittoOperate'];
        $phone = $row['PhoneNumber'];
        $home = $row['HomeAddress'];

        echo '<div class="col-md-4 mb-5">';
        echo '<div class="carddriver">';
        echo '<div style="position: relative;">'; // Add a relative position for proper stacking context
        echo '<img src="uploads/' . $image . '" class="card-img-top-driver" alt="Card Image">';

        // Displaying the copy icon
        echo '<i class="far fa-copy copy-icon" onclick="copyToClipboard(\'driverName' . $row['id'] . '\')"></i>';

        echo '</div>'; // Close the relative position div
        echo '<div class="card-body" id="card-bodydriver"; >';

        // Displaying the driver information
        echo '<div class="d-flex justify-content-center align-items-center" style="height: 80px;">';
        echo '<img src="uploads/' . $profile . '" class="card-img-top-driver mb-3" alt="Card Image" style="max-width: 80px; max-height: 80px;">';
        echo '</div>';

        echo '<h6 class="card-title-driver">Drivers Name: <span style="font-weight:normal;" id="driverName' . $row['id'] . '">' . $drivername . '</span></h6>';
        echo '<h6 class="card-title-driver">Vehicle Number: <span style="font-weight:normal;">' . $ViehicleNumber . '</span></h6>';
        echo '<h6 class="card-title-driver">Plate Number: <span style="font-weight:normal;">' . $PlateNumber . '</span></h6>';
        echo '<h6 class="card-title-driver">Phone Number: <span style="font-weight:normal;">' . $phone . '</span></h6>';
        echo '<h6 class="card-title-driver">Home Address: <span style="font-weight:normal;">' . $home . '</span></h6>';

        // Fetching and displaying the number of complaints for each driver
        $complaintQuery = "SELECT COUNT(*) AS numComplaints FROM complainttbl WHERE NameofComplainee = '" . mysqli_real_escape_string($your_db_connection, $drivername) . "'";
        $complaintResult = mysqli_query($your_db_connection, $complaintQuery);

        if ($complaintResult) {
            
            $complaintRow = mysqli_fetch_assoc($complaintResult);
            $numComplaints = $complaintRow['numComplaints'];
        
            echo '<div class="text-center">'; // Center the content
        
            echo '<h6 class="card-title-driver">Number of Complaints: <span style="font-weight:normal;">' . $numComplaints . '</span>';
        
            // Check if the number of complaints is greater than or equal to 3
            if ($numComplaints >= 3) {
                // Display Bootstrap Warning Icon with increased size
                echo '<div style="margin-top: 5px;">'; // Add margin for spacing
                echo '<i class="bi bi-exclamation-triangle text-warning" title="Warning: 3 or more complaints" style="font-size: 24px;"></i>'; // Adjust the font-size as needed
                echo '</div>';
            }
        
            echo '</h6>';
            echo '</div>';
        } else {
            echo '<h6 class="card-title-driver">Number of Complaints: <span style="font-weight:normal;">Error fetching data</span></h6>';
        }
        
        echo'              
        <div class="card-footer border-0 py-3 d-grid gap-2 d-md-flex justify-content-md-center">
        <button type="button" class="btn btn-danger btn-sm w-100 mb-2" data-toggle="modal" data-target="#drivercomplainabtpassengerconfirm">
        <i class="bi bi-check-circle"></i> Issue Warning
</button></div>';
        echo '</div>';
        echo '</div>';
        echo '</div>';
        
    }
}

// ... Your existing PHP code ...

?>

        </div>
    </div>





                        </table>
                    </div>


                </div>






























<!--lost&found table ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


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


                    <div class="card-footer border-0 py-3 d-grid gap-2 d-md-flex justify-content-md-center">

                  
                 <button type="button" class="btn btn-success btn-sm w-100 mb-2" data-toggle="modal" data-target="#postitemmodal" >
    <i class="bi bi-plus-circle"></i> Post Item
</button>


<button type="button" class="btn btn-warning btn-sm w-100 mb-2" data-toggle="modal" data-target="#edititem">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm w-100 mb-2" data-toggle="modal"  data-target="#deletlostitem">
    <i class="bi bi-trash"></i> Delete
</button>   

<button type="button" class="btn btn-info btn-sm w-100 mb-2" id="refreshButton13">
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

                    <div class="card-footer border-0 py-3 d-grid gap-2 d-md-flex justify-content-md-center">
       
                 <button type="button" class="btn btn-success btn-sm w-100 mb-2" data-toggle="modal" data-target="#posfoundtitemmodal" >
    <i class="bi bi-plus-circle"></i> Post Found Item
</button>


<button type="button" class="btn btn-warning btn-sm w-100 mb-2" data-toggle="modal" data-target="#editfounditem">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm w-100 mb-2" data-toggle="modal"  data-target="#deletfoundlostitem">
    <i class="bi bi-trash"></i> Delete
</button>   


<button type="button" class="btn btn-info btn-sm w-100 mb-2" id="refreshButton14">
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


<!--lost&found table end ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->








<!--Drivers table ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->


                <div   id="Dashboard-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Drivers Personal Information</h5>
                    </div>
                    <div class="table-responsive">


                        <table class="table table-hover table-nowrap" >
                        <?php
// Replace with your actual database credentials

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
                <th>Profile</th>
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
        <td><img src="uploads/' . $row["Profile"] . '" alt="Item Image" width="60"></td>
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


                    <div class="card-footer border-0 py-3 d-grid gap-2 d-md-flex justify-content-md-center">
                 <button type="button" class="btn btn-warning btn-sm w-100 mb-2" data-toggle="modal" data-target="#Driverupdate">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm w-100 mb-2" data-toggle="modal"  data-target="#Driverdelete">
    <i class="bi bi-trash"></i> Delete
</button>
<button type="button" class="btn btn-primary btn-sm w-100 mb-2" id="trackButton" data-toggle="modal" data-target="#Drivertrack">
    <i class="bi bi-geo"></i> Track
</button>

<button id="open-modal-button"  class="btn btn-secondary btn-sm w-100 mb-2">
    <i class="fas fa-chart-line"></i> Ratings
</button>


<button type="button" class="btn btn-info btn-sm w-100 mb-2" id="refreshButton3">
<i class="bi bi-file-text"></i>  Refresh
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



                <div class="modal fade" id="Driverupdate">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Update Drivers Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <!-- Modal Body -->
            <div class="modal-body">
                <form id="updateForm" action="passengerupdate.php" method="post" enctype="multipart/form-data">
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



<div class="modal fade" id="Driverdelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Administrator Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="driversDelete" action="delete.php" method="post">
                    <div class="form-group">
                        <label for="SelectDriver">Delete Selected Driver Information </label>
                        <select name="SelectDriver" id="SelectDriver" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <!-- PHP code for populating the select options -->
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






<div class="modal fade" id="Drivertrack">
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
            <div class="modal-footer d-flex justify-content-center ">

            <button type="button" class="btn btn-primary btn-sm m-1" id="trackButton" data-dismiss="modal"  data-target="#mapModal" data-toggle="modal">
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


<div class="modal fade" id="mapModal" tabindex="-1" role="dialog" aria-labelledby="mapModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="mapModalLabel">Map</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <iframe id="mapIframe" width="100%" height="500" src=""></iframe>

                    <form method="POST" class="text-center mt-3" id="addressForm" style="margin-top: 20px;">
                        <div class="form-group row justify-content-center">
                           
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Address" required>
                            </div>
                        </div>

                        <div class="form-group row justify-content-center">
                            <div class="col-sm-10">
       <!-- Your existing buttons -->
       <button type="button" class="btn btn-primary" onclick="updateMap()" style="margin-top: 20px; margin-right: 5px;">
    Locate <i class="fas fa-check"></i>
</button>

<button type="button" class="btn btn-secondary ml-2" name="paste_address" onclick="pasteFromClipboard()" style="margin-top: 20px; margin-right: 5px;">
    Paste <i class="fas fa-paste"></i>
</button>

<!-- New reset button with adjusted spacing -->
<button type="button" class="btn btn-danger ml-2" onclick="resetFields()" style="margin-top: 20px; margin-right: 5px;">
    Reset <i class="fas fa-times"></i>
</button>

<script>
    function resetFields() {
        // Reset the value of the input field with id "address"
        document.getElementById('address').value = '';

        // You can add more lines to reset other input fields if needed
    }

    function pasteFromClipboard() {
        // Read text from the clipboard
        navigator.clipboard.readText()
            .then(text => {
                // Set the value of the input field with id "address" to the text from the clipboard
                document.getElementById('address').value = text;
            })
            .catch(err => {
                console.error('Failed to read text from clipboard', err);
            });
    }
</script>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

   
   
    <script>
        function updateMap() {
            var address = document.getElementById('address').value;
            var mapIframe = document.getElementById('mapIframe');
            mapIframe.src = 'https://maps.google.com/maps?q=' + encodeURIComponent(address) + '&output=embed';
        }
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
                    <div class="card-footer border-0 py-3 d-grid gap-2 d-md-flex justify-content-md-center">
<button type="button" class="btn btn-warning btn-sm w-100 mb-2" data-toggle="modal" data-target="#Passengerupdate">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm w-100 mb-2" data-toggle="modal"  data-target="#passengerdelete">
    <i class="bi bi-trash"></i> Delete
</button>

 <button type="button" class="btn btn-info btn-sm w-100 mb-2" id="refreshButton2">
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



        <div class="modal fade" id="Passengerupdate">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Passenger Information</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="updateForm" action="passengerupdate.php"  method="post">
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





<div class="modal fade" id="passengerdelete">
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
                <th>Incident Description</th>
                <th>Name of Complainee</th>
                <th>Complain Status</th>
                <th>View Report</th>
                </thead>
                </tr>';
  
while($row = $result->fetch_assoc()) {
    $viewReportButton = '';
    if ($row["ComplainStatus"] === "" || $row["ComplainStatus"] === "Processing") {
    // Check if ComplainantName exists in the driverstbl table
    $driverCheckSql = "SELECT Username FROM driverstbl WHERE Username = '" . $row["ComplainantName"] . "'";
    $driverCheckResult = $conn->query($driverCheckSql);

    if ($driverCheckResult->num_rows > 0) {
        // ComplainantName found in driverstbl
        $viewReportButton = '<button type="button" class="btn btn-secondary btn-sm w-100 mb-2" data-toggle="modal" data-target="#drivercomplainreport">
                                <i class="bi bi-file-text"></i> View Report
                            </button>';
    } else {
        // ComplainantName not found in driverstbl
        $viewReportButton = '<button type="button" class="btn btn-secondary btn-sm w-100 mb-2" data-toggle="modal" data-target="#ComplaintView">
                                <i class="bi bi-file-text"></i> View Report
                            </button>';
    }

    // Display table row
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
            <td>' . $row["ComplainStatus"] . '</td>
            <td>' . $viewReportButton . '</td>
          </tr>';
}
}
// ... (remaining code)

    echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>            


                    </table>
                    </div>
                    <div class="card-footer border-0 py-3 d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="button" class="btn btn-success  btn-sm w-100 mb-2" data-toggle="modal" data-target="#ProcessComplain" >
                    <i class="bi bi-file-earmark-plus"></i> Process Complain
</button>
                    <button type="button" class="btn btn-primary  btn-sm w-100 mb-2" data-toggle="modal" data-target="#ComplainUpdate">
    <i class="bi bi-arrow-up"></i> Modify
</button>

<button type="button" class="btn btn-danger  btn-sm w-100 mb-2" data-toggle="modal"  data-target="#Complaindelete">
    <i class="bi bi-trash"></i> Remove
</button>

<button type="button" class="btn btn-info  btn-sm w-100 mb-2" id="refreshButton4">
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





                <div class="modal fade" id="ProcessComplain">
    <div id="processreport" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Select Report Details to Process</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="updateForm"  method="post">
                    <div class="form-group">
                        <label for="processreportID">Select Report</label>
                        <select name="processreportID" id="processreportID" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <?php
                      
                      

                      $conn = new mysqli($servername, $username, $password, $dbname);

                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      }

                      $sql = "SELECT ComplaintID,ComplainStatus FROM complainttbl";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            if ($row["ComplainStatus"] === "" || $row["ComplainStatus"] === "Processing") {
                              echo '<option value="'.$row["ComplaintID"].'">'.$row["ComplaintID"].'</option>';
                            }
                          }
                      } else {
                          echo "0 results";
                      }
                      $conn->close();
                      ?>
                        </select>
                    </div>




                    <div class="row g-6 mb-8 mt-2 d-flex justify-content-center">

<div class="col-xl-3 col-sm-6 col-12">
    <div class="card shadow border-2">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Processing</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-transparent text-primary text-lg">
                    <i class="bi bi-person-workspace"></i>
                    </div>
                </div>
            </div>
            <div class="mt-2 mb-0 text-sm text-center">
            <button type="button" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" title="Process Passenger's Complaint about the tricycle service, the local transportation authority " onclick="updateRating('Processing')">
    <i class="bi bi-arrow-up me-1"></i>Select
</button>

            </div>
        </div>
    </div>
</div>

<!-- Repeat the same modification for other two sections -->

<div class="col-xl-3 col-sm-6 col-12">
    <div class="card shadow border-2">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Scheduled</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-transparent text-primary text-lg">
                        <i class="bi bi-calendar-date"></i>
                    </div>
                </div>
            </div>

            <div class="mt-2 mb-0 text-sm text-center">
                <button type="button" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" title="The barangay officials diligently coordinated the schedules of the two parties involved, ensuring a mutually convenient time for them to meet and discuss the  issue." onclick="toggleInputFields('Scheduled')">
                    <i class="bi bi-arrow-up me-1"></i>Select
                </button>
            </div>


        </div>
    </div>
</div>

<div class="col-xl-3 col-sm-6 col-12">
    <div class="card shadow border-2">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Case Close</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-transparent text-primary text-lg">
                    <i class="bi bi-list-check"></i>
                    </div>
                </div>
            </div>
            <div class="mt-2 mb-0 text-sm text-center">
            <button  type="button" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" title="After thorough investigation and mediation, the barangay council officially declared the tricycle complaint case closed, having successfully resolved the concerns raised by the passenger. " onclick="toggleInputFields('Case Close')">
    <i class="bi bi-arrow-up me-1"></i>Select
</button>
            </div>
        </div>
    </div>
</div>


</div>




<div style="width: 80%; margin: auto; display:none;  margin-bottom: 10px;">
    <label for="processStatus"></label>
    <input class="form-control mx-auto" name="processStatus" id="processStatus" style="width: 100%;">
</div>

<script>
    function updateRating(rating) {
        document.getElementById("processStatus").value = rating + "";
        // You can customize this value as per your requirement
    }
</script>


<script>
    // Add attribute to enable native HTML tooltip
    $(function () {
        $('[title]').tooltip({
            trigger: 'hover',
            placement: 'bottom'  // Change 'top' to 'bottom'
        });
    });
</script>

<script>
    function toggleInputFields(rating) {
        var inputFields = document.getElementById("inputFields");
        inputFields.classList.toggle("hidden");
        document.getElementById("processStatus").value = rating + "";
    }
</script>

<div class="row hidden" id="inputFields">
                <div class="col-md-6">
                    <div class="form-group g-col-6">
                        <label for="processdate">Select Date</label>
                        <input id="processdate" name="processdate" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group g-col-6">
                        <label for="processtime">Select Time</label>
                        <input id="processtime" name="processtime" type="time" class="form-control" required>
                    </div>
                </div>

                <div class="form-group g-col-6">
                        <label for="processplace">Select Place of hearing</label>
                        <input id="processplace" name="processplace" type="text" class="form-control" required>
                    </div>




            </div>





                    <div class="modal-footer mt-3  d-flex justify-content-center ">
                       
                        <button id="markstatuscomplain" type="button" class="btn btn-success mt-3">Mark Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
  $(document).ready(function() {
    $("#markstatuscomplain").click(function() {
      var processreportID= $("#processreportID").val();
      var processStatus = $("input[name='processStatus']").val();
      var processdate = $("input[name='processdate']").val();
      var processtime = $("input[name='processtime']").val();
      var processplace = $("input[name='processplace']").val();

      $.post(
        "passengerupdate.php", // Replace with the actual file name for update
        {
            processreportID: processreportID,
            processStatus:processStatus,
            processdate:processdate,
            processtime:processtime,
            processplace: processplace


        },
        function(data, status) {
          if (status === 'success') {
            Swal.fire({
              title: 'Status Displayed Successfully!',
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







                <div class="modal fade" id="ComplainUpdate">
        <div id="Complain-modal-dialog" class="modal-dialog">
            <div  class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update Report</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="updateForm" action="admin.php"  method="post">
                <label for="ComplaintID">Search Complain-ID</label>
                        <select name="ComplaintID" id="ComplaintID" class="form-control" required>
                            <option value="" disabled selected>Select Report ID</option>
                            <?php
                 

                   $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT ComplaintID,ComplainStatus FROM complainttbl";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    if ($row["ComplainStatus"] === "" || $row["ComplainStatus"] === "Processing") {
                                    echo '<option value="'.$row["ComplaintID"].'">'.$row["ComplaintID"].'</option>';
                                }
                            }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </select>
            
                        <div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="TypeofComplaint">Type of Complaint</label>
            <select name="TypeofComplaint" id="TypeofComplaint" class="form-control" required>
                <option value="" selected disabled>Select a Complaint Type</option>
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

        <div class="form-group">
            <label id="DateofReport" for="DateofReport">Date of Report</label>
            <input name="DateofReport" type="date" class="form-control" required>
        </div>

        <div class="form-group">
            <label id="ComplainantName" for="ComplainantName">Complainant Name</label>
            <input type="text" name="ComplainantName" class="form-control" required>
        </div>

       
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for="IncidentDescription">Incident Description</label>
            <input id="IncidentDescription" name="IncidentDescription" type="text" class="form-control" required>
        </div>

        <div class="form-group">
            <label id="ContactNumber" for="ContactNumber">Contact Number</label>
            <input type="text" name="ContactNumber" class="form-control" required>
        </div>

        <div class="form-group">
            <label id="Address" for="Address">Address</label>
            <input type="text" name="Address" class="form-control" required>
        </div>




    </div>
</div>




    <div class="form-group">
    <label for="NameofComplainee">Search Name of Complainee</label>
    <input type="text" name="NameofComplainee" id="NameofComplainee" class="form-control" placeholder="VehicleNumber/PlateNumber" required>
    </div>

    <div id="ComplaineeResults"></div>  



</form>
</div>
<div class="modal-footer d-flex justify-content-center ">
                    <button id="CompplainUpdate" type="button" class="btn btn-success">Save Report</button>
                </div>

            </div>
        </div>
    </div>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("NameofComplainee");
        const searchResults = document.getElementById("ComplaineeResults");

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


<script>
  $(document).ready(function() {
    $("#CompplainUpdate").click(function() {
      var ComplaintID= $("#ComplaintID").val();
      var TypeofComplaint = $('#TypeofComplaint').val();
      var DateofReport = $("input[name='DateofReport']").val();
      var ComplainantName = $("input[name='ComplainantName']").val();
      var ContactNumber = $("input[name='ContactNumber']").val();
      var Address = $("input[name='Address']").val();
      var NameofComplainee = $("input[name='NameofComplainee']").val();
      var IncidentDescription = $("input[name='IncidentDescription']").val();



      $.post(
        "passengerupdate.php", // Replace with the actual file name for update
        {
            ComplaintID: ComplaintID,
            TypeofComplaint: TypeofComplaint,
            DateofReport: DateofReport,
            ComplainantName: ComplainantName,
          ContactNumber: ContactNumber,
          Address: Address,
          NameofComplainee: NameofComplainee,
          IncidentDescription:IncidentDescription
        },
        function(data, status) {
          if (status === 'success') {
            Swal.fire({
              title: 'Report Updated Successfully!',
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



<div class="modal fade" id="Complaindelete">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Report Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="admindeletecomplain" action="delete.php" method="post">
                    <div class="form-group">
                        <label for="Selectreport">Delete Selected Report </label>
                        <select name="Selectreport" id="Selectreport" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <?php
      

             $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT ComplaintID,ComplainStatus  FROM complainttbl";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    if ($row["ComplainStatus"] === "" || $row["ComplainStatus"] === "Processing") {
                                    echo '<option value="'.$row["ComplaintID"].'">'.$row["ComplaintID"].'</option>';
                                }
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
                        <button id="ReportDelete" type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>




<script>
        $(document).ready(function() {
            $('#admindeletecomplain').submit(function(e) {
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






<div class="modal fade" id="ComplaintView">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Passenger to Driver Report Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form id="complaintform" action="generate_pdf.php" method="post" enctype="multipart/form-data">
    <label for="SearchReport">Search Complain-ID</label>
    <input type="text" name="SearchReport" id="SearchReport" class="form-control" placeholder="Type Any of These Details to Know the Driver: Name/VehicleNumber/PlateNumber" required>
    <div id="Complainresult"></div>
    
    <div class="buttonfooter" style="margin-top: 1rem;">  
    <button type="button" class="btn btn-success btn-sm m-1" id="printButton" data-toggle="modal">
        <i class="fas fa-print"></i> Print Report
    </button>

   

</div>

</form>

<script>
    document.getElementById('printButton').addEventListener('click', function() {
        // Open a new tab/window
        var newTab = window.open('', '_blank');

        // Check if the new tab has been successfully opened
        if (newTab) {
            // Clone the form to preserve the original form in the current tab
            var clonedForm = document.getElementById('complaintform').cloneNode(true);

            // Append the cloned form to the new tab's document body
            newTab.document.body.appendChild(clonedForm);

            // Submit the cloned form in the new tab
            clonedForm.submit();
        } else {
            // Display an error message if the new tab couldn't be opened
            alert('Unable to open a new tab. Please enable pop-ups for this site.');
        }
    });
</script>


            </div>
    
        </div>
    </div>
</div>


<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("SearchReport");
        const searchResults = document.getElementById("Complainresult");

        searchInput.addEventListener("input", function() {
            const searchText = searchInput.value.toLowerCase();
            if (searchText.length > 0) {
                fetch(`Complaindetails.php?search=${searchText}`)
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






<div class="modal fade" id="drivercomplainreport">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">View Complain Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form id="complaintformpassreport" action="generatedriver.php" method="post" enctype="multipart/form-data">


            <label for="SearchReportpassenger">Search Complain-ID</label>
    <input type="text" name="SearchReportpassenger" id="SearchReportpassenger" class="form-control" placeholder="Type Any of These Details to Know the Driver: Name/VehicleNumber/PlateNumber" required>


    <div id="Complainresultpassreport"></div>
    
    <div class="buttonfooter" style="margin-top: 1rem;">  
    <button type="button" class="btn btn-success btn-sm m-1" id="printButtonpassreport" data-toggle="modal">
        <i class="fas fa-print"></i> Print Report
    </button>

</div>

</form>

<script>
    document.getElementById('printButtonpassreport').addEventListener('click', function() {
        // Open a new tab/window
        var newTab = window.open('', '_blank');

        // Check if the new tab has been successfully opened
        if (newTab) {
            // Clone the form to preserve the original form in the current tab
            var clonedForm = document.getElementById('complaintformpassreport').cloneNode(true);

            // Append the cloned form to the new tab's document body
            newTab.document.body.appendChild(clonedForm);

            // Submit the cloned form in the new tab
            clonedForm.submit();
        } else {
            // Display an error message if the new tab couldn't be opened
            alert('Unable to open a new tab. Please enable pop-ups for this site.');
        }
    });
</script>
            </div>
    
        </div>
    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const searchInput = document.getElementById("SearchReportpassenger");
        const searchResults = document.getElementById("Complainresultpassreport");

        searchInput.addEventListener("input", function() {
            const searchText = searchInput.value.toLowerCase();
            if (searchText.length > 0) {
                fetch(`Complaindetails.php?search=${searchText}`)
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








<div  id="Scheduled-Complain" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Scheduled Complain</h5>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
                    <?php
// Replace with your actual database credentials


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
            <th>Incident Description</th>
            <th>Name of Complainee</th>
            <th>Complain Status</th>
            <th>Hearing Date</th>
            <th>Hearing Time</th>
            <th>Hearing Place</th>
            <th>Driver Confirmation</th>
            <th>Passenger Confirmation</th>
         
                <th>View Report</th>
                </thead>
                </tr>';
  
while($row = $result->fetch_assoc()) {
    $viewReportButton = '';
    if ($row["ComplainStatus"] === "Scheduled") {

    // Check if ComplainantName exists in the driverstbl table
    $driverCheckSql = "SELECT Username FROM driverstbl WHERE Username = '" . $row["ComplainantName"] . "'";
    $driverCheckResult = $conn->query($driverCheckSql);

    if ($driverCheckResult->num_rows > 0) {
        // ComplainantName found in driverstbl
        $viewReportButton = '<button type="button" class="btn btn-secondary btn-sm w-100 mb-2" data-toggle="modal" data-target="#drivercomplainreport">
                                <i class="bi bi-file-text"></i> View Report
                            </button>';
    } else {
        // ComplainantName not found in driverstbl
        $viewReportButton = '<button type="button" class="btn btn-secondary btn-sm w-100 mb-2" data-toggle="modal" data-target="#ComplaintView">
                                <i class="bi bi-file-text"></i> View Report
                            </button>';
    }


    $borderColor = ''; // Default border color

    // Check conditions for setting border color
    if ($row["PassengerConfirmation"] === $row["DriverConfirmation"] && $row["PassengerConfirmation"] === "Confirmed") {
        $borderColor = '#00B906'; // Set border color to green
    } elseif ($row["PassengerConfirmation"] === $row["DriverConfirmation"] && $row["PassengerConfirmation"] === "Cancel Appointment") {
        $borderColor = '#FE0000'; // Set border color to red
    } elseif ($row["PassengerConfirmation"] === "Confirmed" && $row["DriverConfirmation"] === "Cancel Appointment" || $row["PassengerConfirmation"] === "Cancel Appointment" && $row["DriverConfirmation"] === "Confirmed") {
        $borderColor = '#FE0000'; // Set border color to red
    }


    // Display table row
    echo '<tr style="color: ' . $borderColor . ';">
    <td>' . $row["ComplaintID"] . '</td>
                <td>' . $row["TypeofComplaint"] . '</td>
                <td>' . $row["DateofReport"] . '</td>
                <td>' . $row["ComplainantName"] . '</td>
                <td>' . $row["ContactNumber"] . '</td>
                <td>' . $row["Address"] . '</td>
                <td>' . $row["ProfofIdentity"] . '</td>
                <td>' . $row["IncidentDescription"] . '</td>
                <td>' . $row["NameofComplainee"] . '</td>
                <td>' . $row["ComplainStatus"] . '</td>
                <td>' . $row["hearingdate"] . '</td>
                <td>' . $row["hearingtime"] . '</td>
                <td>' . $row["hearingplace"] . '</td>
                <td>' . $row["PassengerConfirmation"] . '</td>
                <td>' . $row["DriverConfirmation"] . '</td>
            <td>' . $viewReportButton . '</td>
          </tr>';
}
}
// ... (remaining code)

    echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>            


                    </table>
                    </div>
                    <div class="card-footer border-0 py-3 d-grid gap-2 d-md-flex justify-content-md-center">


                    <button type="button" class="btn btn-success btn-sm w-100 mb-2" data-toggle="modal" data-target="#Reprocessyourcomplain" >
                    <i class="bi bi-calendar-date"></i> Re Process Complain
</button>
                 




<button type="button" class="btn btn-info  btn-sm w-100 mb-2" id="refreshButton7">
    <i class="bi bi-arrow-clockwise"></i> Refresh
</button>

<script>
        document.getElementById("refreshButton7").addEventListener("click", function() {
            // Add your refresh functionality here
            // For example, you can reload the current page with the following line
            location.reload();
        });
    </script>
                    </div>
                </div>



                <div class="modal fade" id="Reprocessyourcomplain">
    <div id="processreport" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Re Process Report </h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="ReprocessupdateForm"  method="post">
                    <div class="form-group">
                        <label for="reprocessreportID">Select Report</label>
                        <select name="reprocessreportID" id="reprocessreportID" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <?php
      

       $conn = new mysqli($servername, $username, $password, $dbname);

                      if ($conn->connect_error) {
                          die("Connection failed: " . $conn->connect_error);
                      }

                      $sql = "SELECT ComplaintID,ComplainStatus FROM complainttbl";
                      $result = $conn->query($sql);

                      if ($result->num_rows > 0) {
                          while($row = $result->fetch_assoc()) {
                            if ($row["ComplainStatus"] === "Scheduled") {
                              echo '<option value="'.$row["ComplaintID"].'">'.$row["ComplaintID"].'</option>';
                            }
                          }
                      } else {
                          echo "0 results";
                      }
                      $conn->close();
                      ?>
                        </select>
                    </div>




                    <div class="row g-6 mb-8 mt-2 d-flex justify-content-center">

<div class="col-xl-3 col-sm-6 col-12">
    <div class="card shadow border-2">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Processing</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-transparent text-primary text-lg">
                    <i class="bi bi-person-workspace"></i>
                    </div>
                </div>
            </div>
            <div class="mt-2 mb-0 text-sm text-center">
            <button type="button" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" title="Process Passenger's Complaint about the tricycle service, the local transportation authority " onclick="updatereprocessRating('Processing')">
    <i class="bi bi-arrow-up me-1"></i>Select
</button>

            </div>
        </div>
    </div>
</div>

<!-- Repeat the same modification for other two sections -->

<div class="col-xl-3 col-sm-6 col-12">
    <div class="card shadow border-2">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Scheduled</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-transparent text-primary text-lg">
                        <i class="bi bi-calendar-date"></i>
                    </div>
                </div>
            </div>

            <div class="mt-2 mb-0 text-sm text-center">
                <button type="button" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" title="The barangay officials diligently coordinated the schedules of the two parties involved, ensuring a mutually convenient time for them to meet and discuss the  issue." onclick="reprocessschedule('Scheduled')">
                    <i class="bi bi-arrow-up me-1"></i>Select
                </button>
            </div>


        </div>
    </div>
</div>

<div class="col-xl-3 col-sm-6 col-12">
    <div class="card shadow border-2">
        <div class="card-body">
            <div class="row">
                <div class="col">
                    <span class="h6 font-semibold text-muted text-sm d-block mb-2">Case Close</span>
                </div>
                <div class="col-auto">
                    <div class="icon icon-shape bg-transparent text-primary text-lg">
                    <i class="bi bi-list-check"></i>
                    </div>
                </div>
            </div>
            <div class="mt-2 mb-0 text-sm text-center">
            <button  type="button" class="btn d-inline-flex btn-sm btn-neutral border-base mx-1" title="After thorough investigation and mediation, the barangay council officially declared the tricycle complaint case closed, having successfully resolved the concerns raised by the passenger. " onclick="reprocessschedule('Case Close')">
    <i class="bi bi-arrow-up me-1"></i>Select
</button>
            </div>
        </div>
    </div>
</div>


</div>




<div style="width: 80%; margin: auto; display:none;  margin-bottom: 10px;">
    <label for="reprocessStatus"></label>
    <input class="form-control mx-auto" name="reprocessStatus" id="reprocessStatus" style="width: 100%;">
</div>

<script>
    function updatereprocessRating(rating) {
        document.getElementById("reprocessStatus").value = rating + "";
        // You can customize this value as per your requirement
    }
</script>


<script>
    // Add attribute to enable native HTML tooltip
    $(function () {
        $('[title]').tooltip({
            trigger: 'hover',
            placement: 'bottom'  // Change 'top' to 'bottom'
        });
    });
</script>

<script>
    function reprocessschedule(rating) {
        var reprocessiputfields = document.getElementById("reprocessiputfields");
        reprocessiputfields.classList.toggle("hidden");
        document.getElementById("reprocessStatus").value = rating + "";
    }
</script>

<div class="row hidden" id="reprocessiputfields">
                <div class="col-md-6">
                    <div class="form-group g-col-6">
                        <label for="reprocessdate">Select Date</label>
                        <input id="reprocessdate" name="reprocessdate" type="date" class="form-control" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group g-col-6">
                        <label for="reprocesstime">Select Time</label>
                        <input id="reprocesstime" name="reprocesstime" type="time" class="form-control" required>
                    </div>
                </div>

                <div class="form-group g-col-6">
                        <label for="reprocessplace">Select Place of hearing</label>
                        <input id="reprocessplace" name="reprocessplace" type="text" class="form-control" required>
                    </div>




            </div>





                    <div class="modal-footer mt-3  d-flex justify-content-center ">
                       
                        <button id="reprocess" type="button" class="btn btn-success mt-3">Mark Status</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script>
  $(document).ready(function() {
    $("#reprocess").click(function() {
      var reprocessreportID= $("#reprocessreportID").val();
      var reprocessStatus = $("input[name='reprocessStatus']").val();
      var reprocessdate = $("input[name='reprocessdate']").val();
      var reprocesstime = $("input[name='reprocesstime']").val();
      var reprocessplace = $("input[name='reprocessplace']").val();

      $.post(
        "passengerupdate.php", // Replace with the actual file name for update
        {
            reprocessreportID: reprocessreportID,
            reprocessStatus:reprocessStatus,
            reprocessdate:reprocessdate,
            reprocesstime:reprocesstime,
            reprocessplace: reprocessplace


        },
        function(data, status) {
          if (status === 'success') {
            Swal.fire({
              title: 'Status Displayed Successfully!',
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
















                <div  id="Setteld-complain" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">List of Setteld Complain</h5>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-hover table-nowrap">
    
                    <?php
// Replace with your actual database credentials


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
            <th>Incident Description</th>
            <th>Name of Complainee</th>
            <th>Complain Status</th>
            <th>Date Setteld</th>
            <th>Time Setteld</th>
            <th>Hearing Place</th>
                <th>View Report</th>
                </thead>
                </tr>';
  
while($row = $result->fetch_assoc()) {
    $viewReportButton = '';
    if ($row["ComplainStatus"] === "Case Close") {
    // Check if ComplainantName exists in the driverstbl table
    $driverCheckSql = "SELECT Username FROM driverstbl WHERE Username = '" . $row["ComplainantName"] . "'";
    $driverCheckResult = $conn->query($driverCheckSql);

    if ($driverCheckResult->num_rows > 0) {
        // ComplainantName found in driverstbl
        $viewReportButton = '<button type="button" class="btn btn-secondary btn-sm w-100 mb-2" data-toggle="modal" data-target="#drivercomplainreport">
                                <i class="bi bi-file-text"></i> View Report
                            </button>';
    } else {
        // ComplainantName not found in driverstbl
        $viewReportButton = '<button type="button" class="btn btn-secondary btn-sm w-100 mb-2" data-toggle="modal" data-target="#ComplaintView">
                                <i class="bi bi-file-text"></i> View Report
                            </button>';
    }

    // Display table row
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
    <td>' . $row["ComplainStatus"] . '</td>
    <td>' . $row["hearingdate"] . '</td>
    <td>' . $row["hearingtime"] . '</td>
    <td>' . $row["hearingplace"] . '</td>
            <td>' . $viewReportButton . '</td>
          </tr>';
}
}
// ... (remaining code)

    echo '</table>';
} else {
    echo "0 results";
}
$conn->close();
?>     

                    </table>
                    </div>
                  
                </div>





<!--Complaintable-end----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->





<!--news and events start----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



<div  id="createnews" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Public News Announcements</h5>
                    </div>
                    <div class="table-responsive">
                    <?php


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the admin table
$sql = "SELECT * FROM newsandevents";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo '<table class="table table-hover table-nowrap">
            <tr>
            <thead class="thead-light">
                 <th>News-ID</th>
                <th>Header</th>
                <th>Time Posted</th>
                <th>Date</th>
                <th>Body</th>
                <th>Image</th>
                </thead>
                </tr>';
              
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<tr>   
        <td>' . $row["NewsID"] . '</td>
        <td>' . $row["Header"] . '</td>
        <td>' . $row["Time"] . '</td>
        <td>' . $row["Date"] . '</td>
        <td>' . $row["Body"] . '</td>
        <td>' . $row["Image"] . '</td>
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
                    <div class="card-footer border-0 py-3 d-grid gap-2 d-md-flex justify-content-md-center">
                    <button type="button" class="btn btn-success  btn-sm w-100 mb-2" data-toggle="modal" data-target="#CreateNEws">
    <i class="bi bi-plus"></i> Create
</button>

<button type="button" class="btn btn-warning  btn-sm w-100 mb-2" data-toggle="modal"  data-target="#editnews">
    <i class="bi bi-pencil"></i> Edit
</button>

<button type="button" class="btn btn-danger  btn-sm w-100 mb-2" data-toggle="modal" data-target="#deletenews">
    <i class="bi bi-trash"></i> Delete
</button>

<button type="button" class="btn btn-info  btn-sm w-100 mb-2" id="refreshButton8">
    <i class="bi bi-arrow-clockwise"></i> Refresh
</button>

<script>
        document.getElementById("refreshButton8").addEventListener("click", function() {
            location.reload();
        });
    </script>
    </div>
    </div>




    <div class="modal fade" id="CreateNEws">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Create News</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="clear" action="process.php"  method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label id="newsneader" for="newsneader">Header</label>
        <input name="newsneader" type="text" class="form-control" required>
    </div>

    <div class="form-group">
        <label id="newstime" for="newstime">Time</label>
        <input type="time" name="newstime" class="form-control" required>
    </div> 

    <div class="form-group">
        <label id="newsdate" for="newsdate">Date</label>
        <input type="date" name="newsdate" class="form-control" required>
    </div>
    <div class="form-group">
    <label id="bodycontent" for="bodycontent">News Content</label>
    <textarea name="bodycontent" class="form-control" required></textarea>
</div>
    <div class="form-group">
        <label id="newsimage" for="newsimage">News Visual</label>
        <input name="newsimage" type="file" class="form-control" required>
    </div>
    <div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">
    <i class="fas fa-times"></i> Close
</button>

<button id="SaveNews" type="submit" class="btn btn-primary">
    <i class="fas fa-save"></i> Post
</button>
                </div>
</form>
</div>


            </div>
        </div>
    </div>



    <div class="modal fade" id="editnews">
        <div  class="modal-dialog">
            <div  class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Update News/Events</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="updateForm" action="admin.php"  method="post">
                <label for="NewsID">Search News-ID</label>
                        <select name="NewsID" id="NewsID" class="form-control" required>
                            <option value="" disabled selected>Select News ID</option>
                            <?php
                 

                  $conn = new mysqli($servername, $username, $password, $dbname);

                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT NewsID  FROM newsandevents";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["NewsID"].'">'.$row["NewsID"].'</option>';
                                }
                            } else {
                                echo "0 results";
                            }
                            $conn->close();
                            ?>
                        </select>
            
   
    <div class="form-group">
        <label id="HeaderofNews" for="HeaderofNews">Header</label>
        <input name="HeaderofNews" type="Text" class="form-control" required>
    </div>

    <div class="form-group">
        <label id="NewsTime" for="NewsTime">Time</label>
        <input type="Time" name="NewsTime" class="form-control" required>
    </div>



    <div class="form-group">
        <label id="DateofNews" for="DateofNews">Date</label>
        <input type="date" name="DateofNews" class="form-control" required>
    </div>
    <div class="form-group">
        <label id="Bodytext" for="Bodytext">Body</label>
        <input type="text" name="Bodytext" class="form-control" required>
    </div>
    
</form>
</div>
<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="NewsUpdate" type="button" class="btn btn-primary">Save News</button>
                </div>

            </div>
        </div>
    </div>


    <script>
  $(document).ready(function() {
    $("#NewsUpdate").click(function() {
      var NewsID= $("#NewsID").val();
      var HeaderofNews = $("input[name='HeaderofNews']").val();
      var NewsTime = $("input[name='NewsTime']").val();
      var DateofNews = $("input[name='DateofNews']").val();
      var Bodytext = $("input[name='Bodytext']").val();
     
    
      $.post(
        "passengerupdate.php", // Replace with the actual file name for update
        {
            NewsID:  NewsID,
            HeaderofNews:HeaderofNews,
            NewsTime:NewsTime,
            DateofNews: DateofNews,
            Bodytext: Bodytext
        
         
        },
        function(data, status) {
          if (status === 'success') {
            Swal.fire({
              title: 'News Updated Successfully!',
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


<div class="modal fade" id="deletenews">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Delete Report Details</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="deletenewsandevents" action="delete.php" method="post">
                    <div class="form-group">
                        <label for="SelectNewsID">Delete Selected Report </label>
                        <select name="SelectNewsID" id="SelectNewsID" class="form-control" required>
                            <option value="" disabled selected>Select an option</option>
                            <?php
     

     $conn = new mysqli($servername, $username, $password, $dbname);
                            if ($conn->connect_error) {
                                die("Connection failed: " . $conn->connect_error);
                            }

                            $sql = "SELECT NewsID  FROM newsandevents";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    echo '<option value="'.$row["NewsID"].'">'.$row["NewsID"].'</option>';
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
                        <button id="newsDelete" type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



<script>
        $(document).ready(function() {
            $('#deletenewsandevents').submit(function(e) {
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











<!--news and events-end----------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->



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


        // Create a database connection
      
  $your_db_connection = mysqli_connect($servername, $username, $password, $dbname);

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
                echo '<div class="card h-100 border rounded shadow-sm">';
                echo '<img src="uploads/' . $image . '" class="card-img-top img-fluid" alt="Card Image">';
                echo '<div class="card-body mt-0">';
                echo '<div class="d-flex justify-content-between">';
                echo '<p class="card-text"><small class="text-muted">' . date('F j, Y', strtotime($date)) . ' | ' . date('g:i A', strtotime($time)) . '</small></p>';
                echo '</div>';
                echo '<h5 class="card-title">' . $header . '</h5>';
                $trimmed_body = strlen($body) > 50 ? substr($body, 0, 50) . '...' : $body;
                echo '<p class="card-text">' . $trimmed_body . ' <a href="#" class="read-more-btn" data-toggle="modal" data-target="#readMoreModal' . $row['NewsID'] . '">Read More  <i class="bi bi-arrow-right-square"></i></a></p>';


                echo '</div>';
                echo '</div>';
                echo '</div>';
                
                // Modal for full text
                echo '<div class="modal fade newscard" id="readMoreModal' . $row['NewsID'] . '" tabindex="-1" role="dialog" aria-labelledby="readMoreModalLabel' . $row['NewsID'] . '" aria-hidden="true">';
                echo '<div id="adminnews" class="modal-dialog" role="document">';
                echo '<div class="modal-content">';
                echo '<div style="background-color: #603ce3" class="modal-header">';
                echo '<h5 style="color: #fff;" class="modal-title">' . $header . '</h5>';
                echo '<button style="background-color: #603ce3; color: #fff; border:none;" type="button" class="close" data-dismiss="modal" aria-label="Close">';
                echo '<span aria-hidden="true">&times;</span>';
                echo '</button>';
                echo '</div>';
                echo '<div class="modal-body d-flex">';
                // Add styling to the modal image on the right
                echo '<div class="modal-image-container" style="flex: 1;">';
                echo '<img src="uploads/' . $image . '" class="card-img-top" alt="Card Image" style="width: 100%; height: 300px; object-fit: cover;">';
                echo '</div>';
                // Text content on the left
                echo '<div style="flex: 2; padding-left: 20px;">';
                echo '<p class="card-text mt-4"><small class="text-muted">' . date('F j, Y', strtotime($date)) . ' | ' . date('g:i A', strtotime($time)) . '</small></p>';
                echo '<p style="text-align: justify;">' . $body . '</p>';
                echo '</div>';
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
                    <div class="card-footer border-0 py-3 d-grid gap-2 d-md-flex justify-content-md-center">
                  
                    <button type="button" class="btn btn-success btn-sm w-100 mb-2" data-toggle="modal" data-target="#myModal" >
    <i class="bi bi-plus-circle"></i> Create
</button>


<button type="button" class="btn btn-warning btn-sm w-100 mb-2" data-toggle="modal" data-target="#update">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm w-100 mb-2" data-toggle="modal"  data-target="#delete">
    <i class="bi bi-trash"></i> Delete
</button>

 <button type="button" class="btn btn-info btn-sm w-100 mb-2" id="refreshButton">
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
  

 
<!-- Your existing modal HTML -->

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

<!-- Rest of your existing HTML -->





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
                <form action="admin.php" method="post">
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
                <button id="Register" type="button" class="btn btn-primary">Save</button>
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
            $.post("process.php",
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



<div class="modal fade" id="update">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Update Administrator Information</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form id="updateForm" action="admincrud.php" method="post"">
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

    
    <script>
        $(document).ready(function () {
            $("#updateForm").submit(function (e) {
                e.preventDefault(); // prevent default form submission

                var input1 = $("#input1").val();
                var input2 = $("#input2").val();
                var datePicker = $("#datePicker").val();
                var input3 = $("#input3").val();

                // Simple validation check
                if (input1 && input2 && datePicker && input3) {
                    // Make the AJAX request
                    $.ajax({
                        type: "POST",
                        url: "admincrud.php",
                        data: {
                            input1: input1,
                            input2: input2,
                            datePicker: datePicker,
                            input3: input3
                        },
                        success: function (data) {
                            if (data.indexOf("Success") !== -1) {
                                swal({
                                    title: "Success",
                                    text: data,
                                    icon: "success"
                                }).then(function () {
                                    $('#update').modal('hide'); // Hide the modal
                                    // You can add additional actions here if needed
                                });
                            } else {
                                swal({
                                    title: "Error",
                                    text: data,
                                    icon: "error"
                                });
                            }
                        }
                    });
                } else {
                    // Display an error message using SweetAlert
                    swal({
                        title: "Error",
                        text: "Please fill in all fields",
                        icon: "error"
                    });
                }
            });
        });
    </script>



<!-- Assuming you have included the necessary SweetAlert and jQuery libraries -->


<!-- Delete Button -->

<!-- Your modal HTML -->
<div class="modal fade" id="delete">
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



<div class="modal" id="modal-container">
    <div id="modal-content">
      <span id="close-button">&times;</span>
      <div class="container">
        <div class="row  mt-4">
            <div class="col-md-6">
                <h1 class="text-center mt-4" style="font-size: 20px;" >Drivers Personal Rating Scale</h1>

                <form method="post" action="" class="mt-3">
    <div class="form-group">
        <label for="search">Search by Driver Name:</label>
        <div class="input-group">
            <input type="text" name="search" id="search" class="form-control" placeholder="Enter driver name">
            <div class="input-group-append">
            <button type="submit" class="btn btn-primary">
  <i class="bi bi-search"></i> Search
</button>

            </div>
        </div>
    </div>
</form>

<div class="form-group mt-2">
    <label for="maxLeft">Max for Left Axis:</label>
    <div class="input-group">
        <input type="number" name="maxLeft" id="maxLeft" value="5" class="form-control" placeholder="Enter max value">
        <div class="input-group-append">
           <button onclick="updateChart()" class="btn btn-success">
  <i class="bi bi-bar-chart"></i> Update Chart
</button>
        </div>
    </div>
</div>



            </div>

            <div class="col-md-6">
                <div style="width: 100%;"  class="mt-4">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>


<script>
        // Add your custom scripts here
        function updateChart() {
            // Your chart update logic
        }
    </script>
<?php
// Connect to your database


$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to fetch data from the rating table based on the search term
function fetchData($conn, $searchTerm) {
    $sql = "SELECT DriverName, Rate FROM rating WHERE DriverName LIKE '%$searchTerm%'";
    $result = $conn->query($sql);

    $data = array();
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
    }

    return $data;
}

// Process search form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $searchTerm = $_POST["search"];
    $data = fetchData($conn, $searchTerm);
} else {
    // If no search term, initialize with an empty array
    $data = array();
}

// Close the database connection
$conn->close();
?>

<script>
// Prepare data for Chart.js
var data = <?php echo json_encode($data); ?>;

// Create an object to count the occurrences of each rating for each driverName
var ratingCounts = {};

data.forEach(function(item) {
    var driverName = item.DriverName;
    var rate = item.Rate;

    // Initialize the count for the driverName if not already present
    if (!ratingCounts[driverName]) {
        ratingCounts[driverName] = [0, 0, 0, 0, 0]; // Index 0 represents rating 1, index 4 represents rating 5
    }

    // Increment the count for the corresponding rating
    ratingCounts[driverName][rate - 1]++;
});

// Prepare labels and data for the chart
var labels = Object.keys(ratingCounts);
var datasets = [];

// Iterate through each driverName and create a dataset for the bar graph
labels.forEach(function(driverName) {
    var counts = ratingCounts[driverName];

    datasets.push({
        label: driverName,
        data: counts,
        backgroundColor: getRandomColor(), // Function to get a random color for each driverName
        borderColor: 'rgba(75, 192, 192, 1)',
        borderWidth: 1
    });
});

// Default max value for left axis
var maxLeft = 5;

// Declare myChart outside the function
var myChart;

// Draw the initial bar chart
drawChart();

// Function to draw or update the bar chart
function drawChart() {
    var ctx = document.getElementById('myChart').getContext('2d');
    myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Very Poor', 'Poor', 'Fair', 'Good', 'Excellent'], // Ratings 1 to 5
            datasets: datasets
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                    stepSize: 1,
                    max: maxLeft
                }
            }
        }
    });
}

// Function to generate a random color
function getRandomColor() {
    var letters = '0123456789ABCDEF';
    var color = '#';
    for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
    }
    return color;
}

// Function to update the chart based on user input
function updateChart() {
    // Get value from input field
    maxLeft = parseInt(document.getElementById('maxLeft').value);

    // Destroy the existing chart and redraw with updated options
    myChart.destroy();
    drawChart();
}
</script>









<div class="container mt-5 mb-5">
    <div class="row">
    <?php
        // Replace these with your actual database connection details


        // Create a database connection
  $your_db_connection = mysqli_connect($servername, $username, $password, $dbname);

        // Check the connection
        if (!$your_db_connection) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Fetch data from the "newsandevents" table
        $query = "SELECT id, Username, Age, Password, PermittoOperate,PhoneNumber,HomeAddress FROM driverstbl";
        $result = mysqli_query($your_db_connection, $query);

        // Check if the query was successful
        if ($result) {
            // Fetch data row by row
            while ($row = mysqli_fetch_assoc($result)) {
                $drivername = $row['Username'];
                $ViehicleNumber = $row['Age'];
                $PlateNumber = $row['Password'];
                $image = $row['PermittoOperate'];
                $phone = $row['PhoneNumber'];
                $home = $row['HomeAddress'];

                echo '<div class="col-md-4 mb-5">';
                echo '<div class="carddriver">';
                echo '<div style="position: relative;">'; // Add a relative position for proper stacking context
                echo '<img src="uploads/' . $image . '" class="card-img-top-driver" alt="Card Image">';

              // Displaying the copy icon
echo '<i class="far fa-copy copy-icon" onclick="copyToClipboard(\'driverName' . $row['id'] . '\')"></i>';
echo '<i class="fas fa-map-marker-alt location-icon" onclick="copyToClipboard(\'driverName' . $row['id'] . '\')"></i>';



                echo '</div>'; // Close the relative position div
                echo '<div class="card-body" id="card-bodydriver"; >';
                
                // Displaying the driver information
                echo '<h6 class="card-title-driver">Drivers Name: <span style="font-weight:normal;" id="driverName' . $row['id'] . '">' . $drivername . '</span></h6>';
                echo '<h6 class="card-title-driver">Vehicle Number: <span style="font-weight:normal;">' . $ViehicleNumber . '</span></h6>';
                echo '<h6 class="card-title-driver">Plate Number: <span style="font-weight:normal;">' . $PlateNumber . '</span></h6>';
                echo '<h6 class="card-title-driver">Phone Number: <span style="font-weight:normal;">' . $phone . '</span></h6>';
                echo '<h6 class="card-title-driver">Home Address: <span style="font-weight:normal;">' . $home . '</span></h6>';

                echo '</div>';
                echo '</div>';
                echo '</div>';
            }
        }
            // ... Your existing PHP code ...
            ?>
        </div>
    </div>

    <!-- Add the copyToClipboard function -->
    <script>
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.innerText;
            
            // Create a temporary textarea to copy the text
            const textarea = document.createElement('textarea');
            textarea.value = text;
            document.body.appendChild(textarea);
            textarea.select();
            document.execCommand('copy');
            document.body.removeChild(textarea);

            // Use SweetAlert for a more visually appealing notification
            Swal.fire({
                icon: 'success',
                title: 'Copied!',
                text: 'The name has been copied to the clipboard.',
                timer: 1500, // Automatically close after 1.5 seconds
                showConfirmButton: false
            });
        }
    </script>
    </div>
  </div>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>



<script src="dashboard.js"></script>
  <script type="text/javascript">
   $(function(){
    $('#SaveNews').click(function(e){

        var valid = this.form.checkValidity();

        if(valid){

            var formData = new FormData();
            formData.append('newsneader', $('#newsneader').val());
            formData.append('newstime', $('#newstime').val());
            formData.append('newsdate', $('#newsdate').val());
            formData.append('bodycontent', $('#bodycontent').val());
            formData.append('newsimage', $('#newsimage')[0].files[0]);
           

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







<script>
    document.addEventListener('DOMContentLoaded', function () {
      const openModalButton = document.getElementById('open-modal-button');
      const modalContainer = document.getElementById('modal-container');
      const closeButton = document.getElementById('close-button');
      const reloadButton = document.getElementById('reload-button');

      // Check if the modal should be open from a previous state
      const isModalOpen = localStorage.getItem('isModalOpen') === 'true';
      if (isModalOpen) {
        modalContainer.style.display = 'flex';
      }

      openModalButton.addEventListener('click', function () {
        modalContainer.style.display = 'flex';
        localStorage.setItem('isModalOpen', 'true');
      });

      closeButton.addEventListener('click', function () {
        modalContainer.style.display = 'none';
        localStorage.removeItem('isModalOpen');
      });

      reloadButton.addEventListener('click', function () {
        // Add your logic for reloading here
        location.reload();
      });

      // Handle refresh or close of the browser
      window.addEventListener('beforeunload', function (event) {
        if (modalContainer.style.display === 'flex') {
          localStorage.setItem('isModalOpen', 'true');
        } else {
          localStorage.removeItem('isModalOpen');
        }
      });
    });
  </script>
   
   
   
</body>
</html>
