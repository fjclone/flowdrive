<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Dashboard</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/PPTS.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="dashboard.php" class="logo d-flex align-items-center">
        <img src="assets/img/PPTS.png" alt="">
        <span class="d-none d-lg-block">Flow Drive</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              Project Notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>User Name</h4>
                <p>Project | Task | Avtivity | Sttus</p>
                <p>Date Stamp | Time Stamp</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>User Name</h4>
                <p>Project | Task | Avtivity | Sttus</p>
                <p>Date Stamp | Time Stamp</p>
              </div>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>User Name</h4>
                <p>Project | Task | Avtivity | Sttus</p>
                <p>Date Stamp | Time Stamp</p>
              </div>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>User Name</h4>
                <p>Project | Task | Avtivity | Sttus</p>
                <p>Date Stamp | Time Stamp</p>
              </div>
              </div>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow messages">
            </li>

          </ul><!-- End Messages Dropdown Items -->

        </li><!-- End Messages Nav -->

        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <img src="assets/img/profile-img.jpg" alt="Profile" class="rounded-circle">
            <span class="d-none d-md-block dropdown-toggle ps-2">User Name</span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6>User Name</h6>
              <span>Course | Year & Blk. </span>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="account.php">
                <i class="bi bi-person"></i>
                <span>My Profile</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="faqs.php">
                <i class="bi bi-question-circle"></i>
                <span>Need Help?</span>
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="index.php">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

      <ul class="sidebar-nav" id="sidebar-nav">
  
        <li class="nav-item">
          <a class="nav-link " href="dashboard.php">
            <i class="bi bi-grid"></i>
            <span>Dashboard</span>
          </a>
        </li><!-- End Dashboard Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="project-spaces.php">
            <i class="bi bi-menu-button-wide"></i><span>Project</span>
          </a>
        </li><!-- End Projects Nav -->

        
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="archives.php">
            <i class="bi bi-journal-text"></i><span>Archives</span>
          </a>
        </li><!-- End Archives Nav -->
  
        <li class="nav-heading">Settings</li>
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="account.php">
            <i class="bi bi-person"></i>
            <span>Account</span>
          </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="contact.php">
            <i class="bi bi-envelope"></i>
            <span>Contact</span>
          </a>
        </li><!-- End Contact Page Nav -->
  
        <li class="nav-item">
          <a class="nav-link collapsed" href="index.php">
            <i class="bi bi-box-arrow-in-right"></i>
            <span>Sign Out</span>
          </a>
        </li><!-- End Sign Out Page Nav -->
  
      </ul>
  
    </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

           <!-- Date Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card sales-card">
    <div class="card-body">
      <h5 class="card-title">Date <span>| Today</span></h5>
      <p class="date-day-time">
        <span id="current-date" class="date"></span>
      </p>
    </div>
  </div>
</div>
<!-- End Date Card -->

<!-- Time Card -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card revenue-card">
    <div class="card-body">
      <h5 class="card-title">Time <span>| Today</span></h5>
      <p class="date-day-time">
        <span class="time" id="current-time"></span>
      </p>
    </div>
  </div>
</div>
<!-- End Time Card -->


            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="card-body">
                  <h5 class="card-title">Keep in mind <span</span></h5>

                  <div class="d-flex align-items-center">
                    <p>
                      Progress fuels success.
                    </p>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- List of Projects -->
            <div class="col-12" >
              <div class="card">

                <div class="card-body" style="height: 400px;">
                  <h5 class="card-title">Projects <span> | Spaces</span></h5>

                  <!-- Line Projects -->
                  <div id="reportsChart"></div>
                  It seems that you currently don't have any projects.
                  Would you like to <a href="project-spaces.php">join </a>one?
        
                </div>

              </div>
            </div><!-- End Reports -->

            
          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          <!-- Project Space -->
          <div class="card" style="height: 135px;">
            

            <div class="card-body" >
              <h5 class="card-title">Join <span>| Project Space</span></h5>
              <div class="join-con">
              <input placeholder="Enter code here..." class="input-style" type="text">
              <input type="submit" value="Join" class="join-prog">
            </div>
            </div>
          </div><!-- End Recent Activity -->

        <!-- Progress -->
          <div class="card">
            <div class="card-body pb-0" style="height: 400px;">
                <h5 class="card-title">Progress <span>| Project </span></h5>

                <div class="circ-prog-container">
                    <div class="proj-lists" id="proj-lists">
                        <div class="proj-lists-name" id="proj-lists-name">
                            <span>Select Project</span>
                            <ul class="proj-options">
                                <li data-value="proj-lists-opt-1">Project 1</li>
                                <li data-value="proj-lists-opt-2">Project 2</li>
                            </ul>
                        </div>
                    </div>

                    <div class="circular-progress">
                        <span class="progress-value">0%</span>
                    </div>
                </div>
            </div>
          </div>

            
              
            </div>

          </div>
         

          

        
          

        </div><!-- End Right side columns -->

      </div>

  

    </section>

  </main><!-- End #main -->

  

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>