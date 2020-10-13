<?php
session_start();
error_reporting(0);
include("connect.php");
$user_profile = $_SESSION['useremail'];
if($user_profile==true)
{
	
}
else
{
	echo "<script type='text/javascript'>";
	echo "window.location.href='login.php';";
	echo "</script>";
}
$sql = "select * from tbl_member where m_email='$user_profile'";

$cmd = mysqli_query($con,$sql);
$res = mysqli_fetch_assoc($cmd);
$m_id=$res['m_id'];
$m_name=$res['m_name'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Spartant</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  	<div class="py-1 bg-black top">
    	<div class="container">
    		<div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
	    		<div class="col-lg-12 d-block">
		    		<div class="row d-flex">
		    			<div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
						    <span class="text">+91 9876543210</span>
					    </div>
					    <div class="col-md pr-4 d-flex topper align-items-center">
					    	<div class="icon mr-2 d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
						    <span class="text">spartant@gmail.com</span>
					    </div>
					    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
						    <p class="mb-0 register-link"><h4><span>Hello</span> <span></span> <span><?php echo $m_name;?></span></h4></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="user_index.php"><span><i class="left-bar"></i>Endurance<i class="right-bar"></i></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="user_index.php" class="nav-link">Home</a></li>
	        	<!--<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>-->
	        	<li class="nav-item active"><a href="program.php" class="nav-link">Programs</a></li>
	        	<li class="nav-item"><a href="coaches.php" class="nav-link">Trainers</a></li>
				<li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center pt-5 mt-md-5">
            <h1 class="mb-3 bread">Program</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Program</span></p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section">
	  	<div class="container-fluid px-4">
        <div class="row">
        	<div class="col-md-6 col-lg-3">
        		<div class="package-program ftco-animate">
        			<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-1.jpg);">
        				
        			</a>
        			<div class="text mt-3">
        				<h3><a href="#">Body Building</a></h3>
        				<!--<p>dis</p>-->
        			</div>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3">
        		<div class="package-program ftco-animate">
        			<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-2.jpg);">
        				
        			</a>
        			<div class="text mt-3">
        				<h3><a href="#">Aerobic Classes</a></h3>
        				<!--<p>dis</p>-->
        			</div>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3">
        		<div class="package-program ftco-animate">
        			<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-3.jpg);">
        				
        			</a>
        			<div class="text mt-3">
        				<h3><a href="#">Weight Lifting</a></h3>
        				<!--<p>dis</p>-->
        			</div>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3">
        		<div class="package-program ftco-animate">
        			<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-4.jpg);">
        				
        			</a>
        			<div class="text mt-3">
        				<h3><a href="#">Yoga Classes</a></h3>
        				<!--<p>dis</p>-->
        			</div>
        		</div>
        	</div>

        	<div class="col-md-6 col-lg-3">
        		<div class="package-program ftco-animate">
        			<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-5.jpg);">
        			
        			</a>
        			<div class="text mt-3">
        				<h3><a href="#">Body Building</a></h3>
        				<!--<p>dis</p>-->
        			</div>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3">
        		<div class="package-program ftco-animate">
        			<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-6.jpg);">
        			
        			</a>
        			<div class="text mt-3">
        				<h3><a href="#">Aerobic Classes</a></h3>
        				<!--<p>dis</p>-->
        			</div>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3">
        		<div class="package-program ftco-animate">
        			<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-7.jpg);">
        			
        			</a>
        			<div class="text mt-3">
        				<h3><a href="#">Weight Lifting</a></h3>
						<!--<p>dis</p>-->
					</div>
        		</div>
        	</div>
        	<div class="col-md-6 col-lg-3">
        		<div class="package-program ftco-animate">
        			<a href="#" class="img d-flex justify-content-center align-items-center" style="background-image: url(images/program-8.jpg);">
        			
        			</a>
        			<div class="text mt-3">
        				<h3><a href="#">Yoga Classes</a></h3>
        				<!--<p>dis</p>-->
        			</div>
        		</div>
        	</div>
        </div>
       
	  	</div>
	  </section>

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>