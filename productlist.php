<?php
include "config.php";
include "header.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   
  </head>
  <body>
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg2.png');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="index.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
            <h2 class="mb-0 bread">Products</h2>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<div class="row mb-4">
							<div class="col-md-12  align-items-center">
								<h4 class="product-select">Select Types of Products</h4>
								<form  method="post">
                  <input type="search" name="search" placeholder="Search">
                  <button class="btn btn-primary" name ="btn">Search</button>
                  <a href="productlist.php" class="btn btn-primary">Cancel</a>
                </form>
							</div>
						</div>
            <?php
            if(isset($_POST['btn']))
            {
              
              // $cat = $_POST['cat'];
              $search =$_POST['search'];

            ?>
            <div class="row">
						<?php 
                          
              $sql = "SELECT * FROM `products` where p_name LIKE '%$search%'";

              $show = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_array($show) )
              {  
            ?>
							<div class="col-md-4 d-flex">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style = "background-image: url('data:image/jpg;base64,<?php echo base64_encode($row['p_img'])?>')">
                
                  <div>
										<div class="desc">
                      <form action="" method="post">
                        <p class="meta-prod d-flex">
                          <a href="addcart.php?p_id=<?php echo $row['p_id']?>" class="d-flex align-items-center justify-content-center" name="btn"><span class="flaticon-shopping-bag"></span></a>
                          <!-- <a href="#" class="d-flex align-items-center justify-content-center" name="btn"><span class="flaticon-shopping-bag"></span></a> -->
                          <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                          <a href="product-single.php?p_id=<?php echo $row['p_id']?>" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p>
                      </form>
										</div>
                  </div>
								</div>
									<div class="text text-center">
										<span class="sale">Sale</span>
										<span class="category">Brandy</span>
										<h2><?php echo $row['p_name']?></h2>
										<p class="mb-0"><span class="price "><?php echo $row['p_amount']."Rs"?></span> </p>
									</div>
								</div>
							</div>
							<?php }?>
					</div>  
          <?php
            }
          else
          {
          ?>
					<div class="row">
						<?php 
                          
              $sql = "SELECT * FROM `products`";

              $show = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_array($show) )
              {  
            ?>
							<div class="col-md-4 d-flex">
								<div class="product ftco-animate">
									<div class="img d-flex align-items-center justify-content-center" style = "background-image: url('data:image/jpg;base64,<?php echo base64_encode($row['p_img'])?>')">
                
                  <div>
										<div class="desc">
                      <form action="" method="post">
                        <p class="meta-prod d-flex">
                          <a href="addcart.php?p_id=<?php echo $row['p_id']?>" class="d-flex align-items-center justify-content-center" name="btn"><span class="flaticon-shopping-bag"></span></a>
                          <!-- <a href="#" class="d-flex align-items-center justify-content-center" name="btn"><span class="flaticon-shopping-bag"></span></a> -->
                          <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
                          <a href="product-single.php?p_id=<?php echo $row['p_id']?>" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
                        </p>
                      </form>
										</div>
                  </div>
								</div>
									<div class="text text-center">
										<span class="sale">Sale</span>
										<span class="category">Brandy</span>
										<h2><?php echo $row['p_name']?></h2>
										<p class="mb-0"><span class="price "><?php echo $row['p_amount']."Rs"?></span> </p>
									</div>
								</div>
							</div>
							<?php }?>
					</div>
          <?php }?>
						<div class="row mt-5">
		          <div class="col text-center">
		            <div class="block-27">
		              <ul>
		                <li><a href="#">&lt;</a></li>
		                <li class="active"><span>1</span></li>
		                <li><a href="#">2</a></li>
		                <li><a href="#">3</a></li>
		                <li><a href="#">4</a></li>
		                <li><a href="#">5</a></li>
		                <li><a href="#">&gt;</a></li>
		              </ul>
		            </div>
		          </div>
		        </div>
					</div>

					<div class="col-md-3">
						<div class="sidebar-box ftco-animate">
              <div class="categories">
                <h3>Product Types</h3>
                <?php
                $sql = "SELECT * FROM `category`";
                $show = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($show)): ?>
                <ul class="p-0">
                	<li><a href="pro.php?c_id=<?php echo $row['c_id']?>"><?php echo $row['c_name']?> <span class="fa fa-chevron-right"></span></a></li>
                </ul>
                <?php endwhile ?>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>

    <footer class="ftco-footer">
      <div class="container">
        <div class="row mb-5">
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2 logo"><a href="#">Liquor <span>Store</span></a></h2>
              <p>Far far away, behind the word mountains, far from the countries.</p>
              <ul class="ftco-footer-social list-unstyled mt-2">
                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">My Accounts</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Account</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Register</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Log In</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>My Order</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="about.php"><span class="fa fa-chevron-right mr-2"></span>About us</a></li>
                <li><a href="contact.php"><span class="fa fa-chevron-right mr-2"></span>Contact us</a></li>                
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Quick Link</h2>
              <ul class="list-unstyled">
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>New User</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Help Center</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Report Spam</a></li>
                <li><a href="#"><span class="fa fa-chevron-right mr-2"></span>Faq's</a></li>
              </ul>
            </div>
          </div>
          <div class="col-sm-12 col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon fa fa-map marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon fa fa-paper-plane pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container-fluid px-0 py-5 bg-black">
      	<div class="container">
      		<div class="row">
	          <div class="col-md-12">
		
	            <p class="mb-0" style="color: rgba(255,255,255,.5);"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
	  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib.com</a>
	  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
	          </div>
	        </div>
      	</div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>