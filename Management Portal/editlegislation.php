<!DOCTYPE html>
<html lang="en">

<head>
	<title>Edit Legislation</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<nav class="navbar sticky-top navbar-expand-lg">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">Lahebo</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			  <div class="navbar-nav">
          <div class="d-flex justify-content-between">
            <a class="nav-link" href="homepage.html" >Legislation Search</a>
            <a class="nav-link" href="addlegislation.html" >Add Legislations</a>
            <a class="nav-link" href="editlegislation.html" >Edit Legislations</a>
            <a class="nav-link" href="login.php">Sign Out</a>
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
        $sql = "select * from customer where ClinetID = $id";
        $result = mysqli_query($con, $sql);  
        while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	?>
	<div class="d-flex justify-content-center">
        
		<div class="row d-flex justify-content-center">
		  <h4>Edit Legislation</h4>
		  <form method="post" action="php/addLegislation.php">
		  <div class="mb-3">
			<label for="Act" class="form-label">Act</label> 
			<input type="text" class="form-control" name="Act">
		  </div>
		  <div class="mb-3">
			<label for="Division" class="form-label">Division</label>
			<input type="text" class="form-control" name="Division">
		  </div>
		  <div class="mb-3">
			<label for="LegNum" class="form-label">Legislation Number</label>
			<input type="text" class="form-control" name="LegNum">
		  </div>
		  <div class="mb-3">
			<label for="LegName" class="form-label">Legislation Name</label>
			<input type="text" class="form-control" name="LegName">
		  </div>
		  <div class="mb-3">
			<label for="Content" class="form-label">Content</label>
			<input type="text" class="form-control" name="Content">
		  </div>
		  <div class="mb-3">
			  <label for="AniRec" class="form-label">Anitech Recommendation</label>
			  <input type="text" class="form-control" name="AniRec">
		  </div>
		  
		  <br>
	  
			<br>
			<button id="signupBtn" type="submit" class="btn btn-primary">Submit Entry</button>
			</form>
		</div>
	  </div>
	  <?php }?>

  </body>
  </html>