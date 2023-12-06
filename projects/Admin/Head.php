<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Home</title>
  <link rel="shortcut icon" type="image/png" href="../Assets/Templates/Admin/main/img/steller.png" />
  <link rel="stylesheet" href="../Assets/Templates/Admin/css/styles.min.css" />
</head>

<body>
  <?php
include('SessionValidator.php');
?>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a href=".index.html/" class="text-nowrap logo-img">
             <img src="../Assets/Templates/Main/img/steller.png" width="180" alt="" />
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="HomePage.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="District.php" aria-expanded="false">
                <span>
                  <i class="ti ti-building-community"></i>
                </span>
                <span class="hide-menu">District</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="placeDetails.php" aria-expanded="false">
                <span>
                  <i class="ti ti-current-location"></i>
                </span>
                <span class="hide-menu">Place</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Product.php" aria-expanded="false">
                <span>
                  <i class="ti ti-plus"></i>
                </span>
                <span class="hide-menu">Add Product</span>
              </a>
            </li>
            
            <li class="sidebar-item">
              <a class="sidebar-link" href="ProductType.php" aria-expanded="false">
                <span>
                  <i class="ti ti-versions"></i>
                </span>
                <span class="hide-menu">Product Type</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="Viewproduct.php" aria-expanded="false">
                <span>
                  <i class="ti ti-clipboard-list"></i>
                </span>
                <span class="hide-menu">View Product</span>
              </a>
            </li>
           
            <li class="sidebar-item">
              <a class="sidebar-link" href="Bookings.php" aria-expanded="false">
                <span>
                  <i class="ti ti-shopping-cart"></i>
                </span>
                <span class="hide-menu">Bookings</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="complaints.php" aria-expanded="false">
                <span>
                  <i class="ti ti-book-2"></i>
                </span>
                <span class="hide-menu">Complaints</span>
              </a>
            </li>
          </ul>
          
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item">
             
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../Assets/Templates/Admin/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    
                    <a href="../Logout.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">