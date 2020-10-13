<?php
include("connect.php");
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
						    <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span> <span>6:00AM - 9:00PM</span></p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><span><i class="left-bar"></i>Spartant<i class="right-bar"></i></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item "><a href="login.php" class="nav-link">Login</a></li>
	        	<li class="nav-item "><a href="registration.php" class="nav-link">Registration</a></li>
	        	
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->

    <section class="home-slider js-fullheight owl-carousel ftco-degree-bottom">
      <div class="slider-item js-fullheight" style="background-image: url(images/bg_2.jpg);">
      	<div class="overlay"></div>
        <div class="container-fluid">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-12 ftco-animate text-center mt-5 pt-md-5">
              <h1 class="mb-4">Crossfit is for<span>Everyone</span></h1>
              <h2 class="subheading">Shape your body</h2>
            </div>

          </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image: url(images/bg_1.jpg);">
      	<div class="overlay"></div>
        <div class="container-fluid">
          <div class="row slider-text js-fullheight justify-content-center align-items-center" data-scrollax-parent="true">

            <div class="col-sm-12 ftco-animate text-center mt-5 pt-md-5">
              <h1 class="mb-4">Crossfit<span>Gym</span></h1>
              <h2 class="subheading">Get Your Body Fit</h2>
            </div>

          </div>
        </div>
      </div>
    </section> 


    <section class="ftco-section ftco-about">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="img img-video d-flex align-items-center" style="background-image: url(images/about.jpg);">
    					<div class="video justify-content-center">
								<a href="https://www.youtube.com/watch?v=24fdcMw0Bj0" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
									<span class="ion-ios-play"></span>
		  					</a>
							</div>
    				</div>
    				
    			</div>
    			<div class="col-md-6 pl-md-5 ftco-animate d-flex align-items-center">
    				<div class="text pt-4 pt-md-0">
		          <div class="heading-section mb-4">
		          	<span class="subheading">Welcome</span>
		            <h2 class="mb-1">Welcome to <span>Spartant</span> Crossfit Gym</h2>
		          </div>
		          <p>The pain you feel today, will be the strength you feel tomorrow.</p>
		          <p><a href="registration.php" class="btn btn-primary p-3">Join us</a></p>
	          </div>
    			</div>
    		</div>
    	</div>
    </section>
	
    <section class="ftco-section bg-light">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<h3 class="subheading">Shape Your Body</h3>
            <h2 class="mb-1">Our Coaches</h2>
          </div>
        </div>
    		<div class="row">
			<?php 
			$sqlt=mysqli_query($con,"select * from tbl_trainer");
			while($rest=mysqli_fetch_assoc($sqlt))
			{
				$t_id=$rest['t_id'];
				$t_name=$rest['t_name'];
				$t_mobile=$rest['t_mobile'];
				$t_email=$rest['t_email'];
				$t_exp=$rest['t_exp'];
				$t_image=$rest['t_image'];
				$status=$rest['status'];
				if($status=="yes"){
					
			?>
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="img" style="background-image: url(<?php echo $t_image;?>);"></div>
	    				<div class="text pt-3 ftco-animate">
	    					<!--<span class="subheading">Owner / Head Coach</span>-->
	    					<h3><a href="#"><?php echo $t_name;?></a></h3>
	    					
	    					<ul class="ftco-social-media d-flex mt-4">
	               
							</ul>
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
			<?php
				}
			}
			?>
    			
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