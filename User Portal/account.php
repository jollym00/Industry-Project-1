<!DOCTYPE html>
<html lang="en">

<head>
	<title>Account</title>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
</head>

<body>
	<nav>
		<a href="homepage.html"><button type="button" name="HomeBtn" id="HomeBtn">Home</button></a>
		<a href=""><button type="button" name="AboutBtn" id="AboutBtn">About</button> </a>
		<a href="login.php"><button type="button" name="LoginBtn" id="LoginBtn">Logout</button></a>
	</nav>

	<div>
		<?php 	
		  include('php/connection.php');
		  session_start();
		  $id = $_SESSION['ID'];
		  $sql = "select * from customer where ClinetID = $id";
		  $result = mysqli_query($con, $sql);  
		  while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			?>
		  	<h4>Account Details</h4>
			<label for="full_name">Full Name: </label> <?php echo $row1['Full Name']; ?> </br>
			<label for="email">Email: </label> <?php echo $row1['Email']; ?> </br>
			<label for="company">Company: </label> <?php echo $row1['Company']; ?> </br>
			<label for="membership">Memberhsip: </label> <?php echo $row1['Paymentsub'];  ?> </br> 
			<?php } ?>
			<a href="EditAccount.php"><button type="EditAccnt"> Edit Account Details </button> </br> </a>
			<a href="SubcribeUnsubcribe.php"><button type="ViewSsubsciption"> View Subscriptions </button> </a>
		  
	</div>
	
</body>
</html>
