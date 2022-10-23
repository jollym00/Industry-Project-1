<?php
	require_once 'PHPGangsta/GoogleAuthenticator.php';
	include('connection.php'); 
	$ga = new PHPGangsta_GoogleAuthenticator();
	$secret = $ga->createsecret();
	echo "<p> Download Google Authenticator app on 
	
	<a href='https://apps.apple.com/us/app/google-authenticator/id388497605' target='_blank'>
	
	IOS App store </a> or 
	
	<a href='https://play.google.com/store/apps/details?id=com.google.android.apps.authenticator2&hl=en' target='_blank'>
	
	Google Play Store  </a>  and scan the QR or enter the Cdoe <br /> <br />";
	echo $secret.'<br /> <br />'; 
	
	$qr = $ga->getQRCodeGoogleUrl('Compliance Plus', $secret);
	echo '<img src="'.$qr.'" /><br /><br />';
	
	$myCode = $ga->getCode($secret);
	$result = $ga->verifyCode($secret, $myCode, 3);
	$ClinetID = $_SESSION['ClinetID'];
	$sql = "UPDATE `customer`  SET `GoogleCode`='$secret' where `ClinetID`= '$ClinetID'";
	$rs = mysqli_query($con, $sql); 

	
?>

<div class="d-flex justify-content-center">
        
      		<div class="row d-flex justify-content-center">
				<form method="post" action="verfication.php">
					<div class="mb-3">
						<h4 for="exampleInputEmail1" class="form-label">Token</h4>
						<input type="text" name="google_code" class="form-control" id="google_token" aria-describedby="token">
						<div id="token_hint" class="form-text">Please enter your token from the google authenticator app</div>
					</div>
					<button type="submit" class="btn btn-primary" id="submit_code">Submit</button>
				</form>
			</div>
</div>