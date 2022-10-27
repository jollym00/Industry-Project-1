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
	$userID = $_SESSION['idmanagementUser'];
	$sql = "UPDATE `managementUser`  SET `GoogleCode`='$secret' where `idmanagementUser`= '$userID'";
	$rs = mysqli_query($con, $sql); 
?>

<div hidden>
	<?php
		$sql1 = "select Email from managementUser where `idmanagementUser`= '$userID'";
		$r1 = mysqli_query($con, $sql1);
		while($row = mysqli_fetch_array($r1)){
			$mail = $row['Email'];
			include('mailAuthentication.php');
		}
	?>
</div>
	
