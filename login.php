<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Spectral:ital,wght@0,200;0,300;0,400;0,500;0,700;0,800;1,200;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">

<link rel="stylesheet" href="css/animate.css">

<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
<link rel="stylesheet" href="css/magnific-popup.css">

<link rel="stylesheet" href="css/flaticon.css">
<link rel="stylesheet" href="css/style.css">


    <!-- #b7472a;  -->
    
    <style>
        .ftco-intro
        {
            background: #b7472a;
        }
        .box
        {
            background: white;
            margin-top: 9%;
            margin-left:30%;
            margin-right:30%;
            padding-left:20px;
            padding-right:20px;
            padding-top:40px;
            padding-bottom:30px;
            
        }
        .input{
            margin-bottom:20px;    
        }

        .header{
            text-align: center;
            font-family: Georgia, 'Times New Roman', Times, serif;
            padding-bottom:20px;
        }
        .btn:not(:disabled):not(.disabled) {
        cursor: pointer;
        }
        .btn.btn-primary {
            background: #b7472a !important;
            border: 1px solid #b7472a !important;
            color: #fff !important;

        }
        p {
        font-family: "Poppins", sans-serif;
        color: #757575;
        font-size: 18px;
        
        }


    </style>

</head>
<body class="ftco-intro">



<div class="wrap" style="height: 35px !important;">
			<div class="container">
				<div class="row" style ="padding-top:5px">
					<div class="col-md-6 d-flex align-items-center">
						<p class="mb-0 phone pl-md-2" style="padding-bottom:15px;">
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
                        <a href="signup.php" class="mr-2">Sign Up</a> <a href="login.php">Log In</a></p>
                        </p>
                        </div>
					</div>
				</div>
			</div>
		</div>
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar" style ="background: #212529 !important;">
	    <div class="container">
	      <a class="navbar-brand" href="index.html">Gift <span>Shop</span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
			  <li class="nav-item"><a href="productlist.php" class="nav-link">Products</a></li>

	          <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
			</ul>
	      </div>
	    </div>
	  </nav>




    <div class="box shadow-lg p-3 mb-5 bg-body rounded" data-stellar-background-ratio="0.5">
        <form action="" method="post">
        
            <?php include 'config.php' ?>
            <div class ="header">
                <h1>Log in</h1>
            </div>
            
            <div class="input-group input-group-lg input">
                <input type="text" name="email" placeholder = "Email Address" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>

            <div class="input-group input-group-lg input">
                <input type="text" name="password" placeholder = "Password" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-lg">
            </div>

            <center><input type="submit" name="btn" value="Log in" class=" btn btn-primary input"></center>
            
            
            <?php
            if(isset($_POST['btn']))
            {
                $email =$_POST['email'];
                $password =$_POST['password'];

                $sql = "SELECT * FROM `users` WHERE u_email = '$email' AND  u_password = '$password' ";
                
                
                $login = mysqli_query($conn, $sql);

                $row = mysqli_fetch_array($login);

                

                if($row)
                {
                    $_SESSION['userid'] = $row['u_id'];
                    $_SESSION['name'] = $row['u_name'];
                    $_SESSION['role'] = $row['u_role'];
                    $_SESSION['email'] = $row['u_email'];

                    if($_SESSION['role'] == 3)
                    {
                        echo "<script>window.location.href='index.php'</script>";
                    }
                    if($_SESSION['role'] == 1 || $_SESSION['role'] == 2)
                    {
                        echo "<script>window.location.href='admin.php'</script>";
                    }
                }
                else{
                    echo "Opps Got Some Error";
                }
            
            }
            
            ?>
        </form>

        <div>
        
        <p><a href="forget-password.html"> Forgot your password?</a></p>

        </div>
    </div>


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
  <script src="js/main.js"></script>
    
</body>
</html> 