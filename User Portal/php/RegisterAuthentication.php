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