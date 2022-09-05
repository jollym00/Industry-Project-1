
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Manage Users</title>
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

		<br>
		<br>
    <div class="d-flex justify-content-center">
        
      <div class="row d-flex justify-content-center">
        <h4>Manage Users</h4>
       
    </div>
        <br>
    
          
          </form>
      </div>
    </div>

	<?php
	include('php/connection.php');
		echo "<div class='d-flex justify-content-center'>";
	session_start();
	$sql = "SELECT * FROM 'customer';" ;
	if($result = mysqli_query($con, $sql)){
		if(mysqli_num_rows($result) > 0){
            echo "<table id='customer' class='table table-striped'>";
                  echo "<tr>";
                      echo "<th>Name</th>";
                      echo "<th>Email</th>";
                      echo "<th>Company</th>";
                      echo "<th>Payment</th>";
                      echo "<th>Renew</th>";
                      echo "<th>Active</th>";
                      echo "<th>DateExpiery</th>";
                      echo "<th> </th>";
					  echo "<th> </th>";
                  echo "</tr>";
				while($row = mysqli_fetch_array($result)){
					echo "<tr>";
			
					echo "<td>" . $row['Full Name'] . "</td>";
					echo "<td>" . $row['Email'] . "</td>";
					echo "<td>" . $row['Company'] . "</td>";
					echo "<td>" . $row['Paymentsub'] . "</td>";
					echo "<td>" . $row['Renew'] . "</td>";
					echo "<td>" . $row['Active'] . "</td>";
					echo "<td>" . $row['DateExpiery'] . "</td>";
					echo "<td> <form method ='post' action ='editusers.php'>
						<input type='submit' value='Edit User'>
						</form> <td>";
					echo "<td> <form method ='post' action ='deleteusers.php'>
					<input type='submit' value='Delete'>
					</form> <td>";

					echo "</tr>";
				}
				echo "</table>";
              	mysqli_free_result($result);
		}
		else{
			echo "No Users Found";
		}
	}
	?>
</body>
</html>