<?php
	require_once 'PHPGangsta/GoogleAuthenticator.php';
	include('connection.php');
	session_start();
	$id = $_SESSION['idmanagementUser'];
    //database table for management users
	$sql = "SELECT `GoogleCode` FROM `managementUser` where idmanagementUser = '$id'";  
	$a = mysqli_query($con, $sql);  
	$row = mysqli_fetch_array($a, MYSQLI_ASSOC);
	$secret = $row["GoogleCode"];
	$code = $_POST['google_code'];
	$ga = new PHPGangsta_GoogleAuthenticator();
	$result = $ga->verifyCode($secret, $code, 3);
	if ($result == 1){
		header("Location: ../homepage.php");
	}
	else {
		header("Location: ../authenticaationfail.php");
	}
?>