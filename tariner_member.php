<?php
session_start();
error_reporting(0);
include("connect.php");
$trainer_profile = $_SESSION['traineremail'];
if($trainer_profile==true)
{
	
}
else
{
	echo "<script type='text/javascript'>";
	echo "window.location.href='login.php';";
	echo "</script>";
}
$sql = "select * from tbl_trainer where t_email='$trainer_profile'";

$cmd = mysqli_query($con,$sql);
$res = mysqli_fetch_assoc($cmd);
$t_id=$res['t_id'];
$t_name=$res['t_name'];
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
					   		<p class="mb-0 register-link"><h3><span>Hello:-</span> <span><?php echo $t_name;?></span></h3></p>
					   </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="trainer_index.php"><span><i class="left-bar"></i>Spartant trainer<i class="right-bar"></i></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item "><a href="trainer_index.php" class="nav-link">Home</a></li>
				<li class="nav-item active"><a href="tariner_member.php" class="nav-link">Members</a></li>
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
          <div class="col-md-9 ftco-animate text-center mt-md-5 pt-5">
            <h1 class="mb-3 bread">your Members</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="trainer_index.php">Home</a></span> <span>Members</span></p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section bg-light">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<h3 class="subheading"></h3>
            <h2 class="mb-1">Your Members</h2>
          </div>
        </div>
    		<div class="row">
			<?php 
			$sqlt=mysqli_query($con,"select stime,etime,m_name,m_email,m_mobile,m_ttype,m_gender,m_address,m_image from tbl_member m,tbl_trainerallocation ta,tbl_batch b where ta.m_id=m.m_id and m.b_id=b.b_id and ta.t_id='$t_id' and m.status='yes'");
			while($rest=mysqli_fetch_assoc($sqlt))
			{
				$stime=$rest['stime'];
				$etime=$rest['etime'];
				$m_name=$rest['m_name'];
				$m_mobile=$rest['m_mobile'];
				$m_email=$rest['m_email'];
				$m_ttype=$rest['m_ttype'];
				$m_gender=$rest['m_gender'];
				$m_image=$rest['m_image'];
				
			?>
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="img" style="background-image: url(<?php echo $m_image;?>);"></div>
	    				<div class="text pt-3 ftco-animate">
	    					<!--<span class="subheading">Owner / Head Coach</span>-->
	    					<h3><a href="#"><?php echo $m_name;?></a></h3>
	    					<h5><p><?php echo $m_mobile;?></p></h5>
	    					<h5><p><?php echo $m_email;?></p></h5>
	    					<h5><p><?php echo $m_gender;?></p></h5>
	    					<h5><p><?php echo "time:- ".$stime."  to  ".$etime;?></p></h5>
	    					<ul class="ftco-social-media d-flex mt-4">
	               
							</ul>
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
			<?php
			}
			?>
    			
    		</div>
    	</div>
    </section>
	<section class="ftco-section bg-light">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<h3 class="subheading"></h3>
            <h2 class="mb-1">Regular Members</h2>
          </div>
        </div>
    		<div class="row">
			<?php 
			$sqlt=mysqli_query($con,"select stime,etime,m_name,m_mobile,m_email,m_gender,m_image,m.status from tbl_member m,tbl_batch b where b.b_id=m.b_id and m.m_ttype='Regular' and m.status='yes'");
			while($rest=mysqli_fetch_assoc($sqlt))
			{
				$stime=$rest['stime'];
				$etime=$rest['etime'];
				$m_name=$rest['m_name'];
				$m_mobile=$rest['m_mobile'];
				$m_email=$rest['m_email'];
				//$m_ttype=$rest['m_ttype'];
				$m_gender=$rest['m_gender'];
				$m_image=$rest['m_image'];
				
				
			?>
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="img" style="background-image: url(<?php echo $m_image;?>);"></div>
	    				<div class="text pt-3 ftco-animate">
	    					<!--<span class="subheading">Owner / Head Coach</span>-->
	    					<h3><a href="#"><?php echo $m_name;?></a></h3>
	    					<h5><p><?php echo $m_mobile;?></p></h5>
	    					<h5><p><?php echo $m_email;?></p></h5>
	    					<h5><p><?php echo $m_gender;?></p></h5>
	    					<h5><p><?php echo "time:- ".$stime."  to  ".$etime;?></p></h5>
	    					<ul class="ftco-social-media d-flex mt-4">
	               
							</ul>
	    					<p></p>
	    				</div>
	    			</div>
    			</div>
			<?php
				
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