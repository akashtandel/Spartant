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
$m_ttype=$res['m_ttype'];

$sqlt=mysqli_query($con,"select * from tbl_trainer");


$sqlt=mysqli_query($con,"select t_name from tbl_trainer t,tbl_trainerallocation ta,tbl_member m where m.m_id=ta.m_id and ta.t_id=t.t_id and m.m_id=$m_id");
$rest = mysqli_fetch_assoc($sqlt);
$t_name=$rest['t_name'];
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
	        	<li class="nav-item "><a href="user_index.php" class="nav-link">Home</a></li>
	        	<!--<li class="nav-item"><a href="about.html" class="nav-link">About</a></li>-->
	        	<li class="nav-item"><a href="program.php" class="nav-link">Programs</a></li>
	        	<li class="nav-item active"><a href="coaches.php" class="nav-link">Trainers</a></li>
				<li class="nav-item"><a href="pricing.php" class="nav-link">Pricing</a></li>
	          <li class="nav-item "><a href="contact.php" class="nav-link">Contact</a></li>
	          <li class="nav-item"><a href="logout.php" class="nav-link">logout</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
<?php
if($m_ttype=="personal")
{
	if($t_name==true)
	{
?>	

    <section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center mt-md-5 pt-5">
            <h1 class="mb-3"><font color="yellow">Your current Trainer is :-  <?php echo $t_name;?></font></h1>
			
				<div class="md-8 contact-info ftco-animate bg-light p-4">
					<!--<div class="col-md-1"></div>-->
          <div class="col-md ftco-animate">
			
            <h1><font>CHANGE YOUR TRAINER</font></h1>
			<form method="post" class="contact-form" enctype="multipart/form-data">
			
            
			  
				<div class="col-md-11">
	                <div class="form-group">
					
	                  <font color="black">Change Trainer:-</font>
					  <input type="hidden" name="hnd_mid" value="<?php echo $m_id; ?>" />
					<select name="t_id" class="form-group">
					<?php
					$sql=mysqli_query($con,"select * from tbl_trainer where status='yes'");
					while($res=mysqli_fetch_assoc($sql))
						{
							$t_id=$res['t_id'];
							$t_name=$res['t_name'];
							$t_email=$res['t_email'];
						?>
						<option class="form-group" value="<?php echo $t_id;?>"><?php echo $t_name;?></option>
						<?php
						}
						?>
					</select>
					<input type="hidden" name="t_email" value="<?php echo $t_email;?>">
					<input type="hidden" name="m_name" value="<?php echo $m_name;?>">
	                </div>
	            </div>
         
              </div>	
			  
              <div class="form-group"><center>
                <input type="submit" name="change" value="Update trainer" class="btn btn-primary py-3 px-5">
              </div>
            </form>
			<?php
			if(isset($_POST['change']))
			{
				$m_id=$_POST['hnd_mid'];
				echo $t_id=$_POST['t_id'];
				
				$res1 = mysqli_query($con,"update tbl_trainerallocation set t_id='$t_id' where m_id='$m_id'");
				echo $res1;
				if($res1=="1")
				{
					echo "<script type='text/javascript'>";
					echo "alert('Trainer changed');";
					echo "window.location.href='coaches.php';";
					echo "</script>";
				}
				else
				{
					echo "<script type='text/javascript'>";
					echo "alert('check details');";
					echo "window.location.href='coaches.php';";
					echo "</script>";
				}
				mysqli_close($con);
			}
			?>
		  </div>
        </div>
			
			
          
			
        </div>
    </div>
 </section>
 <?php
	}
	else
	{
		?>
		<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center mt-md-5 pt-5">
            <!--<h3 class="mb-3"><font color="yellow">Your current Trainer is :-  <?php //echo $t_name;?></font></h3>-->
			
				<div class="md-8 contact-info ftco-animate bg-light p-4">
					<!--<div class="col-md-1"></div>-->
          <div class="col-md ftco-animate">
			
            <h1><font>SELECT YOUR TRAINER</font></h1>
			<form method="post" class="contact-form" enctype="multipart/form-data">
			
            
			  
				<div class="col-md-11">
	                <div class="form-group">
					
	                  <font color="black">Select Trainer:-</font>
					  <input type="hidden" name="hnd_mid" value="<?php echo $m_id; ?>" />
					<select name="t_id" class="form-group">
					<?php
					$sql=mysqli_query($con,"select * from tbl_trainer where status='yes'");
					while($res=mysqli_fetch_assoc($sql))
						{
							$t_id=$res['t_id'];
							$t_name=$res['t_name'];
							$t_email=$res['t_email'];
						?>
						<option class="form-group" value="<?php echo $t_id;?>"><?php echo $t_name;?></option>
						<?php
						}
						?>
					</select>
					<input type="hidden" name="t_email" value="<?php echo $t_email;?>">
					<input type="hidden" name="m_name" value="<?php echo $m_name;?>">
	                </div>
	            </div>
         
              </div>	
			  
              <div class="form-group"><center>
                <input type="submit" name="trainer" value="select trainer" class="btn btn-primary py-3 px-5">
              </div>
            </form>
		  </div>
        </div>
			
			
          
			
        </div>
    </div>
 </section>
		<?php
	}
}
else
{
	?>
	
	<section class="hero-wrap js-fullheight" style="background-image: url('images/bg_2.jpg');">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center mt-md-5 pt-5">
            <h1 class="mb-3 bread"><font color="yellow">YOUR TRAINERS</font></h1>
			
        </div>
        </div>
    </div>
 </section>
	
	<?php
}
?>


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
				$s=$rest['status'];
				if($s=='yes')
				{
				
			?>
    			<div class="col-lg-3 d-flex">
    				<div class="coach align-items-stretch">
	    				<div class="img" style="background-image: url(<?php echo $t_image;?>);"></div>
	    				<div class="text pt-3 ftco-animate">
	    					<!--<span class="subheading">Owner / Head Coach</span>-->
	    					<h3><a href="#"><?php echo $t_name;?></a></h3>
	    					<h4><p><?php echo $t_mobile;?></p></h4>
	    					<h4><p><?php echo $t_email;?></p></h4>
	    					<h5><p><?php echo $t_exp;?></p></h5>
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
<?php
if(isset($_POST['trainer']))
{
	$m_id=$_POST['hnd_mid'];
	$t_id=$_POST['t_id'];
	$t_email=$_POST['t_email'];
	$m_name=$_POST['m_name'];
	$status="yes";
	$res = mysqli_query($con,"select * from tbl_trainerallocation where t_id='$t_id' and m_id='$m_id'");
	if(mysqli_num_rows($res)>0)
	{
		echo "<script type='text/javascript'>";
		echo "alert('Trainer Already Selected');";
		echo "</script>";
	}
	else
	{
		$res1 = mysqli_query($con,"select max(ta_id) from tbl_trainerallocation");
		$ta_id=0;
		while($id=mysqli_fetch_row($res1))
		{
			$ta_id=$id[0];
		}
		$ta_id++;
		$res1 = mysqli_query($con,"insert into tbl_trainerallocation values($ta_id,'$t_id','$m_id','$status')");
		echo $res1;
		if($res1=="1")
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
				$mail->addAddress($t_email);
				$mail->addReplyTo($t_email);

				$mail->isHTML(true);
				$mail->Subject="New Member to Train";
				$mail->Body="<h1 align=center>spartant</h1><h4 align=center>you has to train <b>$m_name</b>.he/she has selected you as Trainer";
								
				if(!$mail->send())
				{

					echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}

			echo "<script type='text/javascript'>";
			echo "alert('Trainer Selected');";
			echo "window.location.href='coaches.php';";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('check details!!!');";
			echo "window.location.href='coaches.php';";
			echo "</script>";
		}
	}
	mysqli_close($con);
	
	
}
?>
