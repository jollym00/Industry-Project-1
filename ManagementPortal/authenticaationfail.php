<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Home</title>
			<meta charset="UTF-8">
			<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
			<link href="../css/main.css" rel="stylesheet">
			<style>	#stafflogin {position:absolute;	right: 10px;}</style>
	</head>

	<body>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
		<nav class="navbar sticky-top navbar-expand-lg">
			<div class="container-fluid">
			<a class="navbar-brand" href="../index.html">
      			<img src="../img/mainLogo.png" alt="..." height="36">
    		</a>
			</div>
		</nav> 
		<br>
		<br>
		<div class="d-flex justify-content-center">
        
      		<div class="row d-flex justify-content-center">
				<form method="post" action="php/authentication.php">
					<div class="mb-3">
						<label for="exampleInputEmail1" class="form-label">Token</label>
						<p id="error">Incorrect Credentials. Please Try again</p>
						<input type="text" name="google_code" class="form-control" id="google_token" aria-describedby="token">
						<div id="token_hint" class="form-text">Please enter your token from the google authenticator app</div>
					</div>
					<button type="submit" class="btn btn-primary" id="submit_code">Submit</button>
				</form>
			</div>
		</div>
	<body>
</html>