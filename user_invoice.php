<?php session_start();?>
<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/skydash/template/demo/vertical-default-light/pages/samples/invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 27 Dec 2022 14:21:56 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Skydash Admin</title>
   
  <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">
<!-- ----------------------------------------------------------------- -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>
  <link rel="stylesheet" href="dashboard/vendors/dropzone/dropzone.css">
  <link rel="stylesheet" href="dashboard/vendors/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/bars-1to10.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/bars-horizontal.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/bars-movie.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/bars-pill.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/bars-reversed.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/bars-square.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/bootstrap-stars.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/css-stars.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/examples.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/fontawesome-stars-o.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-bar-rating/fontawesome-stars.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-asColorPicker/css/asColorPicker.min.css">
  <link rel="stylesheet" href="dashboard/vendors/x-editable/bootstrap-editable.css">
  <link rel="stylesheet" href="dashboard/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="dashboard/vendors/dropify/dropify.min.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-file-upload/uploadfile.css">
  <link rel="stylesheet" href="dashboard/vendors/jquery-tags-input/jquery.tagsinput.min.css">
  <link rel="stylesheet" href="dashboard/vendors/tempusdominus-bootstrap-4/tempusdominus-bootstrap-4.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="dashboard/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="dashboard/images/favicon.png" />
  <!-- plugins:css -->
  <link rel="stylesheet" href="dashboard/vendors/feather/feather.css">
  <link rel="stylesheet" href="dashboard/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="dashboard/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="dashboard/vendors/datatables.net-bs4/dataTables.bootstrap4.css">
  <link rel="stylesheet" href="dashboard/vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" type="text/css" href="dashboard/js/select.dataTables.min.css">
  <link rel="stylesheet" href="dashboard/vendors/dropify/dropify.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="dashboard/css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="dashboard/images/favicon.png"/>
</head>

<body>

<div class="wrap" style="height: 35px !important;">
			<div class="container">
				<div class="row" style ="padding-top:5px">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2">
							<a href="#" class="mr-2"><span class="fa fa-phone mr-1"></span> +00 1234 567</a> 
							<a href="#"><span class="fa fa-paper-plane mr-1"></span> youremail@email.com</a>
						</p>
					</div>
					<div class="col-md-6 d-flex justify-content-md-end">
						<div class="social-media mr-4">
							<p class="mb-0 d-flex">
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-facebook"><i class="sr-only">Facebook</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-twitter"><i class="sr-only">Twitter</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-instagram"><i class="sr-only">Instagram</i></span></a>
								<a href="#" class="d-flex align-items-center justify-content-center"><span class="fa fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
							</p>
		        		</div>
						<div class="reg">
							<p class="mb-0">
							<?php if(isset($_SESSION['userid']))
							{
								
							?>
							<a href=""><?php echo "Welcome". " &nbsp;".$_SESSION['name']?> &nbsp;&nbsp;&nbsp;&nbsp; </a> 	
							<a href="logout.php">Log out</a></p>
							<?php 
							}
							else
							{
							?>	
							<a href="signup.php" class="mr-2">Sign Up</a> <a href="login.php">Log In</a></p>
							<?php }?>

						</div>
					</div>
				</div>
			</div>
		</div>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" style="top:5%; position:relative;" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Gift<span>Shop</span></a>
	      <div class="order-lg-last btn-group">
          <a href="#" class="btn-cart dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
		  <a href="cart.php"><span class="flaticon-shopping-bag"></span></a> 	
        	<div class="d-flex justify-content-center align-items-center"><small><?php  if(isset($_SESSION['cart'])){ echo count($_SESSION['cart']); } ?></small></div>
          </a>
		
        </div>

	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
			  <li class="nav-item"><a href="productlist.php" class="nav-link">Products</a></li>

	          <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="product.php" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"></a>
              <div class="dropdown-menu" aria-labelledby="dropdown04">
              	<a class="dropdown-item" href="product.html">Products</a>
                <a class="dropdown-item" href="product-single.html">Single Product</a>
                <a class="dropdown-item" href="cart.html">Cart</a>
                <a class="dropdown-item" href="checkout.html">Checkout</a>
              </div>
            </li> -->
	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
				<?php if(isset($_SESSION['userid']))
					{
						
					?>
					<li class="nav-item">
						<a href="footer.php">		
							<img src="images/avatar.jpg"  alt="Avatar" class="avatar">
						</a>
					</li>
				<?php }?>
			</ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->









  <div class="container-scroller" style="width:80%; margin-left:10%"> 
      <div class="">          
        <div class="content-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <div class="card px-2">
                      <div class="card-body">
                        <?php include "config.php";

                        date_default_timezone_set('Asia/Karachi');
                        $date = date('d-m-y');
                        if(isset($_SESSION['userid'])){
                            // $sql = "SELECT * FROM items  INNER JOIN products  ON item_p_id = p_id INNER JOIN orders ON order_id = '$id'";
                            $sql ="SELECT * FROM orders where order_date = '$date' And email = '$_SESSION[email]'";}
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
                                    $id=$row['order_id'];
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
                            <p class="text-left mb-2">Sub - Total amount: <?php echo 'Rs'." ".$total?></p>
                            <p class="text-left">vat (10%) <?php $vat = $total * 0.1; echo 'Rs'.' '. round($vat) ?> </p>
                            <h4 class="text-left mb-5">Total : <?php echo 'Rs'.' '. round($total + $vat) ?> </h4>
                            <hr>
                          </div>
                          <div class="container-fluid w-100">
                            <a href="#" class="btn btn-primary float-right mt-4 ms-2"><i class="ti-printer me-1"></i>Print</a>
                            <a href="#" class="btn btn-success float-right mt-4"><i class="ti-export me-1"></i>Send Invoice</a>
                          </div>
                        
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
