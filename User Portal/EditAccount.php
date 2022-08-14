<!DOCTYPE html>
<html lang="en">

<head>
	<title>EditAccount</title>
	<meta charset="UTF-8">
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> -->
</head>

<body>
    <nav>
		<a href="account.php"><button type="button" name="BackButton" id="BackButton">Back</button></a>
		<a href="homepage.html"><button type="button" name="HomeBtn" id="HomeBtn">Home</button></a>
		<a href="login.php"><button type="button" name="LoginBtn" id="LoginBtn">Logout</button></a>
	</nav>

    <div class="">
        <h1>Edit Account</h1>
        <?php 	
		  include('php/connection.php');
		  session_start();
		  $id = $_SESSION['ID'];
		  $sql = "select * from customer where ClinetID = $id";
		  $result = mysqli_query($con, $sql);  
		  while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
		?>
        <br>
        <br>
		<label for="full_name">Full Name: </label> <?php echo $row1['Full Name']; ?>
        <br>
        <br>
        <form action="php/updateaccount.php" method="post" >

            <label>Email :</label>
            <input name="Email" required value="<?php echo $row1['Email']; ?>">
            <br>
            <br>
            <label>Password:</label>
            <input name="Password" required value="<?php echo $row1['Password']; ?>">
            <br>    
            <br>
            <label>Company:</label>
            <input  name="company" required value="<?php echo $row1['Company']; ?>">
            <br>
            <br>
            <input type="submit" value="Update Account"> 
            <?php } ?>
        </form> 
	

</body>
</html>