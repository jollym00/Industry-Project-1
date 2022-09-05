<!DOCTYPE html>
<html lang="en">

<head>
	<title>Legislation Search Result</title>
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
    
        <?php
         
            include('php/connection.php'); 
            echo "<div class='d-flex justify-content-center'>";
        session_start();
        $id = $_SESSION['ID'];
        $search = $_POST['Search'];
        $sql = "SELECT * FROM legislation where Act like '%$search%' or Division like '%$search%' or LegNum like '%$search%' or 
        LegName like '%$search%' or Content like '%$search%' or AniRec like '%$search%'" ;
        if($result = mysqli_query($con, $sql)){
            if(mysqli_num_rows($result) > 0){
                echo "<table id='searchresults' class='table table-striped'>";
                    echo "<tr>";
                        echo "<th>Act</th>";
                        echo "<th>Division</th>";
                        echo "<th>Legislation Num</th>";
                        echo "<th>Legislation Name</th>";
                        echo "<th>Content</th>";
                        echo "<th>Anitech Reccomendation</th>";
                        echo "<th></th>";
                        echo "<th> </th>";
                    echo "</tr>";
                while($row = mysqli_fetch_array($result)){
                    echo "<tr>";
                    
                        echo "<td>" . $row['Act'] . "</td>";
                        echo "<td>" . $row['Division'] . "</td>";
                        echo "<td>" . $row['LegNum'] . "</td>";
                        echo "<td>" . $row['LegName'] . "</td>";
                        echo "<td>" . $row['Content'] . "</td>";
                        echo "<td>" . $row['AniRec'] . "</td>";
                        $lawid = $row['legislationID'];
                        $sql1="SELECT * FROM Subscription where ClinetID = '$id' and LawID ='$lawid'";
                        $Sub = mysqli_query($con, $sql1);
                        $count = mysqli_num_rows($Sub);

						
                            echo "<td> <form method='post' action='editlegislation.php'>
                            <input type='number' name='clientID' value=$id hidden>
                            <input type='number' name='LawID' value=" . $row['legislationID']. " hidden>
                            <input type='submit' value='Edit'> 
                            </form> <td>";
                            echo "<td> <form method='post' action='php/Subscribe.php'>
                            <input type='number' name='clientID' value=$id hidden>
                            <input type='number' name='LawID' value=" . $row['legislationID']. " hidden>
                            <input type='submit' value='Delete'> 
                            </form> <td>";
                        

                        
                        
                        
                    echo "</tr>";
                }
                echo "</table>";
                mysqli_free_result($result);
            } 
            else{
                echo "Your search - $search - did not match any documents.";
            }
        }


        mysqli_close($con);
        echo "</div>";
        ?>
    

</body>
</html>
