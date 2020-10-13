<!DOCTYPE html>
<html lang="en">
  <head>
    <title>WeTube</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Barlow+Condensed:500,600,700&display=swap" rel="stylesheet">

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
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><!--<span class="flaticon-scissors-in-a-hair-salon-badge"></span>--><font color='black'>WeTube</font></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="video_gallary.php" class="nav-link"><font color='black'>Back</font></a></li>
	        	<!--<li class="nav-item"><a href="services.html" class="nav-link"><font color='black'>Services</font></a></li>
	        	<li class="nav-item"><a href="gallery.html" class="nav-link"><font color='black'>Gallery</font></a></li>
	        	<li class="nav-item"><a href="about.html" class="nav-link"><font color='black'>About</font></a></li>
	        	<li class="nav-item active"><a href="video_gallary.php" class="nav-link"><font color='black'>Videos</font></a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link"><font color='black'>Contact</font></a></li>-->
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->


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





























