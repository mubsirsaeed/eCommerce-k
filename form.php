
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 14:19:09 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="dashboard/vendors/feather/feather.css">
  <link rel="stylesheet" href="dashboard/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="dashboard/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="dashboard/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="dashboard/images/favicon.png" />
</head>

<body>
  <div class="container-scroller" style ="width:100%">
  
  <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-start">
        <a class="navbar-brand brand-logo me-5" href="../../index.html"><img src="https://www.bootstrapdash.com/demo/skydash/template/images/logo.svg" class="me-2" alt="logo"/></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.html"><img src="https://www.bootstrapdash.com/demo/skydash/template/images/logo-mini.svg" alt="logo"/></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon">
                <span class="input-group-text" id="search">
                  <i class="icon-search"></i>
                </span>
              </div>
              <input type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
            </div>
          </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
          <li class="nav-item dropdown">
            <a href="Admin.php">
                <h4>Home</h4>
            </a>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
              <i class="icon-bell mx-0"></i>
              <span class="count"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
              <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="ti-info-alt mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Application Error</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Just now
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="ti-settings mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">Settings</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    Private message
                  </p>
                </div>
              </a>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="ti-user mx-0"></i>
                  </div>
                </div>
                <div class="preview-item-content">
                  <h6 class="preview-subject font-weight-normal">New user registration</h6>
                  <p class="font-weight-light small-text mb-0 text-muted">
                    2 days ago
                  </p>
                </div>
              </a>
            </div>
          </li>
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <img src="dashboard/images/faces/face28.jpg" alt="profile"/>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>
          <li class="nav-item nav-settings d-none d-lg-flex">
            <a class="nav-link" href="#">
              <i class="icon-ellipsis"></i>
            </a>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav> 
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">
        <div id="settings-trigger"><i class="ti-settings"></i></div>
        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme"><div class="img-ss rounded-circle bg-light border me-3"></div>Light</div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme"><div class="img-ss rounded-circle bg-dark border me-3"></div>Dark</div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
        <div class="" style="margin-left:22%;">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Employment Form</h4>
                                    <form id="example-form"  method="post">
                                    
                                        <div>
                                        <h3>Profile</h3>
                                        <section>
                                            <h3>Profile</h3>
                                            <div class="form-group">
                                            <label>First name</label>
                                            <input type="text" name="f_name" class="form-control" aria-describedby="emailHelp" placeholder="Enter first name">
                                            </div>
                                            <div class="form-group">
                                            <label>Last name</label>
                                            <input type="text" name ="l_name" class="form-control" placeholder="Last name">
                                            </div>
                                            <div class="form-group">
                                            <label>Date Of Enrollment</label>
                                            <input type="date" name="denroll" class="form-control" placeholder="Date Of Enrollment">
                                            </div>
                                        </section>
                                        <h3>Account</h3>
                                        <section id="account">
                                            <h3>Account</h3>
                                            <div class="form-group">
                                            <label>Email address</label>
                                            <input type="email" name = "email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email">
                                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                            </div>
                                            <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" name="password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                            <label>Confirm Password</label>
                                            <input type="password" name="conpassword" class="form-control" placeholder="Confirm password">
                                            </div>
                                            
                                        </section>
                                        
                                    
                                        </div>
                                        <a href="#account"><input type="button" value="previous" name="btn" class="btn btn-primary" style="margin-left:65%; margin-top:-10%;">
</a>
                                        <input type="button" value="Finished" name="btn" class="btn btn-primary" style="margin-left:85%; margin-top:-10%;">
                                        <?php
                                            if(isset($_POST['btn']))
                                            {
                                                $fname =$_POST['f_name'];
                                                $lname =$_POST['l_name'];
                                                $denroll = $_POST['denroll'];
                                                $email =$_POST['email'];
                                                $password =$_POST['password'];
                                                $conpassword =$_POST['conpassword'];
                                                
                                                $name = $fname ." " .$lname;

                                                $sql = "INSERT INTO `employee`(`emp_name`, `emp_date`, `emp_email`, `emp_password`, `emp_conpassword`, `emp_role`) 
                                                VALUES ('$name','$denroll','$email','$password','$conpassword',2)";
                                                
                                                $emp = mysqli_query($conn, $sql);

                                                if($emp)
                                                {
                                                    header("Location:Admin.php");
                                                }
                                                else{
                                                    echo "Opps Got Some Error";
                                                }
                                            
                                            }
                                            
                                        ?>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include "dashboard_footer.php"?>
        </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="dashboard/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="dashboard/vendors/jquery-steps/jquery.steps.min.js"></script>
  <script src="dashboard/vendors/jquery-validation/jquery.validate.min.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="dashboard/js/off-canvas.js"></script>
  <script src="dashboard/js/hoverable-collapse.js"></script>
  <script src="dashboard/js/template.js"></script>
  <script src="dashboard/js/settings.js"></script>
  <script src="dashboard/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="dashboard/js/wizard.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/forms/wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 14:19:11 GMT -->
</html>
