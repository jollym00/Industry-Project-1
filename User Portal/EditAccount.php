<!DOCTYPE html>
<html lang="en">

<head>
<title>Account</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav class="navbar sticky-top navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="/User Portal/index.html">Lahebo</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			  <div class="navbar-nav">
				<div class="d-flex justify-content-between">
					<a class="nav-link" href="search.html" >Legislation Search</a>
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

    <div class="d-flex justify-content-center">
        <div class="row d-flex justify-content-center">
        <h4>Account Details</h4>
        <form action="php/updateaccount.php" method="post" >
            <?php 	
                include('php/connection.php');
                session_start();
                $id = $_SESSION['ID'];
                $sql = "select * from customer where ClinetID = $id";
                $result = mysqli_query($con, $sql);  
                while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		    ?>

            <div class="mb-3">
			  <label for="username" class="form-label">Username</label>
			  <input type="username" class="form-control" name="FullName" value="<?php echo $row1['Full Name']; ?>">
			</div>

            <div class="mb-3">
				<label for="email" class="form-label">Email address</label>
				<input type="email" class="form-control" name="email" value="<?php echo $row1['Email']; ?>">
			</div>

            <div class="mb-3">
				<label for="phone" class="form-label">Phone</label>
				<input type="text" class="form-control" name="MobilePhone" value="<?php echo $row1['MobilePhone']; ?>">
			</div>

			<div class="mb-3">
				<label for="company" class="form-label">Company Name</label>
				<input type="text" class="form-control" name="company" value="<?php echo $row1['Company']; ?>">
			</div>

            <div class="mb-3">
				<label for="Password" class="form-label">Password</label>
				<input type="password" class="form-control" name="Password" value="<?php echo $row1['Password']; ?>">
			</div>

			<button id="updateBtn" type="submit" class="btn btn-primary">Update Account Details</button>
            <?php } ?>
        </form>
    </div>
</body>
</html>