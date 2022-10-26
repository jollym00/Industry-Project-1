<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Lahebo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="../css/main.css" rel="stylesheet">
	<script src = "script/validation.js" ></script>
	<style>	#stafflogin {position:absolute;	right: 10px;}
			#textboxid{ height:150px;  font-size:11pt;}</style>

</head>

<body class="pgBody">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<?php 	
    session_start();
    if( $_SESSION['role'] == "superadmin"){
        ?> 
        <nav class="navbar sticky-top navbar-expand-lg ">
		<div class="container-fluid">
			<a class="navbar-brand" href="homepage.php">Lahebo</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
			  <div class="navbar-nav">
				<div class="d-flex justify-content-between">
					<a class="nav-link" href="search.php" >Search</a>
					<a class="nav-link" href="Addlegislation.php">Add Legislation</a>
					<a class="nav-link" href="customer.php">Customer</a>
					<a class="nav-link" href="sign_up.html">Add Staff</a>
                    <a class="nav-link" href="Editstaff.php">Staff</a>  
					<a class="nav-link" href="stafflogin.html" id="stafflogin">Logout</a>   
				</div>
			  </div>
			</div>
		  </div>
	  </nav>
      <?php
    }
    elseif ( $_SESSION['role'] == "finance"){
        ?> 
        <nav class="navbar sticky-top navbar-expand-lg ">
		<div class="container-fluid">
			<a class="navbar-brand" href="index.html">Lahebo</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
			  <div class="navbar-nav">
				<div class="d-flex justify-content-between">
					<a class="nav-link" href="customer.php">Customer</a>
					<a class="nav-link" href="stafflogin.html" id="stafflogin">Logout</a>   
				</div>
			  </div>
			</div>
		  </div>
	  </nav>


<?php
    }

    elseif ( $_SESSION['role'] == "consultant"){
        ?> 
        <nav class="navbar sticky-top navbar-expand-lg ">
		<div class="container-fluid">
		<a class="navbar-brand" href="#">
      			<img src="../img/mainLogo.png" alt="..." height="36">
    		</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			  <span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse " id="navbarNavAltMarkup">
			  <div class="navbar-nav">
				<div class="d-flex justify-content-between">
					<a class="nav-link" href="search.html" >Search</a>
					<a class="nav-link" href="Addlegislation.html">Add Legislation</a>
                    <a class="nav-link" href="stafflogin.html" id="stafflogin">Logout</a>  
				</div>
			  </div>
			</div>
		  </div>
	  </nav>
	  

<?php
    }




    ?> 

		
<br>
		<br>

    
<div class="d-flex justify-content-center">
    <div class="row d-flex justify-content-center">
		<h4>Add New Legislation</h4>
		<form method="post" id="Legislation">
			<div class="mb-3">
				<label for="name" class="form-label">Act</label>
				<input type="name" class="form-control" name="Act" id="act">
				<span id = "actErr" class="hideSpan"></span>
		  	</div>
		  	<div class="mb-3">
				<label for="text" class="form-label">Division</label>
				<input type="text" class="form-control" name="Division" id="division">
				<span id = "divisionErr" class="hideSpan"></span>
		  	</div>
		  	<div class="mb-3">
				<label for="text" class="form-label">Legislation Number</label>
				<input type="text" class="form-control" name="LegNum" id="legnum">
				<span id = "legnumErr" class="hideSpan"></span>
		  	</div>
			<div class="mb-3">
				<label for="text" class="form-label">Legislation Name</label>
				<input type="text" class="form-control" name="LegName" id="legname">
				<span id = "legnameErr" class="hideSpan"></span>
		  	</div>
			<div class="mb-3">
				<label for="text" class="form-label">Content</label>
				<input type="text" class="form-control" name="content" id="content" rows="2" cols="20" wrap="hard">
				<span id = "contentErr" class="hideSpan"></span>
		  	</div>
			  <div class="mb-3">
				<label for="text" class="form-label">Anitech Reccomendation</label>
				<input type="text" class="form-control" name="AniRec" id="recommendation" rows="2" cols="20" wrap="hard">
				<span id = "recommendationErr" class="hideSpan"></span>
		  	</div>	
          <button id="signupBtn" type="submit" class="btn btn-primary">Add Legislation</button>
          <br>
		  <br>
		  <br>
		</form>
		  
      </div>
    </div>

	<div hidden>
		<?php
		include('php/connection.php');  
		if(isset($_POST)){
			$Act = $_POST['Act'];
			$Division = $_POST['Division'];
			$LegNum = $_POST['LegNum'];
			$LegName = $_POST['LegName'];
			$content = $_POST['content'];
			$AniRec = $_POST['AniRec'];

			$sql = "INSERT INTO legislation (`Act`,`Division`,`LegNum`,`LegName`,`Content`,`AniRec`) VALUES ('$Act', '$Division', '$LegNum', '$LegName', '$content', '$AniRec')";
			$rs = mysqli_query($con, $sql);
		}
		?>
	</div>



</body>
</html>
