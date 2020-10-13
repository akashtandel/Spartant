<?php
session_start();
include("connect.php");
error_reporting(0);
$amount=$_GET['amount'];
$months=$_GET['months'];
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
$m_email=$res['m_email'];
$m_mobile=$res['m_mobile'];

$res1 = mysqli_query($con,"select max(p_id) from tbl_payment");
$p_id=0;
while($id=mysqli_fetch_row($res1))
{
	$p_id=$id[0];
}
$p_id++;
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
  

   
	<section class="ftco-section bg-light">
    	<div class="container-fluid px-4">
    		<div class="row justify-content-center mb-5">
          <div class="col-md-7 heading-section text-center ftco-animate">
          	<h3 class="subheading"></h3>
            <h2 class="mb-1">Payment</h2>
          </div>
        </div>
		<div>
			
			<form name="eee"  method="post">
			<center><h3><font color="orange"> INVOICE </font></h3></center>
				<table class="table table-condensed"> 
					<tr>
						<td class="cart_description"><h4>Payment Id:- <font color="red"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$p_id; ?></font></h4></td>
						<input type="hidden" name="hdn_pid" value="<?php echo $p_id; ?>" />
						<td class="date" align="right"><h4>Date :-<font color="red"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".date("Y-m-d"); ?></font></h4></td>
						<input type="hidden" name="hnd_date" value="<?php echo date("Y-m-d"); ?>" />
						<input type="hidden" name="hnd_mid" value="<?php echo $m_id; ?>" />
					</tr>
					<tr>
						<td class="cart_description"><h4>Member Name :-<font color="red"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$m_name;?></font></h4></td>
						<input type="hidden" name="hnd_mname" value="<?php echo $m_name; ?>" />
						<td class="size" align="right"><h4>Email-id:-<font color="red"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$m_email; ?></font></h4></td>
						<input type="hidden" name="hnd_email" value="<?php echo $m_email; ?>" />
					</tr>
					<tr>
						<td class="cart_description"><h4>Mobile No :-<font color="red"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$m_mobile;?></font></h4></td>
						<td class="cart_description" align="right"><h4>Amount :-<font color="red"><?php echo "&nbsp;&nbsp;&nbsp;&nbsp;".$amount;?></font></h4></td>
					</tr>
					
				</table>
				<center>
				<input type="hidden" name="hndamount" value="<?php echo $amount; ?>" />
				<input type="hidden" name="hnd_months" value="<?php echo $months; ?>" />
				<div class="form-group"><center>
				<input type="submit" name="okay"  class="btn btn-primary py-3 px-5" value="OKAY" /> 
				<a href="pricing.php" class="btn btn-primary py-3 px-5">Back</a> 
				</div>

				</center>
			</div>
			</form>
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
<?php
if(isset($_POST['okay']))
{		
		$m_email = $_POST['hnd_email'];
		$m_name = $_POST['hnd_mname'];
		
		$p_id = $_POST['hdn_pid'];
		$m_id = $_POST['hnd_mid'];
		$p_months = $_POST['hnd_months'];
		$p_amount = $_POST['hndamount'];
		$p_date = $_POST['hnd_date'];
		$payment = "pending";
		$status="yes";
		
		$res1 = mysqli_query($con,"insert into tbl_payment values($p_id,'$m_id','$p_months','$p_amount','$p_date','$payment','$status')");
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
				$mail->addAddress($m_email);
				$mail->addReplyTo($m_email);

				$mail->isHTML(true);
				$mail->Subject="Payment processing";
				$mail->Body="<h1 align=center>spartant</h1><h4 align=center><b>$m_name</b> your Payment request is processed .your payment id is <font color='red'>$p_id</font> and Amount is <font color='red'>$p_amount</font> for <font color='red'>$p_months</font> months.Give your payment to counter and complet your payment</h4>";
								
				if(!$mail->send())
				{

					echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
				}
			echo "<script type='text/javascript'>";
			echo "alert('payment is processed ');";
			echo "window.location.href='pricing.php';";
			echo "</script>";
		
		}
		else
		{
			echo "<script type='text/javascript'>";
			echo "alert('check details!!!');";
			echo "window.location.href='pricing.php';";
			echo "</script>";
		}
		mysqli_close($con);
		
}
?>