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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
                        <a class="nav-link" href="#" onclick="showFileComplaint()">
                            <i class="bi bi-flag"></i> Complaint
                        </a>
                    </li>

                 

                    <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showpersonalrating()">
                        <i class="bi bi-bar-chart"></i> Personal Rating
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




     <!-- calculator sheets ------------------------------------------------------------------------------------------------------------------------------------------------>

    



     <!-- calculator sheets end ------------------------------------------------------------------------------------------------------------------------------------------------>



     <!-- FileComplaint sheets end ------------------------------------------------------------------------------------------------------------------------------------------------>



     <div class="calculator-table card shadow border-0 mb-7" style="display:none;" id="File-table">
    <div class="card-header thead-light text-center">
        <h5 class="mb-0" id="calculator" >Costumer Complain About your Service</h5>
    </div>

    <div class="table-responsive">


<table class="table table-hover table-nowrap" >
<?php
// Replace with your actual database credentials

// Assume you have the username available in the $usernameParam variable
// Replace this with the actual method of obtaining the username parameter
$usernameParam = $_GET['Username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the complainttbl table with a WHERE clause
$sql = "SELECT * FROM complainttbl WHERE NameofComplainee = ?";
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

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row["ComplainStatus"] === "" || $row["ComplainStatus"] === "Processing") {
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
}
    echo '</table>';
} else {
    echo "You dont have any Complaints Keep it Up";
}

$stmt->close();
$conn->close();
?>

</table>
</div>



</div>





<div class="calculator-table card shadow border-0 mb-7" style="display:none;" id="showtablehearing">
    <div class="card-header thead-light text-center">
        <h5 class="mb-0" id="calculator" >Scheduled Hearing Please Attended to the Given Time and Date </h5>
    </div>

    <div class="table-responsive">


<table class="table table-hover table-nowrap" >
<?php
// Replace with your actual database credentials

// Assume you have the username available in the $usernameParam variable
// Replace this with the actual method of obtaining the username parameter
$usernameParam = $_GET['Username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the complainttbl table with a WHERE clause
$sql = "SELECT * FROM complainttbl WHERE NameofComplainee = ?";
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

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row["ComplainStatus"] === "Scheduled") {
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
}
    echo '</table>';
} else {
    echo "You dont have any Complaints Keep it Up";
}

$stmt->close();
$conn->close();
?>

</table>
</div>
<div class="card-footer border-0 py-3 d-flex justify-content-center flex-wrap">
                    <button type="button" class="btn btn-success btn-sm m-1" data-toggle="modal" data-target="#Confirmandcancel">
                    <i class="bi bi-check-circle"></i> Confirm to Attend
</button>

<button type="button" class="btn btn-info btn-sm m-1" id="refreshButton9">
    <i class="bi bi-arrow-clockwise"></i> Refresh Table
</button>

<script>
        document.getElementById("refreshButton9").addEventListener("click", function() {
            // Add your refresh functionality here
            // For example, you can reload the current page with the following line
            location.reload();
        });
    </script>
                    </div>


</div>



<div class="modal fade" id="Confirmandcancel">
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




<div style="width: 80%; margin: auto; display:block;  margin-bottom: 10px;">
    <label for="processStatus"></label>
    <input class="form-control mx-auto" name="processStatus" id="processStatus" style="width: 100%;">
</div>

