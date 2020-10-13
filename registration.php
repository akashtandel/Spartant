<?php
include("connect.php");
$sql=mysqli_query($con,"select * from tbl_batch");
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
	      <a class="navbar-brand" href="index.html"><span><i class="left-bar"></i>Spartant<i class="right-bar"></i></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
	        	<li class="nav-item active"><a href="registration.php" class="nav-link">Registration</a></li>
	        	
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
            <h1 class="mb-3 bread">Registration</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>Registration</span></p>
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
				<div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="m_name" class="form-control" onkeyup="showHint(this.value)" placeholder="Your Name" pattern="[A-Z a-z]+$" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="email" name="m_email" class="form-control" placeholder="Your Email" onkeyup="showHint(this.value)" pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="m_mobile" class="form-control" placeholder="Mobile Number" onkeyup="showHint(this.value)" pattern="[0-9]{10}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="m_emobile" class="form-control" placeholder="Emergency Contact Number" onkeyup="showHint(this.value)" pattern="[0-9]{10}" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text"  name="m_height" class="form-control" placeholder="height in Inch" onkeyup="showHint(this.value)" pattern="[0-9]{3}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="m_weight" class="form-control" placeholder="weight in kg" onkeyup="showHint(this.value)" pattern="[0-9]{2,3}" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="password" name="m_pass" class="form-control" placeholder="Password  like (User@1234)*" onkeyup="showHint(this.value)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="password" name="m_repass" class="form-control" placeholder="Re-Enter password" onkeyup="showHint(this.value)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                </div>
	            </div>
              </div>	
			  <div class="row">
			  
            	<div class="col-md-6">
	                <div class="form-group">
	                  Type of Training:-
					<select name="m_ttype" class="form-group" required>
						<option class="form-group" value="Regular">Regular</option>
						<option class="form-group" value="personal">Personal</option>
						
					</select>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  Select batch:-
					<select name="b_id" class="form-group">
					<?php
					while($res=mysqli_fetch_assoc($sql))
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
					  <input type="radio" name="gender" value="male">  Male
					  <input type="radio" name="gender" value="female">  Female
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
					Date Of Birth:<input type="date" id="birthday" name="m_dob"  class="form-control" required>
	                 
	                </div>
	            </div>
              </div>	
			  
              
              <div class="form-group">
                <textarea name="m_add" cols="30" rows="4" class="form-control" placeholder="Address" required></textarea>
              </div>
			  Select your image:-
			  <div class="form-group">
                <input type="file" name="t_image" class="form-control" value=" ">
              </div>
              <div class="form-group"><center>
                <input type="submit" name="register" value="Registration" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!--<div id="map" class="map"></div>-->
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
if(isset($_POST['register']))
{
	$b_id=$_POST['b_id'];
	$m_name=$_POST['m_name'];
	$m_email=$_POST['m_email'];
	$m_mobile=$_POST['m_mobile'];
	$m_emobile=$_POST['m_emobile'];
	$m_height=$_POST['m_height'];
	$m_weight=$_POST['m_weight'];
	$m_pass=$_POST['m_pass'];
	$m_repass=$_POST['m_repass'];
	$m_ttype=$_POST['m_ttype'];
	$gender=$_POST['gender'];
	$m_dob=$_POST['m_dob'];
	$m_add=$_POST['m_add'];
	
	$filename = $_FILES["t_image"]["name"];
	$tempname = $_FILES["t_image"]["tmp_name"];
	$folder = "image/".$filename;
	
	move_uploaded_file($tempname,$folder);
	
	$status="yes";
	
	if($m_pass!=$m_repass)
	{
		//echo "heyy password not match";
		echo "<script type='text/javascript'>";
		echo "alert('Password did not match');";
		echo "</script>";
	}
	else
	{
			
		$res = mysqli_query($con,"select * from tbl_member where m_email='$m_email'");
		if(mysqli_num_rows($res)>0)
		{
			echo "<script type='text/javascript'>";
			echo "alert('Email Id Already Exists');";
			echo "</script>";
		}
		else
		{
			$res1 = mysqli_query($con,"select max(m_id) from tbl_member");
			$mid=0;
			while($r1=mysqli_fetch_row($res1))
			{
				$mid=$r1[0];
			}
			$mid++;
			$res2 = mysqli_query($con,"insert into tbl_member values('$mid','$b_id','$m_name','$m_email','$m_mobile','$m_emobile','$m_height','$m_weight','$m_pass','$m_ttype','$gender','$m_dob','$m_add','$folder','$status')");
			if($res2=="1")
			{
				require'PHPMailer-master/PHPMailerAutoload.php';
				$mail=new PHPMailer;
				$mail->isSMTp();
				$mail->Host="smtp.gmail.com";
				$mail->Port=587;
				$mail->SMTPAuth=true;
				$mail->SMTPSecure="tls";
				$mail->Username="llite8093@gmail.com";
				$mail->Password="Ms101098";
				$mail->setFrom("llite8093@gmail.com","SPARTANT");
				$mail->addAddress($m_email);
				$mail->addReplyTo($m_email);

				$mail->isHTML(true);
				$mail->Subject="Registration done";
				$mail->Body="<h1 align=center>spartant</h1><h4 align=center>Thank you <b>$m_name</b> for Registration on spartant Gym.</h4>";
								
				if(!$mail->send())
				{

					echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}				
				echo "<script type='text/javascript'>";
				echo "alert('Registration Done');";
				echo "window.location.href='login.php';";
				echo "</script>";
			}
			else
			{
				echo "<script type='text/javascript'>";
				echo "alert('check details!!!');";
				echo "window.location.href='registration.php';";
				echo "</script>";
			}
		}
	}
	mysqli_close($con);
	
}
?>