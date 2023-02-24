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
  
  <div class="container-scroller">
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
                            <th>Product Title</th>
                            <th>Description</th>
                            <th>Product Code</th>
                            <th>Product#</th>
                            <th>Amount</th>
                            <th>Quantity</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php include "config.php";
                          
                          $sql = "SELECT * FROM `products`";

                          $show = mysqli_query($conn, $sql);

                          while ($row = mysqli_fetch_array($show) )
                          {
                            
                          ?>
                          
                        <tr >
                            <td><?php echo $row['p_name']?></td>
                            <td ><?php echo $row['p_discription']?></td>
                            <td><?php echo $row['p_code']?></td>
                            <td><?php echo $row['p_number']?></td>
                            <td><?php echo $row['p_amount']?></td>
                            <td><?php echo $row['p_qty']?></td>
                            <td>
                              
                              <img src='data:image/jpg;base64,<?php echo base64_encode($row['p_img'])?>' alt=""> 
                              
                            </td>
                            <td>
                              <a href="editproduct.php?p_id=<?php echo $row['p_id']?>" class="btn btn-outline-primary">
                              Update
                              </a>
                              
                              <br><br>
                              <a href="deleteproduct.php?p_id=<?php echo $row['p_id']?>" class="btn btn-outline-primary" style="width:100%;">
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
