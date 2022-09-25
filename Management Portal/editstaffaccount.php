<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welcome to Lahebo</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
	<link href="css/main.css" rel="stylesheet">
	<style>	#stafflogin {position:absolute;	right: 10px;}</style>
</head>

<body>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
	<?php 	
    session_start();
    if ( $_SESSION['Active'] = NULL){
        header("Location: stafflogin.html");
    
    }
    if( $_SESSION['role'] == "superadmin"){
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
			<a class="navbar-brand" href="index.html">Lahebo</a>
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
<div class="d-flex justify-content-center">
        
      <div class="row d-flex justify-content-center">

		<h4>Edit Legislation</h4>
        <?php 	
                include('php/connection.php');
                $id = $_POST['idmanagementUser'];
                $_SESSION['idmanagementUser'] = $id;
                $sql = "select * from managementUser where idmanagementUser = $id";
                $result = mysqli_query($con, $sql);  
                while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		?>
          <div class="row d-flex justify-content-center">
        <form method="post">
        <div class="mb-3">
        <input type='number' name='idmanagementUser' value="<?php echo $row1['idmanagementUser']; ?>" hidden>
          <label for="name" class="form-label">Full Name</label>
          <input type="name" class="form-control" name="name" value="<?php echo $row1['Full_Name']; ?>">
        </div>
        <div class="mb-3">
          <label for="email" class="form-label">Email address</label>
          <input type="email" class="form-control" name="email" value="<?php echo $row1['Email']; ?>">
        </div>
        <div class="mb-3">
          <label for="Password" class="form-label">Password</label>
          <input type="password" class="form-control" name="password" value="<?php echo $row1['Password']; ?>">
        </div>
        <div class="mb-3">
          <label for="phone" class="form-label">Phone</label>
          <input type="text" class="form-control" name="phone" value="<?php echo $row1['Phone']; ?>">
        </div>
        <div class="mb-3">
          <label for="verification" class="form-label">User Verification Number</label>
          <input type="text" class="form-control" name="verification">
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
                
                
                >Deactive</option>
            </select>
        </div>

        <p>Select your role</p>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="role" id="consultant" value = "consultant" 
          <?php if($row1['role'] = 'consultant' ){
            echo "checked='checked'";

          } ?>
          
          
          
          >
          <label class="form-check-label" for="consultant"> Consultant Team</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="role" id="finance"  value = "finance"
          <?php if($row1['role'] = 'consultant' ){
            echo "checked='checked'";

          } ?>
          
          >
          <label class="form-check-label" for="finance"> Finance Team</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="role" id="superadmin" value = "superadmin"
          <?php if($row1['role'] = 'consultant' ){
            echo "checked='checked'";

          } ?>
          >
          <label class="form-check-label" for="superadmin"> Super Admin </label>
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
		<?php
            if(isset($_POST['submit'])) {
                include('php/connection.php'); 
                $id = $_POST['idmanagementUser'];
                $txtName = $_POST['name'];
                $txtEmail = $_POST['email'];
                $Password = $_POST['password'];
                $Phone = $_POST['phone'];
                $role = $_POST['role'];
                $Active = $_POST['Active'];
                $verification = $_POST['verification'];

                if (($role == "superadmin" && $verification == 112233) || ($role == "finance" && $verification == 445566) || ($role == "consultant" && $verification == 778899)){
                    $sql = "UPDATE managementUser SET 
                    Full_Name = '$txtName',             
                    Email = '$txtEmail',             
                    `Password` = '$Password',
                    Phone = '$Phone',
                    Active = '$Active', 
                    `role` = '$role'
                    WHERE idmanagementUser = $id";
                    $rs = mysqli_query($con, $sql);	
                
                }
                else {
                    echo '<script>alert("Account cannot be update due to invalid verification numbers PLease try again")</script>';
                }

            }
            


        

		?>
	</div>



</body>
</html>
