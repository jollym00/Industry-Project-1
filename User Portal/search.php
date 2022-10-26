<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Search</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
			<link href="../css/main.css" rel="stylesheet">
	</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav class="navbar sticky-top navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="search.html">
				<img src="../img/mainLogo.png" alt="..." height="36">
		  </a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			  <div class="navbar-nav">
				<div class="d-flex justify-content-between">
					<a class="nav-link" href="homepage.html" >Legislation Search</a>
					<a class="nav-link" href="SubcribeUnsubcribe.php" >My Legislations</a>
					<a class="nav-link" href="EditAccount.php" >Account</a>
					<a class="nav-link" href="login.php">Sign Out</a>
				</div>
			  </div>
			</div>
		</div>
	</nav> 
	<br>
	<br>
	<div hiiden>
		<?php
		session_start();
		unset($_SESSION['Search']);	
		
		?>
	</div>
	<div class="d-flex justify-content-center">
		<div div class="row d-flex justify-content-center">
			<h3>Search Legislations</h3>
			
			<form method="post" action="search_result.php">
				<div class="mb-3">
					<input type="text" class="form-control" name="Search" placeholder="Search ...">
				</div>				
				<button id="searchBtn" type="submit" class="btn btn-primary">Search</button>
			</form>
        
    	</div>
	</div>


</body>
</html>
