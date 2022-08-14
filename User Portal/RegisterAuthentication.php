<?php
	require_once 'PHPGangsta/GoogleAuthenticator.php';
	include('php/connection.php'); 
	$ga = new PHPGangsta_GoogleAuthenticator();
	$secret = $ga->createsecret();
	
	echo $secret.'<br />'; 
	
	$qr = $ga->getQRCodeGoogleUrl('Compliance Plus', $secret);
	echo '<img src="'.$qr.'" /><br />';
	
	$myCode = $ga->getCode($secret);
	$result = $ga->verifyCode($secret, $myCode, 3);

	session_start();
	
	$ClinetID = $_SESSION['ClinetID'];
	echo $ClinetID;
	$sql = "UPDATE `customer`  SET `GoogleCode`='$secret' where `ClinetID`= '$ClinetID'";
	$rs = mysqli_query($con, $sql);
	echo "<a href='login.html'><button type='button' name='HomeBtn' id='HomeBtn'>Login in</button></a>";
?>