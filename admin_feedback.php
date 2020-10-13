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

$did=$_GET['did'];
if($did==true)
{
$res3 = mysqli_query($con,"update tbl_payment set status='no' where p_id='$did'");
if($res3=="1")
{
	echo "<script type='text/javascript'>";
	echo "alert('Record Deleted');";
	echo "window.location.href='admin_payment.php';";
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
						    <p class="mb-0 register-link"> <h3><span>Hello</span> <span>Admin</span> <h3> </p>
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
	        	<li class="nav-item "><a href="admin_trainer.php" class="nav-link">Add Trainer</a></li>
				<li class="nav-item "><a href="admin_payment.php" class="nav-link">payment</a></li>
				<li class="nav-item"><a href="admin_batch.php" class="nav-link">Batch</a></li>
				<li class="nav-item active"><a href="admin_feedback.php" class="nav-link">Feedback</a></li>
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
            <h1 class="mb-3 bread">feedbacks</h1>

		      
		</div>
        </div>
      </div>
    </section>
	
	<section class="ftco-section bg-light">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<h3 class="subheading"></h3>
            <h2 class="mb-1">Feedbacks</h2>
          </div>
        </div>
		<div class="card-body">
              <table id="example1" border="1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Name</th>
                  <th>For</th>
                  <th>Message</th>

                </tr>
                </thead>
                <tbody>
				<?php
				$sqlq=mysqli_query($con,"select f_id,m_name,type,message,t_name from tbl_feedback f,tbl_member m,tbl_trainerallocation ta ,tbl_trainer t where m.m_id=f.m_id and ta.m_id=f.m_id and ta.t_id=t.t_id ");
				while($resq=mysqli_fetch_assoc($sqlq))
				{
					$f_id=$resq['f_id'];
					$m_name=$resq['m_name'];
					$type=$resq['type'];
					$message=$resq['message'];
					$t_name=$resq['t_name'];
					if($type=="gym")
					{
						$sub="GYM";
					}
					else
					{
						$sub=$t_name;
					}
					
				?>				
                <tr>
                  <td><?php echo $f_id;?></td>
                  <td><?php echo $m_name;?></td>
                  <td><?php echo $sub;?></td>
                  <td><?php echo $message;?></td>
                </tr>
				<?php
				}
				?>
                </tbody>
                
              </table>
            </div>
            

    	</div>
    </section>


	<!--<section class="ftco-section contact-section">
      <div class="container">
        <div class="row block-9">
		
		<div class="col-md-4 contact-info ftco-animate bg-light p-4">
					<!--<div class="col-md-1"></div>
          <div class="col-md ftco-animate">
            <form action="#" method="post" class="contact-form">
				
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Email-id">
              </div>
			  <div class="form-group">
                <input type="text" class="form-control" placeholder="Password">
              </div>
              
              <div class="form-group"><center>
                <input type="submit" value="login" class="btn btn-primary py-3 px-5">
              </div>
            </form>
          </div>
        </div>
        </div>
      </div>
    </section>-->

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
if(isset($_POST['payment']))
{
	
	
	$m_id= $_POST['m_id'];
	$p_months= $_POST['p_months'];
	$p_amount= $_POST['p_amount'];
	$p_date= $_POST['p_date'];
	$status = "yes";
	
	
		$res1 = mysqli_query($con,"select max(p_id) from tbl_payment");
		$p_id=0;
		while($id=mysqli_fetch_row($res1))
		{
			$p_id=$id[0];
		}
		$p_id++;
		$res1 = mysqli_query($con,"insert into tbl_payment values($p_id,'$m_id','$p_months','$p_amount','$p_date','$status')");
		echo $res1;
		if($res1=="1")
		{
			echo "<script type='text/javascript'>";
			echo "alert('payment Done');";
			echo "window.location.href='admin_payment.php';";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('check details!!!');";
			echo "window.location.href='admin_payment.php';";
			echo "</script>";
		}
	mysqli_close($con);
	
	
}
?>