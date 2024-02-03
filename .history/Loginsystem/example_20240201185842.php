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
        <img src="../Images/Adminshot.svg" class="card-img-top" alt="Card Image">
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
        <img src="../Images/news.svg" class="card-img-top" alt="Card Image">
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
        <img src="../Images/lostandfound.svg" class="card-img-top" alt="Card Image">
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
    


   
   
</body>
</html>
