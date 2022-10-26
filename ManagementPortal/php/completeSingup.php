<!DOCTYPE html>
<html lang="en">

<head>
	<title>Payment</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="../../css/main.css" rel="stylesheet">
	<style>	#stafflogin {position:absolute;	right: 10px;}</style>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<nav class="navbar sticky-top navbar-expand-lg ">
		<div class="container-fluid"><a class="navbar-brand" href="../homepage.php">
      			<img src="../../img/mainLogo.png" alt="..." height="36">
    		</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
			  <div class="navbar-nav">
				<div class="d-flex justify-content-between">
					<a class="nav-link" href="../search.php" >Search</a>
					<a class="nav-link" href="../Addlegislation.php">Add Legislation</a>
					<a class="nav-link" href="../customer.php">Customer</a>
					<a class="nav-link" href="../sign_up.html">Add Staff</a>
                    <a class="nav-link" href="../Editstaff.php">Staff</a>  
					<a class="nav-link" href="../stafflogin.html" id="stafflogin">Logout</a>   
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
		$txtPhone = $_POST['phone'];
		$role = $_POST['role'];
		$sql = "INSERT INTO `managementUser`(`Full_Name`, `Email`, `Password`, `Phone`, `role`, `Active`, `GoogleCode`)
							VALUES ('$txtName', '$txtEmail', '$txtPassword', '$txtPhone', '$role', 'Active', 'null' )";
							
			// Change active to Inactive once the website is deployed
			$rs = mysqli_query($con, $sql);
			$last_id = mysqli_insert_id($con);
			$_SESSION['idmanagementUser'] = $last_id;

			
			echo "<div class='parent container d-flex justify-content-center align-items-center '>";
			echo "<div class='row d-flex justify-content-center'>";
			include('RegisterAuthentication.php'); 
			echo "</div>";
			echo "</div>";

		?>
	</div>

</body>
</html>