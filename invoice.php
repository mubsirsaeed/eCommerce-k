<?php
include 'dashboard_header.php'
?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/samples/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 14:21:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>

</head>

<body>
  <div class="container-scroller" style="width:80%"> 
      <div class="">          
        <div class="content-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card px-2">
                      <div class="card-body">
                        <?php include "config.php";
                          if(isset($_GET['order_id']))
                          {
                            $id= $_GET['order_id'];
                            // $sql = "SELECT * FROM items  INNER JOIN products  ON item_p_id = p_id INNER JOIN orders ON order_id = '$id'";
                            $sql ="SELECT * FROM orders where order_id = '$id'";
                              $show = mysqli_query($conn, $sql);
                              $row = mysqli_fetch_array($show);
                            ?> 
                            <div class="container-fluid">

                            <h3 class="text-right my-5">Invoice&nbsp;&nbsp;<?php echo  '#'.'INV-'.$row['order_id']?></h3>
                            <hr>
                          </div>
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 ps-0">
                              <p class="mt-5 mb-2"><b>Skydash Admin</b></p>
                              <p>104,<br>Minare SK,<br>Canada, K1A 0G9.</p>
                            </div>
                            <div class="col-lg-3 pr-0">
                              <p class="mt-5 mb-2 text-right"><b>Invoice to</b></p>
                              <p class="text-right"><?php echo $row['order_by']?><br><?php echo $row['address']?><br><?php echo $row['city'].$row['postal_code']?></p>
                            </div>
                          </div>
                          <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 ps-0">
                              <p class="mb-0 mt-5"><?php $date =date_create($row['order_date']); echo 'Invoice Date'.' : '.date_format( $date, "d/M/Y")?> </p>
                              <p>Due Date : 25th Jan 2017</p>
                            </div>
                          </div>
                          <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table">
                                  <thead>
                                    <tr class="bg-dark text-white">
                                        <th>#</th>
                                        <th>Description</th>
                                        <th class="text-right">Quantity</th>
                                        <th class="text-right">Unit cost</th>
                                        <th class="text-right">Total</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    $total=0;
                                    $vat=0;
                                    $my = "SELECT * FROM items  WHERE item_order_id = '$id'";
                                    $view = mysqli_query($conn,$my);
                                    while($item = mysqli_fetch_array($view))
                                    {
                                    $pid = $item['item_p_id'];
                                    $sql1 = "SELECT * FROM products  WHERE p_id = '$pid'";
                                    $res = mysqli_query($conn,$sql1);
                                    $product=mysqli_fetch_array($res);
                                    
                                    ?>
                                      <tr class="text-right">
                                        <td class="text-left">1</td>
                                        <td class="text-left"><?php echo $product['p_name']?></td>
                                        <td><?php echo $item['item_qty']?> </td>
                                        <td><?php echo $product['p_amount']?></td>
                                        <td><?php  echo $product['p_amount']*$item['item_qty']; ?></td>
                                        <?php $total += $product['p_amount']*$item['item_qty'] ?>
                                      </tr>
                                    <?php }?>
                                  </tbody>
                                </table>
                              </div>
                          </div>
                          <div class="container-fluid mt-5 w-100">
                            <p class="text-right mb-2">Sub - Total amount: <?php echo 'Rs'." ".$total?></p>
                            <p class="text-right">vat (10%) <?php $vat = $total * 0.1; echo 'Rs'.' '. round($vat) ?> </p>
                            <h4 class="text-right mb-5">Total : <?php echo 'Rs'.' '. round($total + $vat) ?> </h4>
                            <hr>
                          </div>
                          <div class="container-fluid w-100">
                            <a href="#" class="btn btn-primary float-right mt-4 ms-2"><i class="ti-printer me-1"></i>Print</a>
                            <a href="#" class="btn btn-success float-right mt-4"><i class="ti-export me-1"></i>Send Invoice</a>
                          </div>
                        <?php }?>
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
  <script src="../../../../vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../../../js/off-canvas.js"></script>
  <script src="../../../../js/hoverable-collapse.js"></script>
  <script src="../../../../js/template.js"></script>
  <script src="../../../../js/settings.js"></script>
  <script src="../../../../js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <!-- End custom js for this page-->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/samples/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 14:21:56 GMT -->
</html>