<script>
    function updateRating(rating) {
        document.getElementById("processStatus").value = rating + "";
        // You can customize this value as per your requirement
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















































<div class="calculator-table card shadow border-0 mb-7" style="display:none;" id="caseclosedrivercomplain">
    <div class="card-header thead-light text-center">
        <h5 class="mb-0" id="calculator" >List of Case Setteld </h5>
    </div>

    <div class="table-responsive">


<table class="table table-hover table-nowrap" >
<?php
// Replace with your actual database credentials

// Assume you have the username available in the $usernameParam variable
// Replace this with the actual method of obtaining the username parameter
$usernameParam = $_GET['Username'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch data from the complainttbl table with a WHERE clause
$sql = "SELECT * FROM complainttbl WHERE NameofComplainee = ?";
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

    // output data of each row
    while ($row = $result->fetch_assoc()) {
        if ($row["ComplainStatus"] === "Case Close") {
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
}
    echo '</table>';
} else {
    echo "You dont have any Complaints Keep it Up";
}

$stmt->close();
$conn->close();
?>

</table>
</div>



</div>

















     <!-- ratings scale  ------------------------------------------------------------------------------------------------------------------------------------------------>



<div   id="PErsonalrating" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">My Ratings</h5>
                    </div>
                    <div class="table-responsive">
                    <?php
// Assuming you have $usernameParam available (replace it with your actual parameter)
if (isset($_GET['Username'])) {
    $usernameParam = $_GET['Username'];

    // Database connection parameters

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Fetch DriverName from the driverstbl table based on the provided username
    $sqlDriverName = "SELECT Username FROM driverstbl WHERE Username = ?";
    $stmtDriverName = $conn->prepare($sqlDriverName);

    if (!$stmtDriverName) {
        die("Error in statement preparation: " . $conn->error);
    }

    $stmtDriverName->bind_param("s", $usernameParam);
    $stmtDriverName->execute();
    $resultDriverName = $stmtDriverName->get_result();

    // Check if there is data
    if ($resultDriverName->num_rows > 0) {
        // Fetch DriverName
        $rowDriverName = $resultDriverName->fetch_assoc();
        $driverName = $rowDriverName['Username'];

        // Fetch data from the rating table for a specific driver
        $sqlRating = "SELECT DriverName, Rate FROM rating WHERE DriverName = ?";
        $stmtRating = $conn->prepare($sqlRating);

        if (!$stmtRating) {
            die("Error in statement preparation: " . $conn->error);
        }

        $stmtRating->bind_param("s", $driverName);
        $stmtRating->execute();
        $resultRating = $stmtRating->get_result();

        // Check if there is data
        if ($resultRating->num_rows > 0) {
            // Process data for the bar graph
            $numericRatings = [];
            while ($row = $resultRating->fetch_assoc()) {
                $customer = $row['DriverName'];
                $textRating = $row['Rate'];

                // Convert text rating to numeric
                switch ($textRating) {
                    case '1':
                        $numericRating = 1;
                        break;
                    case '2':
                        $numericRating = 2;
                        break;
                    case '3':
                        $numericRating = 3;
                        break;
                    case '4':
                        $numericRating = 4;
                        break;
                    case '5':
                        $numericRating = 5;
                        break;
                    default:
                        $numericRating = 0; // Default to 0 if unknown rating
                }

                $numericRatings[] = [$customer, $numericRating];
            }
        } else {
            echo "No rate found for the specified driver in the rating table.";
        }

        $stmtRating->close();
        
    } else {
        echo "No data found for the specified username in the driverstbl table.";
    }

    $stmtDriverName->close();
    $conn->close();
} else {
    echo "Username not provided in the URL.";
}
?>

<!-- Create a canvas for the bar graph -->
<canvas id="barChart" width="400" height="200"></canvas>

<script>
// Use PHP data in JavaScript
var ratingsData = <?php echo json_encode($numericRatings); ?>;

// Extract labels and data for Chart.js
var labels = ratingsData.map(function(item) {
    return item[0];
});

var data = ratingsData.map(function(item) {
    return item[1];
});

// Create a bar graph
var ctx = document.getElementById('barChart').getContext('2d');
var barChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Personal Rating Scale',
            data: data,
            backgroundColor: '#603ce6', // Set the bar color
            borderColor: '#603ce6',
            borderWidth: 1,
        }]
    },
    options: {
        scales: {
            x: {
                ticks: {
                    beginAtZero: true
                },
                title: {
                    display: true,
                    text: 'Note: if Your Rating is drop down it means you have commited severat violations '
                }
            },
            y: {
                min: 0,
                max: 5,
                ticks: { stepSize: 1 },
                title: {
                    display: true,
                    text: 'Performance Rating '
                }
            }
        }
    }
});
</script>

                 
                      
                     

                    </div>


              
                </div>



     <!-- ratings scale  ------------------------------------------------------------------------------------------------------------------------------------------------>






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
                        <h5 class="mb-0">Driver Personal Information</h5>
 </div>
<div class="table-responsive">
<table class="table table-hover table-nowrap" >

<?php

