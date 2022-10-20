<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Home</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
			<link href="css/main.css" rel="stylesheet">
	</head>

	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav class="navbar sticky-top navbar-expand-lg ">
		<div class="container-fluid">
			<a class="navbar-brand" href="../index.html">Lahebo</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
			  <div class="navbar-nav">
				<div class="d-flex justify-content-between">
					<a class="nav-link" href="../Pricing.html" >Pricing</a>
					<a class="nav-link" href="../FAQ.html">FAQ</a>
					<a class="nav-link" href="User Portal/login.php">Login</a>
					<a class="nav-link" href="User Portal/sign_up.html">Sign Up</a>
					<a class="nav-link" href="../ManagementPortal/stafflogin.html" id="stafflogin">Staff Login</a>   
				</div>
			  </div>
			</div>
		  </div>
	  </nav>
    <br><br>
		<?php
			include('php/connection.php');
			session_start();
			$id = $_SESSION['ID'];
			$sql = "SELECT * FROM `customer` where ClinetID = '$id'";
			$a = mysqli_query($con, $sql);
			$row = mysqli_fetch_array($a, MYSQLI_ASSOC);

			$currentDate = date('Y-m-d');

			if ($currentDate < $row["DateExpiery"] && $row["Active"] == "Active" || $row["Renew"] == "yes" && $row["Active"] == "Active"){
				header("Location: search.php");
			}

			
		?>


		<div class="d-flex justify-content-center">
        
      		<div class="row d-flex justify-content-center">
				<?php

					echo '<h4> Account Name: ' . $row["Full Name"] . '</h4>';

				?>
				<br>
				<p> You account has been expired. Please update your payment or subscribe to the payment plan </p>
				<form method="post" action="php/paymentupdate.php">
					<p>Yearly / Monthly payment</p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="payment" value="yearly">
						<label class="form-check-label" for="yearly">Yearly</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="payment" value="monthly" checked>
						<label class="form-check-label" for="Monthly">Monthly</label>
					</div>
					<br>
        			<p>Auto Renew</p>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="AutoRenew" value="yes">
						<label class="form-check-label" for="Yes">Yes</label>
					</div>
					<div class="form-check">
						<input class="form-check-input" type="radio" name="AutoRenew" value="no" checked>
						<label class="form-check-label" for="No">No</label>
					</div>
          			<br>
          			<button id="signupBtn" type="submit" class="btn btn-primary">Update Payment</button>
				</form>
			</div>
		</div>
	<body>
</html>