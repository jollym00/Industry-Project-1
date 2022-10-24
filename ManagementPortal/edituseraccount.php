<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Lahebo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="../css/main.css" rel="stylesheet">
	<style>	#stafflogin {position:absolute;	right: 10px;}</style>
  <script src = "script/validation.js" ></script>
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<?php 	
    session_start();
    if(empty($_SESSION['role'])){
      header("Location: ../stafflogin.html");
    }
    if( $_SESSION['role'] == "superadmin"){
        ?> 
        <nav class="navbar sticky-top navbar-expand-lg ">
		<div class="container-fluid">
    <a class="navbar-brand" href="homepage.php">
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
					<a class="nav-link" href="logout.php" id="stafflogin">Logout</a>   
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
					<a class="nav-link" href="logout.php" id="stafflogin">Logout</a>   
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
					<a class="nav-link" href="search.php" >Search</a>
					<a class="nav-link" href="Addlegislation.php">Add Legislation</a>
                    <a class="nav-link" href="logout.php" id="stafflogin">Logout</a>  
				</div>
			  </div>
			</div>
		  </div>
	  </nav>


<?php
    }
    ?> 
<br>
<div class="d-flex justify-content-center">
        
      <div class="row d-flex justify-content-center">

		<h4>Edit User Account</h4>
        <?php 	
                include('php/connection.php');
                $id = $_POST['ClinetID'];
                $_SESSION['ClinetID'] = $id;
                $sql = "select * from customer where ClinetID = $id";
                $result = mysqli_query($con, $sql);  
                while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		?>
          <div class="row d-flex justify-content-center">
        <form method="post" action="php/edituseraccount.php" id="EditAccForm">
        <div class="mb-3">
        <input type='number' name='ClinetID' value="<?php echo $row1['ClinetID']; ?>" hidden>
          <label for="name" class="form-label">Full Name</label>
          <input type="name" class="form-control" name="name" id="name" value="<?php echo $row1['Full Name']; ?>">
          <span id = "nameErr" class="hideSpan"></span>
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" id="email" value="<?php echo $row1['Email']; ?>">
          <span id = "emailErr" class="hideSpan"></span>
        </div>
  
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $row1['MobilePhone']; ?>">
          <span id = "phoneErr" class="hideSpan"></span>
        </div>
        <div class="mb-3">
          <label for="company" class="form-label">Company Name</label>
          <input type="text" class="form-control" name="company" id="cmpName" value="<?php echo $row1['Company']; ?>">
          <span id = "cmpNameErr" class="hideSpan"></span>
        </div>

        <div class="mb-3">
            <label for="Active">Active:</label>
            <select name="Active" >
                <option value="Active"
                <?php if($row1['Active'] = 'Active' ){
            echo "selected'";

          } ?>
                >Active</option>
                <option value="Deactive"<?php if($row1['Active'] = 'Deactive' ){
            echo "selected'";

          } ?>
                
                
                >Deactivate</option>
            </select>
        </div>
        
		  <br>
		  <br>

         <button id="signupBtn" type="submit" class="btn btn-primary" value="submit">Update</button>
		  <br>
		  <br>
          <?php } ?>
		</form>
        </div>
        </div>
        <div>
	</div>



</body>
</html>
