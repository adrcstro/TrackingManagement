<?php
require_once('Config.php');

?>





<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Brangay 643,Zone64 Santa-Mesa Manila</title>
  <link rel="shortcut icon" type="x-icon" href="../images/logo.png">
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
            <a class="navbar-brand py-lg-2 mb-lg-5 px-lg-6 me-0" href="#">
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
        </li>      <li class="nav-item">
                        <a class="nav-link" href="#" onclick="showDashboard()">
                            <i class="bi bi-car-front"></i> Drivers
                            
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-geo-alt-fill"></i> Tracking Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="bi bi-recycle"></i> Waste Management
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
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
                <!-- Card stats -->
                <div class="row g-6 mb-6">
                    <div class="col-xl-3 col-sm-6 col-12">
                        <div class="card shadow border-0">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col">
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">TODA Drivers</span>
                                        <span class="h3 font-bold mb-0">$11590.90</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg ">
                                            <i class="bi bi-car-front"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>37%
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
                                        <span class="h3 font-bold mb-0">320</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg ">
                                            <i class="bi bi-people"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>80%
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
                                        <span class="h3 font-bold mb-0">4.100</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-primary text-white text-lg">
                                            <i class="bi bi-person-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-danger text-danger me-2">
                                        <i class="bi bi-arrow-down me-1"></i>-5%
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
                                        <span class="h6 font-semibold text-muted text-sm d-block mb-2">Work load</span>
                                        <span class="h3 font-bold mb-0">88%</span>
                                    </div>
                                    <div class="col-auto">
                                        <div class="icon icon-shape bg-warning text-white text-lg ">
                                            <i class="bi bi-minecart-loaded"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-2 mb-0 text-sm">
                                    <span class="badge badge-pill bg-soft-success text-success me-2">
                                        <i class="bi bi-arrow-up me-1"></i>10%
                                    </span>
                                    <span class="text-nowrap text-xs text-muted">Since last month</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



                <div   id="Dashboard-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Drivers Personal Information</h5>
                    </div>
                    <div class="table-responsive">


                        <table class="table table-hover table-nowrap" >
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Offer</th>
                                    <th scope="col">Meeting</th>
                                

                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Jason Martinez
                                        </a>
                                    </td>
                                    <td>
                                        Feb 15, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://bytewebster.com/img/logo.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                            Bytewebster
                                        </a>
                                    </td>
                                    <td>
                                        $3.500
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>Scheduled
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Ashley Williams
                                        </a>
                                    </td>
                                    <td>
                                        Apr 15, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-2.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Netguru
                                        </a>
                                    </td>
                                    <td>
                                        $2.750
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-warning"></i>Postponed
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Melissa Chen
                                        </a>
                                    </td>
                                    <td>
                                        Mar 20, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-3.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Figma
                                        </a>
                                    </td>
                                    <td>
                                        $4.200
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>Scheduled
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Emily Davis
                                        </a>
                                    </td>
                                    <td>
                                        Feb 15, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-4.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Mailchimp
                                        </a>
                                    </td>
                                    <td>
                                        $3.500
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-dark"></i>Not discussed
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Thomas Nguyen
                                        </a>
                                    </td>
                                    <td>
                                        Apr 10, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Webpixels
                                        </a>
                                    </td>
                                    <td>
                                        $1.500
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-danger"></i>Canceled
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-info text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>





                <div  id="Passengers-table" style="display:none;" class="card shadow border-0 mb-7">
                    <div class="card-header">
                        <h5 class="mb-0">Passengers Personal Information</h5>
                    </div>
                    <div class="table-responsive">


                        <table class="table table-hover table-nowrap" >
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Offer</th>
                                    <th scope="col">Meeting</th>
                                    

                                    
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1502823403499-6ccfcf4fb453?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Jason Martinez
                                        </a>
                                    </td>
                                    <td>
                                        Feb 15, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://bytewebster.com/img/logo.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="https://www.bytewebster.com/">
                                            Bytewebster
                                        </a>
                                    </td>
                                    <td>
                                        $3.500
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>Scheduled
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1610271340738-726e199f0258?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Ashley Williams
                                        </a>
                                    </td>
                                    <td>
                                        Apr 15, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-2.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Netguru
                                        </a>
                                    </td>
                                    <td>
                                        $2.750
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-warning"></i>Postponed
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1610878722345-79c5eaf6a48c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Melissa Chen
                                        </a>
                                    </td>
                                    <td>
                                        Mar 20, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-3.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Figma
                                        </a>
                                    </td>
                                    <td>
                                        $4.200
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-success"></i>Scheduled
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1612422656768-d5e4ec31fac0?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Emily Davis
                                        </a>
                                    </td>
                                    <td>
                                        Feb 15, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-4.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Mailchimp
                                        </a>
                                    </td>
                                    <td>
                                        $3.500
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-dark"></i>Not discussed
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img alt="..." src="https://images.unsplash.com/photo-1608976328267-e673d3ec06ce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=3&w=256&h=256&q=80" class="avatar avatar-sm rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Andre
                                        </a>
                                    </td>
                                    <td>
                                        Apr 10, 2023
                                    </td>
                                    <td>
                                        <img alt="..." src="https://preview.webpixels.io/web/img/other/logos/logo-5.png" class="avatar avatar-xs rounded-circle me-2">
                                        <a class="text-heading font-semibold" href="#">
                                            Webpixels
                                        </a>
                                    </td>
                                    <td>
                                        $1.500
                                    </td>
                                    <td>
                                        <span class="badge badge-lg badge-dot">
                                            <i class="bg-danger"></i>Canceled
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <a href="#" class="btn btn-sm btn-neutral">View</a>
                                        <button type="button" onclick="showSweetAlert()" class="btn btn-sm btn-square btn-neutral text-danger-hover">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                               
                               
                               
                                
                               
                               
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer border-0 py-5">
                        <span class="text-muted text-sm">Showing 10 items out of 250 results found</span>
                        <nav aria-label="Page navigation example">
                          <ul class="pagination">
                            <li class="page-item"><a class="page-link disabled" href="#">Previous</a></li>
                            <li class="page-item"><a class="page-link bg-info text-white" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">Next</a></li>
                          </ul>
                        </nav>
                    </div>
                </div>







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

<button type="button" class="btn btn-info btn-sm m-1">
    <i class="bi bi-eye"></i> View
</button>

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
      // Close the insertion statement
      $stmt->close();
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
                <form id="updateForm" action="admin.php" method="POST">
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



<script>
$(document).ready(function() {
    $('#Delete').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        $.ajax({
            type: 'POST',
            url: 'delete.php', // Replace with the path to your delete_admin.php file
            data: formData,
            success: function(response) {
                if (response === 'success') {
                    // Show success message
                    showAlert('success', 'Record Deleted', 'The selected admin has been deleted.');
                } else {
                    // Show error message
                    showAlert('error', 'Error', 'Error deleting record. Please try again.');
                }
            },
            error: function() {
                showAlert('error', 'Error', 'Something went wrong. Please try again.');
            }
        });
    });

    function showAlert(icon, title, text) {
        swal({
            title: title,
            text: text,
            icon: icon,
            button: 'OK',
        });
    }
});
</script>









































<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script src="dashboard.js"></script>

   
</body>
</html>
