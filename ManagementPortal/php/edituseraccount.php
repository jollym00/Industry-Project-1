<?php
include('connection.php'); 
$id = $_POST['ClinetID'];
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$Password = $_POST['password'];
$Phone = $_POST['phone'];
$company = $_POST['company'];
$Active = $_POST['Active'];

$sql = "UPDATE customer SET  `Full Name` = '$txtName',   Email = '$txtEmail',  `Password` = '$Password', MobilePhone = '$Phone',Active = '$Active', `Company` = '$company'WHERE ClinetID = $id";
$rs = mysqli_query($con, $sql);	
header("Location: ../customer.php");

?>