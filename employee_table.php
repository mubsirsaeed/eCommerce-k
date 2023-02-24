<?php include "dashboard_header.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title> 
</head>
<body>
  
  <div class="container-scroller" style="width:100%;">
    <div class="container-fluid page-body-wrapper">
        <div class="content-wrapper">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Data table</h4>
              <div class="row">
                <div class="col-12">
                  <div class="table-responsive">
                    <table id="order-listing" class="table">
                      <thead>
                        <tr>
                          <center>
                            <th>Employee Name</th>
                            <th>Email Address</th>
                            <th>Password</th>
                            <th>Action</th>
                          </center>
                        </tr>
                      </thead>
                      <tbody>
                        <?php include "config.php";
                          
                          $sql = "SELECT * FROM `users` where u_role = 2";

                          $show = mysqli_query($conn, $sql);

                          while ($row = mysqli_fetch_array($show) )
                          { 
                            
                          ?>
                          
                        <tr>
                            <td><?php echo $row['u_name']?></td>
                            <td><?php echo $row['u_email']?></td>
                            <td><?php echo $row['u_password']?></td>
                            <td>
                              <a href="empedit_form.php?u_id=<?php echo $row['u_id']?>" class="btn btn-outline-primary">
                              Update
                              </a>
                              <a href="emp_delete.php?u_id=<?php echo $row['u_id']?>" class="btn btn-outline-primary" >
                              Delete
                              </a>
                              
                            </td>
                        </tr>
                        <?php }?>
                      </tbody>
                      
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
            
      <!-- main-panel ends -->
    </div>
    
    <?php include "dashboard_footer.php"?>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src=" dashboard/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src=" dashboard/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src=" dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src=" dashboard/js/off-canvas.js"></script>
  <script src=" dashboard/js/hoverable-collapse.js"></script>
  <script src=" dashboard/js/template.js"></script>
  <script src=" dashboard/js/settings.js"></script>
  <script src=" dashboard/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src=" dashboard/js/data-table.js"></script>
  <!-- End custom js for this page-->
</body>
</html>
