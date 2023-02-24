<?php include "dashboard_header.php";
include "config.php";
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/forms/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 14:19:05 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
  <!-- plugins:css -->
</head>

<body>
  <div class="container-scroller" style ="width:100%">
    <!-- partial:../../partials/_navbar.html -->
      <!-- partial -->
    <div class="container-fluid page-body-wrapper">

      <!-- partial -->
      <div class="main-panel">
        <div class="" style="margin-left:10%;">
          <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Employment Form</h4>
                  <?php                  
                  $emp_id = $_GET['u_id'];
                  $sql = "SELECT * FROM `users` WHERE u_id = '$emp_id'";
                  
                  $edit = mysqli_query($conn, $sql);
                  
                  $row = mysqli_fetch_array($edit);
                  ?>
                  <form action="" method="post" class="cmxform">
                      <div class="form-group">
                        <label for="firstname">Employee Name</label>
                        <input id="firstname" class="form-control" name="emp_name" type="text" value ="<?php echo $row['u_name']?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="username">Date Of Enrollment</label>
                        <input id="username" class="form-control" name="denroll" type="text" value ="<?php echo $row['emp_date']?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" name="email" type="email" value ="<?php echo $row['u_email']?>" disabled>
                      </div>
                      <div class="form-group">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" name="password" type="password" value ="<?php echo $row['u_password']?>"disabled>
                      </div>
                      <div class="form-group">
                        <label for="confirm_password">Confirm password</label>
                        <input id="confirm_password" class="form-control" name="conpassword" type="password" value ="<?php echo $row['u_conpassword']?>" disabled>
                      </div>
                      <a href="employee_table.php" class="btn btn-primary">Cancel</a>                      
                      <input class="btn btn-primary" type="submit" value="Delete" name="btn">
                    
                    <?php
                      if(isset($_POST['btn']))
                      {
                        $sql="DELETE FROM `user` WHERE u_id = '$emp_id'";
                        $delete = mysqli_query($conn, $sql);
                        if($delete)
                        {
                            echo "<script>window.location.href='employee_table.php'</script>";
                        }
                        else
                        {
                            echo "Opps some ting wrong";
                        }
                      }
                      
                    ?>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ms-1"></i></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="dashboard/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="dashboard/vendors/jquery-validation/jquery.validate.min.js"></script>
  <script src="dashboard/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="dashboard/js/off-canvas.js"></script>
  <script src="dashboard/js/hoverable-collapse.js"></script>
  <script src="dashboard/js/template.js"></script>
  <script src="dashboard/js/settings.js"></script>
  <script src="dashboard/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="dashboard/js/form-validation.js"></script>
  <script src="dashboard/js/bt-maxLength.js"></script>
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/forms/validation.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 14:19:09 GMT -->
</html>
