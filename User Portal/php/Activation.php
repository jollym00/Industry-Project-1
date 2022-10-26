<?php
	session_start();
	include('php/connection.php'); 
	$ClinetID = $_SESSION['ClinetID'];
	$sql = "UPDATE `customer`  SET `Active`='Active' where `ClinetID`= '$ClinetID'";
	$rs = mysqli_query($con, $sql); 

    header("Location: ../login.php");
?>