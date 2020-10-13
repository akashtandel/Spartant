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
$uid=$_GET['uid'];
if($did==true)
{
$res3 = mysqli_query($con,"update tbl_batch set status='no' where b_id='$did'");
if($res3=="1")
{
	echo "<script type='text/javascript'>";
	echo "alert('Batch Deleted');";
	echo "window.location.href='admin_batch.php';";
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
				<li class="nav-item"><a href="admin_payment.php" class="nav-link">payment</a></li>
				<li class="nav-item active"><a href="admin_batch.php" class="nav-link">Batch</a></li>
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
            <!--<h1 class="mb-3 bread">Add Batch</h1>-->

		<div class="md-8 contact-info ftco-animate bg-light p-4">
					<!--<div class="col-md-1"></div>-->
          <div class="col-md ftco-animate">
            
			<form method="post" class="contact-form" enctype="multipart/form-data">
			
            	
			 <!--<div class="row">
            	<div class="col-md-6">
	                <div class="form-group">
	                  <input type="text"  name="stime" class="form-control" placeholder="Start Time" onkeyup="showHint(this.value)"  pattern="[AMP: 0-9]{8}" required>
	                </div>
                </div>
                <div class="col-md-6">
	                <div class="form-group">
	                  <input type="text" name="etime" class="form-control" placeholder="End Time" onkeyup="showHint(this.value)" pattern="[AMP: 0-9]{8}" required>
	                </div>
	            </div>
              </div>-->
			  <?php
			  if($uid==true)
			  {
				$sqlq=mysqli_query($con,"select * from tbl_batch where b_id='$uid'");
				while($resq=mysqli_fetch_array($sqlq))
				{
						$stime=$resq[1];
						$etime=$resq[2];
				}
			  ?>
			  <h1 class="mb-3">Update Batch</h1>
			  <div class="row">
				<div class="col-md-6">
					<input type="hidden" name="hdn_bid" value="<?php echo $uid;?>">
	                <div class="form-group">
	                  <font color="black">Update Start Time:-</font>
					<select name="stime" class="form-group">
						<option class="form-group" value="<?php echo $stime;?>"><?php echo $stime;?></option>
						<option class="form-group" value="06:00 AM">06:00 AM</option>
						<option class="form-group" value="07:00 AM">07:00 AM</option>
						<option class="form-group" value="08:00 AM">08:00 AM</option>
						<option class="form-group" value="09:00 AM">09:00 AM</option>
						<option class="form-group" value="10:00 AM">10:00 AM</option>
						<option class="form-group" value="11:00 AM">11:00 AM</option>
						<option class="form-group" value="12:00 PM">12:00 PM</option>
						<option class="form-group" value="04:00 PM">04:00 PM</option>
						<option class="form-group" value="05:00 PM">05:00 PM</option>
						<option class="form-group" value="06:00 PM">06:00 PM</option>
						<option class="form-group" value="07:00 PM">07:00 PM</option>
						<option class="form-group" value="08:00 PM">08:00 PM</option>
						<option class="form-group" value="09:00 PM">09:00 PM</option>
						
					</select>
	                </div>
					
	            </div>
            	<div class="col-md-6">
	                <div class="form-group">
	                  <font color="black">Update End Time:-</font>
					<select name="etime" class="form-group">
						<option class="form-group" value="<?php echo $etime;?>"><?php echo $etime;?></option>
						<option class="form-group" value="07:00 AM">07:00 AM</option>
						<option class="form-group" value="08:00 AM">08:00 AM</option>
						<option class="form-group" value="09:00 AM">09:00 AM</option>
						<option class="form-group" value="10:00 AM">10:00 AM</option>
						<option class="form-group" value="11:00 AM">11:00 AM</option>
						<option class="form-group" value="12:00 PM">12:00 PM</option>
						<option class="form-group" value="04:00 PM">04:00 PM</option>
						<option class="form-group" value="05:00 PM">05:00 PM</option>
						<option class="form-group" value="06:00 PM">06:00 PM</option>
						<option class="form-group" value="07:00 PM">07:00 PM</option>
						<option class="form-group" value="08:00 PM">08:00 PM</option>
						<option class="form-group" value="09:00 PM">09:00 PM</option>
						<option class="form-group" value="10:00 PM">10:00 PM</option>
						
					</select>
	                </div>
                </div>
              </div>
			  <div class="form-group"><center>
                <input type="submit" name="update" value="Update Batch" class="btn btn-primary py-3 px-5">
              </div>
			  <?php
			  }
			  else
			  {
				?>
				<h1 class="mb-3">Add Batch</h1>
				<div class="row">
				<div class="col-md-6">
	                <div class="form-group">
	                  <font color="black">Select Start Time:-</font>
					<select name="stime" class="form-group">
						
						<option class="form-group" value="06:00 AM">06:00 AM</option>
						<option class="form-group" value="07:00 AM">07:00 AM</option>
						<option class="form-group" value="08:00 AM">08:00 AM</option>
						<option class="form-group" value="09:00 AM">09:00 AM</option>
						<option class="form-group" value="10:00 AM">10:00 AM</option>
						<option class="form-group" value="11:00 AM">11:00 AM</option>
						<option class="form-group" value="12:00 PM">12:00 PM</option>
						<option class="form-group" value="04:00 PM">04:00 PM</option>
						<option class="form-group" value="05:00 PM">05:00 PM</option>
						<option class="form-group" value="06:00 PM">06:00 PM</option>
						<option class="form-group" value="07:00 PM">07:00 PM</option>
						<option class="form-group" value="08:00 PM">08:00 PM</option>
						<option class="form-group" value="09:00 PM">09:00 PM</option>
						
					</select>
	                </div>
					
	            </div>
            	<div class="col-md-6">
	                <div class="form-group">
	                  <font color="black">Select End Time:-</font>
					<select name="etime" class="form-group">
						
						
						<option class="form-group" value="07:00 AM">07:00 AM</option>
						<option class="form-group" value="08:00 AM">08:00 AM</option>
						<option class="form-group" value="09:00 AM">09:00 AM</option>
						<option class="form-group" value="10:00 AM">10:00 AM</option>
						<option class="form-group" value="11:00 AM">11:00 AM</option>
						<option class="form-group" value="12:00 PM">12:00 PM</option>
						<option class="form-group" value="04:00 PM">04:00 PM</option>
						<option class="form-group" value="05:00 PM">05:00 PM</option>
						<option class="form-group" value="06:00 PM">06:00 PM</option>
						<option class="form-group" value="07:00 PM">07:00 PM</option>
						<option class="form-group" value="08:00 PM">08:00 PM</option>
						<option class="form-group" value="09:00 PM">09:00 PM</option>
						<option class="form-group" value="10:00 PM">10:00 PM</option>
						
					</select>
	                </div>
                </div>
              </div>  
				<div class="form-group"><center>
                <input type="submit" name="batch" value="Add Batch" class="btn btn-primary py-3 px-5">
              </div>
			  <?php
			  }
			  ?>
            </form>

			
			
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
            <h2 class="mb-1">Batch</h2>
          </div>
        </div>
		<div class="card-body">
              <table id="example1" border="1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th><font color="blue">Update</font></th>
                  <th><font color="red">Delete</font></th>
                </tr>
                </thead>
                <tbody>
				<?php
				$sqlq=mysqli_query($con,"select * from tbl_batch");
				while($resq=mysqli_fetch_assoc($sqlq))
				{
					$b_id=$resq['b_id'];
					$stime=$resq['stime'];
					$etime=$resq['etime'];
					if($resq['status']=="yes")
					{
					
				?>				
                <tr>
                  <td><?php echo $b_id;?></td>
                  <td><?php echo $stime;?></td>
                  <td><?php echo $etime;?></td>
                  
                  <td><a href='admin_batch.php?uid=<?php echo $b_id;?>'><font color="blue"><u>Update</u></font></a></td>
                  <td><a href='admin_batch.php?did=<?php echo $b_id;?>'><font color="red"><u>Delete</u></font></a></td>
                </tr>
				<?php
					}
				}
				
				
				?>
                
                </tbody>
                
              </table>
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
if(isset($_POST['batch']))
{
	
	
	$stime= $_POST['stime'];
	$etime= $_POST['etime'];
	
	$status = "yes";
	$res = mysqli_query($con,"select * from tbl_batch where stime='$stime' and etime='$etime'");
	if(mysqli_num_rows($res)>0)
	{
		echo "<script type='text/javascript'>";
		echo "alert('Batch Already Exists');";
		echo "</script>";
	}
	else
	{
		$res1 = mysqli_query($con,"select max(b_id) from tbl_batch");
		$b_id=0;
		while($id=mysqli_fetch_row($res1))
		{
			$b_id=$id[0];
		}
		$b_id++;
		$res1 = mysqli_query($con,"insert into tbl_batch values($b_id,'$stime','$etime','$status')");
		echo $res1;
		if($res1=="1")
		{
			echo "<script type='text/javascript'>";
			echo "alert('Batch Added');";
			echo "window.location.href='admin_batch.php';";
			echo "</script>";
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('check details!!!');";
			echo "window.location.href='admin_batch.php';";
			echo "</script>";
		}
	}
	mysqli_close($con);
	
	
}
?>
<?php
if(isset($_POST['update']))
{
		
	$stime=$_POST['stime'];
	$etime=$_POST['etime'];
	
	$res1 = mysqli_query($con," update tbl_batch set stime='$stime',etime='$etime' where b_id='$uid' ");
	echo $res1;
	if($res1=="1")
	{
		echo "<script type='text/javascript'>";
		echo "alert('Batch Update');";
		echo "window.location.href='admin_batch.php';";
		echo "</script>";
	}
	else
	{
		echo "<script type='text/javascript'>";
		echo "alert('check details!!!');";
		echo "window.location.href='admin_batch.php';";
		echo "</script>";
	}
	mysqli_close($con);
}
?>