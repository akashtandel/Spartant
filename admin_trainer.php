<?php
session_start();
include("connect.php");
error_reporting(0);
$admin_profile = $_SESSION['adminemail'];
if($admin_profile==true)
{
	
}
else
{
	echo "<script type='text/javascript'>";
	//echo "alert('Admin Login Succesfull');";
	echo "window.location.href='login.php';";
	echo "</script>";
	//header('location:lohin.php');
}

$uid=$_GET['uid'];
$did=$_GET['did'];
if($did==true)
{
$res3 = mysqli_query($con,"update tbl_trainer set status='no' where t_id='$did'");
if($res3=="1")
{
	echo "<script type='text/javascript'>";
	echo "alert('Trainer Deleted');";
	echo "window.location.href='admin_trainer.php';";
	echo "</script>";
}
}
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
						    <p class="mb-0 register-link"> <h3><span>Hello</span> <span>Admin</span> </h3> </p>
					    </div>
				    </div>
			    </div>
		    </div>
		  </div>
    </div>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><span><i class="left-bar"></i>Spartant admin<i class="right-bar"></i></span></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	        	<li class="nav-item"><a href="admin_index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item active"><a href="admin_trainer.php" class="nav-link">Add Trainer</a></li>
				<li class="nav-item"><a href="admin_payment.php" class="nav-link">payment</a></li>
				<li class="nav-item"><a href="admin_batch.php" class="nav-link">Batch</a></li>
				<li class="nav-item"><a href="admin_feedback.php" class="nav-link">Feedback</a></li>
				<li class="nav-item"><a href="report_user.php" class="nav-link">Reports</a></li>
	        	<li class="nav-item "><a href="logout.php" class="nav-link">logout</a></li>
	        	
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
            <!--<h1 class="mb-3 bread">Add Trainer</h1>-->

		<div class="md-8 contact-info ftco-animate bg-light p-4">
					<!--<div class="col-md-1"></div>-->
          <div class="col-md ftco-animate">
		  <?php
			if($uid==true)
			{
				$sqlt=mysqli_query($con,"select * from tbl_trainer where t_id='$uid'");
				while($rest=mysqli_fetch_assoc($sqlt))
				{
					$t_name=$rest['t_name'];
					$t_mobile=$rest['t_mobile'];
					$t_email=$rest['t_email'];
					$password=$rest['password'];
					$t_exp=$rest['t_exp'];
					$t_image=$rest['t_image'];
				}
		  ?>
            <form enctype="multipart/form-data" method="post" class="contact-form">
				<h1 class="mb-3">Update Trainer</h1>
              <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
						<input type="hidden" name="hdn_tid" value="<?php echo $uid;?>">
	                  <input type="text" name="t_name" class="form-control" value="<?php echo $t_name;?>">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="t_mobile" class="form-control" value="<?php echo $t_mobile;?>">
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="t_email" class="form-control" value="<?php echo $t_email;?>">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="t_password" class="form-control" value="<?php echo $password;?>">
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="t_exp" class="form-control" value="<?php echo $t_exp;?>">
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="file" name="t_image" class="form-control" value="">
					  <input type="hidden" name="hdn_image" value="<?php echo $t_image;?>">
	                </div>
	            </div>
              </div>
              
              <div class="form-group"><center>
                <input type="submit"  name="update" value="Update Trainer" class="btn btn-primary py-3 px-5">
              </div>
			  
            </form>
			<?php
			}
			else
			{
			?>
			
			
			<form enctype="multipart/form-data" method="post" class="contact-form">
			<h1 class="mb-3">Add Trainer</h1>
              <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="t_name" class="form-control" placeholder="Trainer Name" onkeyup="showHint(this.value)" pattern="[A-Z a-z]+$" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="t_mobile" class="form-control" placeholder="Trainer Mobile" onkeyup="showHint(this.value)" pattern="[0-9]{10}" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="t_email" class="form-control" placeholder="Trainer Email" onkeyup="showHint(this.value)" pattern="[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="password" name="t_password" class="form-control" placeholder="Trainer Password like (Trainer@1234)*" onkeyup="showHint(this.value)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
	                </div>
	            </div>
              </div>
			  <div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="t_exp" class="form-control" placeholder="Trainer Experience (In Years)*"  onkeyup="showHint(this.value)" pattern="[0-9 A-Za-z]{5,8}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="file" name="t_image" class="form-control" value=" "  required>
	                </div>
	            </div>
              </div>
              
              <div class="form-group"><center>
                <input type="submit"  name="insert" value="Add Trainer" class="btn btn-primary py-3 px-5">
              </div>
			  
            </form>
			
			
			
			
			<?php
			}
			?>
          </div>
        </div>          
		</div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section bg-light">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<h3 class="subheading"></h3>
            <h2 class="mb-1">Our Trainer</h2>
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
				if($rest['status']=='yes')
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
							<h6><a href='admin_trainer.php?did=<?php echo $t_id;?>'><font color="red">Delete</font></a>&nbsp;&nbsp;&nbsp;<a href='admin_trainer.php?uid=<?php echo $t_id;?>'><font color="blue">Update</font></a></h6>
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
if(isset($_POST['insert']))
{
	
	
	$t_name= $_POST['t_name'];
	$t_mobile= $_POST['t_mobile'];
	$t_email= $_POST['t_email'];
	$t_password= $_POST['t_password'];
	$t_exp= $_POST['t_exp'];
	/*if(isset($_FILES['t_image']))
	{
		echo "<pre>";
		print_r($image=$_FILES['t_image']);
	}*/
	

	$filename = $_FILES["t_image"]["name"];
	$tempname = $_FILES["t_image"]["tmp_name"];
	$folder = "image/".$filename;
	
	move_uploaded_file($tempname,$folder);
	$status = "yes";
	
	$res = mysqli_query($con,"select * from tbl_trainer where t_email='$t_email'");
	if(mysqli_num_rows($res)>0)
	{
		echo "<script type='text/javascript'>";
		echo "alert('Trainer Already Exists');";
		echo "</script>";
	}
	else
	{
		$res1 = mysqli_query($con,"select max(t_id) from tbl_trainer");
		$t_id=0;
		while($id=mysqli_fetch_row($res1))
		{
			$t_id=$id[0];
		}
		$t_id++;
		$res1 = mysqli_query($con,"insert into tbl_trainer values($t_id,'$t_name','$t_mobile','$t_email','$t_password','$t_exp','$folder','$status')");
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
				$mail->Subject="Joining Mail";
				$mail->Body="<h1 align=center>spartant</h1><h4 align=center>Thank you <b>$t_name</b> for Join spartant Gym.<br>your email id for login is <b>$t_email</b> and password is <b>$t_password.</b></h4>";
								
				if(!$mail->send())
				{

					echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}
			echo "<script type='text/javascript'>";
			echo "alert('Trainer Added');";
			echo "window.location.href='admin_trainer.php';";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('check details!!!');";
			echo "window.location.href='admin_trainer.php';";
			echo "</script>";
		}
	}
	mysqli_close($con);
	
	
}
?>
<?php
if(isset($_POST['update']))
{
	
	$uid=$_POST['hdn_tid'];
	$t_name= $_POST['t_name'];
	$t_mobile= $_POST['t_mobile'];
	$t_email= $_POST['t_email'];
	$t_password= $_POST['t_password'];
	$t_exp= $_POST['t_exp'];
	$iimage=$_POST['hdn_image'];
	
		
		$filename = $_FILES["t_image"]["name"];
		$tempname = $_FILES["t_image"]["tmp_name"];
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
	
	$res1 = mysqli_query($con,"update tbl_trainer set t_name='$t_name',t_mobile='$t_mobile',t_email='$t_email',password='$t_password',t_exp='$t_exp',t_image='$image' where t_id='$uid'");
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
				$mail->Subject="Joining Mail";
				$mail->Body="<h1 align=center>spartant</h1><h4 align=center>Profile Update <b>$t_name</b><br>your email id for login is <b>$t_email</b> and password is <b>$t_password.</b></h4>";
								
				if(!$mail->send())
				{

					echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}
		echo "<script type='text/javascript'>";
		echo "alert('Trainer details updated');";
		echo "window.location.href='admin_trainer.php';";
		echo "</script>";
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "alert('check details!!!');";
		echo "window.location.href='admin_trainer.php';";
		echo "</script>";
	}
	mysqli_close($con);
	
	
}
?>