if (isset($_GET['Username'])) {
    $usernameParam = $_GET['Username'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM driverstbl WHERE Username = ?";
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
            echo '<img src="uploads/' . htmlspecialchars($row["PermittoOperate"]) . '" style="border-radius: 5px;" class="img-fluid mb-3 mt-10">';
            echo "</div>";
            echo '<div class="col-md-6">';
            echo "<div class='container mt-2'>";
            echo "<form>";
            
            // Additional fields based on your database structure
            echo "<div class='row text-center'>";
            echo "<div class='col-md-12 mb-4'>"; // Adjust the margin-bottom as needed
            echo "<div class='image-box border rounded p-2' style='display: inline-block; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);'>";
            echo '<img src="uploads/' . htmlspecialchars($row["Profile"]) . '" class="img-fluid mb-2 mt-2" style="width: 100px; height: 100px;">'; // Adjust the width and height as needed
            echo "</div>";
            echo "</div>";
            echo "</div>";
            
            
            
           
    


            echo "<div class='row'>";
            echo "<div class='col-md-6 mb-3'>";
            echo "<label for='Name'>Driver Name:</label>";
            echo "<input type='text' id='Name' value='" . htmlspecialchars($row["Username"]) . "' class='form-control' readonly>";
            echo "</div>";
            echo "<div class='col-md-6 mb-3'>";
            echo "<label for='age'>Vehicle Unit#</label>";
            echo "<input type='text' id='age' value='" . htmlspecialchars($row["Age"]) . "' class='form-control' readonly>";
            echo "</div>";
            echo "</div>";
            
            echo "<div class='row'>";
            echo "<div class='col-md-6 mb-3'>";
            echo "<label for='password'>Plate Number:</label>";
            echo "<input type='text' id='password' value='" . htmlspecialchars($row["Password"]) . "' class='form-control' readonly>";
            echo "</div>";
            
            echo "<div class='col-md-6 mb-3'>";
            echo "<label for='phone'>Phone Number:</label>";
            echo "<input type='text' id='phone' value='" . htmlspecialchars($row["PhoneNumber"]) . "' class='form-control' readonly>";
            echo "</div>";
            echo "</div>";

            echo '<div class="input-group mb-3 mt-2">';  
            echo '<input type="text" class="form-control custom-input" placeholder="Recipient\'s username" aria-label="Recipient\'s username" aria-describedby="basic-addon2" value="Drivers License:' . $row["DriversLicense"] . '" readonly>';
            echo '<div class="input-group-append">';
            echo '<a href="view-details.php?type=license&id=' . urlencode($row["DriversLicense"]) . '" target="_blank" class="btn btn-outline-secondary transparent-btn" type="button">View  <i class="fas fa-eye"></i></a>';
            echo '</div>';
            echo '</div>';
            
            echo '<div class="input-group mb-3 mt-2">';
            echo '<input type="text" class="form-control custom-input" placeholder="Recipient\'s username" aria-label="Recipient\'s username" aria-describedby="basic-addon2" value="Vihicle Registration:' . $row["VehicleRegistration"] . '" readonly>';
            echo '<div class="input-group-append">';
            echo '<a href="view-details.php?type=registration&id=' . urlencode($row["VehicleRegistration"]) . '" target="_blank" class="btn btn-outline-secondary transparent-btn" type="button">View  <i class="fas fa-eye"></i></a>';
            echo '</div>';
            echo '</div>';
            



            
            echo "<div class='row'>";
            echo "<div class='col-md-12 mb-3'>";
            echo "<label for='homeAddress'>Home Address:</label>";
            echo "<input type='text' id='homeAddress' value='" . htmlspecialchars($row["HomeAddress"]) . "' class='form-control' readonly>";
            echo "</div>";
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



         
</table>
                    </div>
                    
                    <div class="card-footer border-0 py-3 d-flex justify-content-center flex-wrap">

                    <button type="button" class="btn btn-success btn-sm m-1" data-toggle="modal" data-target="#addprofile" >
    <i class="bi bi-plus-circle"></i> Add Profile
</button>



<button type="button" class="btn btn-warning btn-sm m-1" data-toggle="modal" data-target="#Driverupdate">
    <i class="bi bi-pencil"></i> Update
</button>

<button type="button" class="btn btn-danger btn-sm m-1" data-toggle="modal"  data-target="#Driverdelete">
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




                <div class="modal" id="addprofile">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title">Add Profile</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal Body -->
                <div class="modal-body">
                <form id="updateForm" action="driverdash.php"  method="post">
                
                <label style="display: none;" for="driverID">Confirm your Driver ID</label>
                <select  style="display: none;" name="driverID" id="driverID" class="form-control" required>
    <?php

    if (isset($_GET['Username'])) {
        $usernameParam = $_GET['Username'];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM driverstbl WHERE Username = ?";
        $stmt = $conn->prepare($sql);

        if (!$stmt) {
            die("Error in statement preparation: " . $conn->error);
        }

        $stmt->bind_param("s", $usernameParam);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<option value="' . htmlspecialchars($row["id"]) . '">' . htmlspecialchars($row["id"]) . '</option>';
            }
        } else {
            echo "<option value='' disabled selected>Select ID</option>";
            echo "<option value=''>No results found</option>";
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "<option value='' disabled selected>Select ID</option>";
        echo "<option value=''>Username not provided in the URL</option>";
    }

    ?>
</select>

                <div id="Filefield" class="input-wrap">
  <label for="profile" class="custom-label">Select Image</label>
  <input required class="form-control" type="file" id="profile" name="profile" accept=".jpg, .png .jpeg .pdf, .doc, .docx" title="Please ensure the image is clear and legible" >
</div>

              

</form>
</div>
<div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button id="addpic" type="button" class="btn btn-primary">Save</button>
                </div>

            </div>
        </div>
    </div>


    <script>
$(document).ready(function(){
    $("#addpic").click(function(){
        // Get selected driver ID and profile image
        var driverID = $("#driverID").val();
        var profileImage = $("#profile")[0].files[0];

        // Check if both driverID and profileImage are selected
        if(driverID && profileImage){
            // Create FormData object to send file data
            var formData = new FormData();
            formData.append('driverID', driverID);
            formData.append('profile', profileImage);

            // Make AJAX request
            $.ajax({
                url: 'updateProfile.php', // Update with the actual server-side file handling script
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response){
                    // Handle success, if needed
                    console.log(response);
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Profile updated successfully!',
                    }).then(() => {
                        // You can close the modal or perform any other action
                        $("#addprofile").modal('hide');
                    });
                },
                error: function(error){
                    // Handle errors, if needed
                    console.log(error);
                    Swal.fire({
                        icon: 'error',
                        title: 'Error',
                        text: 'Error updating profile. Please try again.',
                    });
                }
            });
        } else {
            Swal.fire({
                icon: 'warning',
                title: 'Warning',
                text: 'Please select both ID and profile image.',
            });
        }
    });
});

