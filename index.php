	<?php
	include 'header.php';
		include 'config.php';
		//initialize cart if not set or is unset
		if(!isset($_SESSION['cart'])){
			$_SESSION['cart'] = array();
		}

		//unset qunatity
		unset($_SESSION['qty_array']);
	?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<title>Liquor Store - Free Bootstrap 4 Template by Colorlib</title>
	</head>
	<body>
	<?php

	?>    
		<div class="hero-wrap" style="background-image: url('images/bg2.png');" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row no-gutters slider-text align-items-center justify-content-center">
			<div class="col-md-8 ftco-animate d-flex align-items-end">
				<div class="text w-100 text-center">
					<h1 class="mb-4">Gifts <span>For</span> Every Reason <span>Every Season</span>.</h1>
					
					<p><a href="productlist.php" class="btn btn-primary py-2 px-4">Shop Now</a> <a href="Blog.php" class="btn btn-white btn-outline-white py-2 px-4">Read more</a></p>
				</div>
			</div>
			</div>
		</div>
		</div>

		<section class="ftco-intro">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-4 d-flex">
						<div class="intro d-lg-flex w-100 ftco-animate">
							<div class="icon">
								<span class="flaticon-support"></span>
							</div>
							<div class="text">
								<h2>Online Support 24/7</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="intro color-1 d-lg-flex w-100 ftco-animate">
							<div class="icon">
								<span class="flaticon-cashback"></span>
							</div>
							<div class="text">
								<h2>Money Back Guarantee</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 d-flex">
						<div class="intro color-2 d-lg-flex w-100 ftco-animate">
							<div class="icon">
								<span class="flaticon-free-delivery"></span>
							</div>
							<div class="text">
								<h2> Shipping &amp; Return On Time</h2>
								<p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="ftco-section ftco-no-pb">
				<div class="container">
					<div class="row">
						<?php
						$sql ="SELECT * FROM products ORDER BY p_id Desc";
						$Show = mysqli_query($conn,$sql);
						$res = mysqli_fetch_array($Show); 
						?>
						<div class="col-md-6 img img-3 d-flex justify-content-center align-items-center" style="background-image: url(data:image/jpg;base64,<?php echo base64_encode($res['p_img'])?>);">
						</div>
						<div class="col-md-6 wrap-about pl-md-5 ftco-animate py-5">
				<div class="heading-section">
					<span class="subheading">Since 1905</span>
					<h2 class="mb-4">Made with love</h2>

					<p>Planning on surprising your loved ones with a gift and card on their special occasion. If so, then you might want to take a look at Papyrus and Jenny’s Card and Gift Shop in Baltimore, MD.
					<p>These gift stores offer a wide range of gifts and cards for every occasion such as birthdays, weddings, graduation and many more</p>
					<p>In addition to this, these stores also offer unusual gift wrapping services and customers can also purchase cards on sale</p>
					<p>They also provide stationery items such as birthday balloon candles, accented candles, sliver heart toothpicks and many more</p>
					<p class="year">
						<strong class="number" data-number="115">0</strong>
						<span>Years of Experience In Business</span>
					</p>
				</div>

						</div>
					</div>
				</div>
			</section>

			<section class="ftco-section ftco-no-pb">
				<div class="container">
					<div class="row">
						<?php
						$sql1="SELECT * FROM `products` ORDER BY p_id DESC";
						$show1 = mysqli_query($conn, $sql1);
						$x=0;
						while($rows = mysqli_fetch_array($show1)):
							$x=$x+0;
						for ($i=$x; $i<=$x; $i++)
						{
						?>
						<div class="col-lg-2 col-md-4 ">
							<div class="sort w-100 text-center ftco-animate">
								<div class="img" style="background-image: url(data:image/jpg;base64,<?php echo base64_encode($rows['p_img'])?>);"></div>
								<h3><?php echo $rows['p_name']?></h3>
							</div>
						</div>
						<?php }
						if($x != 5)
						{
		
						$x=$x+1;
						}
						else
						{
							break;
						}
						endwhile?>
					</div>
				</div>
			</section>

			<section class="ftco-section">
				<div class="container">
				<div class="row justify-content-center pb-5">
					<div class="col-md-7 heading-section text-center ftco-animate">
						<span class="subheading">Our Delightful offerings</span>
						<h2>Tastefully Yours</h2>
					</div>
					</div>
					<div class="row">
								<?php
						//info message
						if(isset($_SESSION['message'])){
							?>
							<!-- <div class="row">
								<div class="col-sm-6 col-sm-offset-6">
									<div class="alert alert-info text-center">
										<?php echo $_SESSION['message']; ?>
									</div>
								</div>
							</div> -->
							<?php
							unset($_SESSION['message']);
						}
						//end info message
						//fetch our products	
						//connection
		
						$sql = "SELECT * FROM products";
						$query = $conn->query($sql);
						$inc = 4;
						while($row = $query->fetch_assoc()){
							$inc = ($inc == 4) ? 1 : $inc + 1; 
							if($inc == 1) ;  
							?>

						<div class="col-md-3 d-flex">
							<div class="product ftco-animate">
								<div class="img d-flex align-items-center justify-content-center" style="background-image: url('data:image/jpg;base64,<?php echo base64_encode($row['p_img'])?>');">
									<div class="desc">
										<p class="meta-prod d-flex">
											<a href="addcart.php?p_id=<?php echo $row['p_id']?>" class="d-flex align-items-center justify-content-center"><span class="flaticon-shopping-bag"></span></a>
											<a href="#" class="d-flex align-items-center justify-content-center"><span class="flaticon-heart"></span></a>
											<a href="productlist.php?p_id=<?php echo $row['p_id']?>" class="d-flex align-items-center justify-content-center"><span class="flaticon-visibility"></span></a>
										</p>
									</div>
								</div>
								<div class="text text-center">
									<span class="sale">Sale</span>
									<span class="category"><?php echo $row['p_name']?></span>
									<h2><?php echo $row['p_name']?></h2>
									<p class="mb-0"> <span class="price"><?php echo $row['p_amount']?></span></p>
								</div>
							</div>
						</div>
						<?php }?>
					</div>				
					<div class="row justify-content-center">
						<div class="col-md-5">
							<a href="productlist.php" class="btn btn-primary d-block">View All Products <span class="fa fa-long-arrow-right"></span></a>
						</div>
					</div>
				</div>
			</section>
	
		<section class="ftco-section testimony-section img" style="background-image: url('images/bg2.png');">
			<div class="overlay"></div>
		<div class="container">
			<div class="row justify-content-center mb-5">
			<div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
				<span class="subheading">Testimonial</span>
				<h2 class="mb-3">Happy Clients</h2>
			</div>
			</div>
			<div class="row ftco-animate">
			<div class="col-md-12">
				<div class="carousel-testimony owl-carousel ftco-owl">
				<div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					<div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					<div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					<div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_3.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					<div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_1.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							</div>
						</div>
					</div>
					</div>
				</div>
				<div class="item">
					<div class="testimony-wrap py-4">
						<div class="icon d-flex align-items-center justify-content-center"><span class="fa fa-quote-left"></div>
					<div class="text">
						<p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						<div class="d-flex align-items-center">
							<div class="user-img" style="background-image: url(images/person_2.jpg)"></div>
							<div class="pl-3">
								<p class="name">Roger Scott</p>
								<span class="position">Marketing Manager</span>
							</div>
						</div>
					</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		</section>


			
		<section class="ftco-section">
		
		</section>	
	<?php 
	include 'footer.php';
	?>
	</body>
	</html>
