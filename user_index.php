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
$b_id=$res['b_id'];
$m_name=$res['m_name'];
$m_email=$res['m_email'];
$m_mobile=$res['m_mobile'];
$m_emobile=$res['m_emobile'];
$m_height=$res['m_height'];
$m_weight=$res['m_weight'];
$password=$res['password'];
$m_ttype=$res['m_ttype'];
$m_gender=$res['m_gender'];
$m_dob=$res['m_dob'];
$m_address=$res['m_address'];
$m_image=$res['m_image'];

$sqlb = "select * from tbl_batch where b_id='$b_id'";
$cmdb = mysqli_query($con,$sqlb);
$resb = mysqli_fetch_assoc($cmdb);
$eb_id=$resb['b_id'];
$estime=$resb['stime'];
$eetime=$resb['etime'];
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
	      <a class="navbar-brand" href="user_index.php"><span><i class="left-bar"></i>Spartant<i class="right-bar"></i></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item active"><a href="user_index.php" class="nav-link">Home</a></li>
	        	<!--<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>-->
	        	<li class="nav-item"><a href="program.php" class="nav-link">Programs</a></li>
	        	<li class="nav-item"><a href="coaches.php" class="nav-link">Trainers</a></li>
				<li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
	          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
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
    				<!--<div class="thumb-wrap d-flex">
    					<a href="#" class="thumb img" style="background-image: url(images/program-1.jpg);"></a>
    					<a href="#" class="thumb img" style="background-image: url(images/program-2.jpg);"></a>
    					<a href="#" class="thumb img" style="background-image: url(images/program-3.jpg);"></a>
    				</div>-->
    			</div>
    			<div class="col-md-6 pl-md-5 ftco-animate d-flex align-items-center">
    				<div class="text pt-4 pt-md-0">
		          <div class="heading-section mb-4">
		          	<span class="subheading">Welcome</span>
		            <h2 class="mb-1">Welcome to <span>Spartant</span> Crossfit Gym</h2>
		          </div>
		          <p>The pain you feel today, will be the strength you feel tomorrow.</p>
		         
	          </div>
    			</div>
    		</div>
    	</div>
    </section>


	<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
		
					<div class="col-md-1"></div>
          <div class="col-md ftco-animate">
            <form method="post" class="contact-form" enctype="multipart/form-data">
			<h1 class="mb-3"><center>Update Your Profile</center></h1>
				<div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
						<input type="hidden" name="hm_id" value="<?php echo $m_id;?>">
	                  <input type="text" name="m_name"  value="<?php echo $m_name;?>" class="form-control" onkeyup="showHint(this.value)" placeholder="Your Name" pattern="[A-Z a-z]+$" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="email" name="m_email" value="<?php echo $m_email;?>" class="form-control" placeholder="Your Email" onkeyup="showHint(this.value)" pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="m_mobile" value="<?php echo $m_mobile;?>" class="form-control" placeholder="Mobile Number" onkeyup="showHint(this.value)" pattern="[0-9]{10}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="m_emobile" value="<?php echo $m_emobile;?>" class="form-control" placeholder="Emergency Contact Number" onkeyup="showHint(this.value)" pattern="[0-9]{10}" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text"  name="m_height" value="<?php echo $m_height;?>" class="form-control" placeholder="height in Inch" onkeyup="showHint(this.value)" pattern="[0-9]{3}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="m_weight" value="<?php echo $m_weight;?>" class="form-control" placeholder="weight in kg" onkeyup="showHint(this.value)" pattern="[0-9]{2,3}" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="password" name="m_pass" value="<?php echo $password;?>" class="form-control" placeholder="Password  like (User@1234)*" onkeyup="showHint(this.value)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                </div>
                </div>
                
              </div>	
			  <div class="row">
			  
            	<div class="col-md-6">
	                <div class="form-group">
	                  Type of Training:-
					<select name="m_ttype" class="form-group" required>
						<option class="form-group" value="<?php echo $m_ttype;?>"><?php echo $m_ttype;?></option>
						<option class="form-group" value="Regular">Regular</option>
						<option class="form-group" value="personal">Personal</option>
						
					</select>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  Select batch:-
					<select name="b_id" class="form-group">
						<option class="form-group" value="<?php echo $eb_id;?>"><?php echo $estime."  to ".$eetime?></option>
					<?php
					$sqlbb = mysqli_query($con,"select * from tbl_batch");
					while($res=mysqli_fetch_assoc($sqlbb))
						{
							$b_id=$res['b_id'];
							$stime=$res['stime'];
							$etime=$res['etime'];
						?>
						
						<option class="form-group" value="<?php echo $b_id;?>"><?php echo $stime."  to ".$etime?></option>
						<?php
						}
						?>
					</select>
	                </div>
					
	            </div>
              </div>	
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  Gender:
					  <?php 
					  $m=$f="";
					  if($m_gender=="male")
					  {
						  $m="checked";
					  }
					  else
					  {
						  $f="checked";
					  }
					  ?>
					  <input type="radio" name="gender" value="male" <?php echo $m;?>>  Male
					  <input type="radio" name="gender" value="female" <?php echo $f;?>>  Female
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
					Date Of Birth:<input type="date" value="<?php echo $m_dob;?>" id="birthday" name="m_dob"  class="form-control" required>
	                 
	                </div>
	            </div>
              </div>	
			  
              
              <div class="form-group">
                <input type="text" name="m_add"  value="<?php echo $m_address;?>"class="form-control" placeholder="Address" required>
              </div>
			  Select your image:-
			  <div class="form-group">
                <input type="file" name="t_image" class="form-control" value="">
				<input type="hidden" name="hdn_image" value="<?php echo $m_image;?>">
              </div>
              <div class="form-group"><center>
                <input type="submit" name="update" value="Update Profile" class="btn btn-primary py-3 px-5">
              </div>
            </form>
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
<?php
if(isset($_POST['update']))
{
	
	$m_id=$_POST['hm_id'];
	$b_id=$_POST['b_id'];
	$m_name= $_POST['m_name'];
	$t_email= $_POST['t_email'];
	$m_mobile= $_POST['m_mobile'];
	$m_emobile= $_POST['m_emobile'];
	$m_height=$_POST['m_height'];
	$m_weight=$_POST['m_weight'];
	$m_pass=$_POST['m_pass'];
	$m_ttype=$_POST['m_ttype'];
	$gender=$_POST['gender'];
	$m_dob=$_POST['m_dob'];
	$m_add=$_POST['m_add'];
	
	
	$iimage=$_POST['hdn_image'];
	
		
		$filename = $_FILES["m_image"]["name"];
		$tempname = $_FILES["m_image"]["tmp_name"];
		$folder = "image/".$filename;
		$a=move_uploaded_file($tempname,$folder);
		if($a==true)
		{
			$image=$folder;
		}
		else
		{
			$image=$iimage;
		}
		
		
	$status = "yes";
	
	$res1 = mysqli_query($con,"update tbl_member set b_id='$b_id',m_name='$m_name',m_email='$m_email',m_mobile='$m_mobile',m_emobile='$m_emobile',m_height='$m_height',password='$m_pass',m_image='$image',m_address='$m_address',m_dob='$m_dob',m_gender='$m_gender',m_ttype='$m_ttype' where m_id='$m_id'");
	if($res1=="1")
	{
		echo "<script type='text/javascript'>";
		echo "alert(' your details updated');";
		echo "window.location.href='user_index.php';";
		echo "</script>";
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "alert('check details!!!');";
		echo "window.location.href='user_index.php';";
		echo "</script>";
	}
	mysqli_close($con);
	
	
}
?>