</script>






<div class="modal fade" id="Driverupdate">
    <div class="modal-dialog" id="driverupdatemodal">
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
    if (isset($_GET['Username'])) {
        $requestedUsername = $_GET['Username'];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Username FROM driverstbl WHERE Username = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $requestedUsername);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Display the fetched usernames
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="'.$row["Username"].'">'.$row["Username"].'</option>';
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



<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label id="DriverAge" for="DriverAge">Unit#</label>
                <input type="text" name="DriverAge" class="form-control" required>
            </div>
            <div class="form-group">
                <label id="DriverPlanteNumber" for="DriverPlanteNumber">Plate Number</label>
                <input name="DriverPlanteNumber" type="text" class="form-control" required>
            </div>
            <div class="form-group">
                <label id="DriversPhoneNumber" for="DriversPhoneNumber">Phone Number</label>
                <input type="text" name="DriversPhoneNumber" class="form-control" required>
            </div>
            <div class="form-group" style="width: 100%;">
    <label id="DriversHomeAddress" for="DriversHomeAddress">Home Address</label>
    <input type="text" name="DriversHomeAddress" class="form-control" required>
</div>

        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label id="DriverVehicleRegistration" for="DriverVehicleRegistrations">Vehicle Registration</label>
                <input type="file" name="DriverVehicleRegistration" accept=".jpg, .png, .jpeg, .pdf, .doc, .docx" class="form-control" required>
            </div>
            <div class="form-group">
                <label id="DriversPermittoOperate" for="DriversPermittoOperate">Vehicle Picture</label>
                <input type="file" name="DriversPermittoOperate" accept=".jpg, .png, .jpeg, .pdf, .doc, .docx" class="form-control" required>
            </div>
            <div class="form-group">
                <label id="DriversDriversLicense" for="DriversDriversLicense">Drivers License</label>
                <input type="file" name="DriversDriversLicense" accept=".jpg, .png, .jpeg, .pdf, .doc, .docx" class="form-control" required>
            </div>
           
       

        </div>
    </div>
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
    if (isset($_GET['Username'])) {
        $requestedUsername = $_GET['Username'];

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT Username FROM driverstbl WHERE Username = ?";
        $stmt = $conn->prepare($sql);

        if ($stmt) {
            $stmt->bind_param("s", $requestedUsername);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0) {
                // Display the fetched usernames
                while ($row = $result->fetch_assoc()) {
                    echo '<option value="'.$row["Username"].'">'.$row["Username"].'</option>';
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

                    // Check if deletion was successful
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




<!--Admin end------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="driver.js"></script>

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
            formData.append('Fileinput5', $('#Fileinput5').val());
            formData.append('Incident-Descriptionr', $('#Incident-Description').val());

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
