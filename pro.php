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
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate mb-5 text-center">
          	<p class="breadcrumbs mb-0"><span class="mr-2"><a href="productlist.php">Home <i class="fa fa-chevron-right"></i></a></span> <span>Products <i class="fa fa-chevron-right"></i></span></p>
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
                          <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
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
          elseif (isset($_GET['c_id']))
          {
            $id= $_GET['c_id'];

          ?>
    		<div class="row">
			<?php 
                          
              $sql = "SELECT * FROM `products` where p_category = '$id'";

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
                          <a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
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

            <div class="sidebar-box ftco-animate">
              <h3>Recent Blog</h3>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_1.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="fa fa-calendar"></span> Apr. 18, 2020</a></div>
                    <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_2.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="fa fa-calendar"></span> Apr. 18, 2020</a></div>
                    <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                  </div>
                </div>
              </div>
              <div class="block-21 mb-4 d-flex">
                <a class="blog-img mr-4" style="background-image: url(images/image_3.jpg);"></a>
                <div class="text">
                  <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
                  <div class="meta">
                    <div><a href="#"><span class="fa fa-calendar"></span> Apr. 18, 2020</a></div>
                    <div><a href="#"><span class="fa fa-comment"></span> 19</a></div>
                  </div>
                </div>
              </div>
            </div>
					</div>
				</div>
			</div>
		</section>

    
  

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