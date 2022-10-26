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
		<div class="container-fluid"><a class="navbar-brand" href="homepage.php">
      			<img src="../img/mainLogo.png" alt="..." height="36">
    		</a>
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
			<a class="navbar-brand" href="homepage.php">Lahebo</a>
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
			<a class="navbar-brand" href="homepage.php">Lahebo</a>
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
        <?php 	
                include('php/connection.php');
                $id = $_POST['LawID'];
                $_SESSION['LawID'] = $id;
                $sql = "select * from legislation where legislationID = $id";
                $result = mysqli_query($con, $sql);  
                while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		?>
        <input type='number' name='LawID' value="<?php echo $row1['legislationID']; ?>" hidden>
			<div class="mb-3">
				<label for="name" class="form-label">Act</label>
				<input type="name" class="form-control" name="Act" id="act" value="<?php echo $row1['Act']; ?>">
				<span id = "actErr" class="hideSpan"></span>
		  	</div>
		  	<div class="mb-3">
				<label for="text" class="form-label">Division</label>
				<input type="text" class="form-control" name="Division" id="division" value="<?php echo $row1['Division']; ?>">
				<span id = "divisionErr" class="hideSpan"></span>
		  	</div>
		  	<div class="mb-3">
				<label for="text" class="form-label">Legislation Number</label>
				<input type="text" class="form-control" name="LegNum" id="legnum" value="<?php echo $row1['LegNum']; ?>">
				<span id = "legnumErr" class="hideSpan"></span>
		  	</div>
			<div class="mb-3">
				<label for="text" class="form-label">Legislation Name</label>
				<input type="text" class="form-control" name="LegName" id="legname" value="<?php echo $row1['LegName']; ?>">
				<span id = "legnameErr" class="hideSpan"></span>
		  	</div>
			<div class="mb-3">
				<label for="text" class="form-label">Content</label>
				<input type="text" class="form-control" name="content" id="content" value="<?php echo $row1['Content']; ?>">
				<span id = "contentErr" class="hideSpan"></span>
		  	</div>
			  <div class="mb-3">
				<label for="text" class="form-label">Anitech Recommendation</label>
				<input type="text" class="form-control" name="AniRec" id="textboxid" value="<?php echo $row1['AniRec']; ?>">
		  	</div>	
          <button id="signupBtn" type="submit" class="btn btn-primary">Update</button>
          <br>
		  <br>
		  <br>
          <?php } ?>
		</form>
		  
      </div>
    </div>
    <div hidden>
    <?php
		include('php/connection.php');  
			$Act = $_POST['Act'];
			$Division = $_POST['Division'];
			$LegNum = $_POST['LegNum'];
			$LegName = $_POST['LegName'];
			$content = $_POST['content'];
			$AniRec = $_POST['AniRec'];
            $legislationID = $_POST['LawID'];

			$sql = "UPDATE legislation
            SET
            `Act` = '$Act',
            `Division` = '$Division',
            `LegNum` = '$LegNum',
            `LegName` = '$LegName',
            `Content` = '$content',
            `AniRec` = '$AniRec'
            WHERE `legislationID` = '$legislationID'";
			$rs = mysqli_query($con, $sql);

			$sql2 = "select Email from email where legislationID = '$legislationID'"; 
			$result1 = mysqli_query($con, $sql2);
			while($row = mysqli_fetch_array($result1)){
				echo $row['Email'];
				$mail = $row['Email'];
				include('php/mail.php');
			}

            /*if ($con->query($sql) === TRUE) {
                echo '<script>alert("Record updated successfully")</script>';
                header("Location: homepage.php");
                } */
		?>



    </div>



</body>
</html>
