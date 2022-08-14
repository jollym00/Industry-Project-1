<?php
include('connection.php');  

session_start();



// get the post records
$txtName = $_POST['name'];
$txtEmail = $_POST['email'];
$txtPassword = $_POST['password'];
$txtCompany = $_POST['company'];
$txtPayment = $_POST['payment'];
$AutoRenew = $_POST['AutoRenew'];

if($txtPayment == "yearly" )
{
    $newDate = date('Y-m-d', strtotime(' + 1 years'));
  
    echo $newDate;
}
else {
	
	$newDate = date('Y-m-d', strtotime(' + 1 months'));
  
    echo $newDate;
}
$sql = "INSERT INTO `customer`(`Full Name`, `Email`, `Password`, `Company`, `Paymentsub`, `Renew`, `Active`, `DateExpiery`, `GoogleCode`)
                    VALUES ('$txtName', '$txtEmail', '$txtPassword', '$txtCompany', '$txtPayment', '$AutoRenew','Active','$newDate', 'null' )";
$rs = mysqli_query($con, $sql);

if($rs)
{
		$last_id = mysqli_insert_id($con);
		$_SESSION['ClinetID'] = $last_id;
		header("Location: ../RegisterAuthentication.php");

}
else {
	echo "Error occured Restart again";

}
 
?>