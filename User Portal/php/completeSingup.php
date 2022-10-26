<!DOCTYPE html>
<html lang="en">

<head>
	<title>Payment</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="../css/main.css" rel="stylesheet">
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav class="navbar sticky-top navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="../../index.html">Lahebo</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			  <div class="navbar-nav">
			  <div class="d-flex justify-content-between">
					<a class="nav-link" href="../../Pricing.html" >Pricing</a>
					<a class="nav-link" href="../../FAQ.html">FAQ</a>
					<a class="nav-link" href="login.php">Login</a>
					<a class="nav-link" href="sign_up.html">Sign Up</a>
					<a class="nav-link" href="../ManagementPortal/stafflogin.html" id="stafflogin">Staff Login</a>   
				</div>
			  </div>
			</div>
		  </div>
	</nav>
	<div>
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

		if($txtPayment == "yearly" )		{
			$newDate = date('Y-m-d', strtotime(' + 1 years'));
		}
		else {			
			$newDate = date('Y-m-d', strtotime(' + 1 months'));		
		}

		$sql = "INSERT INTO `customer`(`Full Name`, `Email`, `Password`, `Company`, `Paymentsub`, `Renew`, `Active`, `DateExpiery`, `GoogleCode`)
							VALUES ('$txtName', '$txtEmail', '$txtPassword', '$txtCompany', '$txtPayment', '$AutoRenew','Active','$newDate', 'null' )";
		
		// Change active to Inactive once the website is deployed
		$rs = mysqli_query($con, $sql);
		$last_id = mysqli_insert_id($con);
		$_SESSION['ClinetID'] = $last_id;

		
		echo "<div class='parent container d-flex justify-content-center align-items-center '>";
		echo "<div class='row d-flex justify-content-center'>";
		include('RegisterAuthentication.php'); 
		

		if ($AutoRenew == "no" && $txtPayment =="yearly"){
			echo "<table class='table table-striped'>
				<thead>
					<tr>
						<th>Qty</th>
						<th>Description </th>
						<th>Auto Renew </th>
						<th>Time </th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Lahebo</td>
					<td>No</td>
					<td>Yearly</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan='2'>
					<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
						<input type='hidden' name='cmd' value='_s-xclick'>
						<input type='hidden' name='hosted_button_id' value='ERZHP7Z8FGFLS'>
						<input type='image' src='https://www.paypalobjects.com/en_AU/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal – The safer, easier way to pay online!'>
						<img alt='' border='0' src='https://www.paypalobjects.com/en_AU/i/scr/pixel.gif' width='1' height='1'>
					</form>	
					
					</td>
				</tr>
				</tbody>
			</table>";
		}

		else if ($AutoRenew == "no" && $txtPayment =="monthly"){
			echo "<table class='table table-striped'>
				<thead>
					<tr>
						<th>Qty</th>
						<th>Description </th>
						<th>Auto Renew </th>
						<th>Time </th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Lahebo</td>
					<td>No</td>
					<td>Monthly</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan='2'>
						<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
							<input type='hidden' name='cmd' value='_s-xclick'>
							<input type='hidden' name='hosted_button_id' value='WZEZWA9UDK6LN'>
							<input type='image' src='https://www.paypalobjects.com/en_AU/i/btn/btn_buynowCC_LG.gif' border='0' name='submit' alt='PayPal – The safer, easier way to pay online!'>
							<img alt='' border='0' src='https://www.paypalobjects.com/en_AU/i/scr/pixel.gif' width='1' height='1'>
						</form>
					</td>
				</tr>
				</tbody>
			</table>";

		}

		else if ($AutoRenew == "yes" && $txtPayment =="yearly") {
			echo "<table class='table table-striped'>
				<thead>
					<tr>
						<th>Qty</th>
						<th>Description </th>
						<th>Auto Renew </th>
						<th>Time </th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Lahebo</td>
					<td>Yes</td>
					<td>Yearly</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan='2'>
						<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target='_top'>
							<input type='hidden' name='cmd' value='_s-xclick'>
							<input type='hidden' name='hosted_button_id' value='2NLUWW5RYCJG4'>
							<input type='image' src='https://www.paypalobjects.com/en_AU/i/btn/btn_subscribeCC_LG.gif' border='0' name='submit' alt='PayPal – The safer, easier way to pay online!'>
							<img alt='' border='0' src='https://www.paypalobjects.com/en_AU/i/scr/pixel.gif' width='1' height='1'>
						</form>
						
					
					</td>
				</tr>
				</tbody>
			</table>";

		}

		else if ($AutoRenew == "yes" && $txtPayment =="monthly") {
			echo "<table class='table table-striped'>
				<thead>
					<tr>
						<th>Qty</th>
						<th>Description </th>
						<th>Auto Renew </th>
						<th>Time </th>
					</tr>
				</thead>
				<tbody>
				<tr>
					<td>1</td>
					<td>Lahebo</td>
					<td>Yes</td>
					<td>Monthly</td>
				</tr>
				<tr>
					<td></td>
					<td></td>
					<td colspan='2'>
						<form action='https://www.paypal.com/cgi-bin/webscr' method='post' target=_top'>
							<input type='hidden' name='cmd' value='_s-xclick'>
							<input type='hidden' name='hosted_button_id' value='K5ML5GWTBATKN'>
							<input type='image' src='https://www.paypalobjects.com/en_AU/i/btn/btn_subscribeCC_LG.gif' border='0' name='submit' alt='PayPal – The safer, easier way to pay online!'>
							<img alt='' border='0' src='https://www.paypalobjects.com/en_AU/i/scr/pixel.gif' width='1' height='1'>
						</form>
					</td>
				</tr>
				</tbody>
			</table>";

		}
				
		echo "</div>";
		echo "</div>";

		?>
	</div>

</body>
</html>