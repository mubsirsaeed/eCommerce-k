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
                            <th>Order By</th>
                            <th>Order Date</th>
                            <th>Address</th>
                            <th>Postal Code</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Payment</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php include "config.php";
                          
                        //   $sql = "SELECT * FROM products INNER JOIN items ON p_id = item_p_id INNER JOIN orders ON order_id = item_order_id";

                            $sql = "SELECT * FROM `orders`";
                            $show = mysqli_query($conn, $sql);

                          while ($row = mysqli_fetch_array($show) )
                          {
                            
                          ?>
                          
                        <tr>
                            <td><?php echo $row['order_by']?></td>
                            <td ><?php echo $row['order_date']?></td>
                            <td><?php echo $row['address'].$row['city']?></td>
                            <td><?php echo $row['postal_code']?></td>
                            <td><?php echo $row['phone_no']?></td>
                            <td><?php echo $row['email']?></td>
                            <td><?php echo $row['pay_method']?></td>
                            <td>
                              <a href="invoice.php?order_id=<?php echo $row['order_id']?>" class="btn btn-outline-primary" style="width:100%;">
                              View
                              </a>
                              
                              <br><br>
                              <a href="deleteproduct.php?order_id=<?php echo $row['order_id']?>" class="btn btn-outline-primary" style="width:100%;">
                              Done
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
