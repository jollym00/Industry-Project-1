<!DOCTYPE html>
<html lang="en">

<head>
	<title>Subscriptions</title>
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
      <?php
	include('php/connection.php'); 
      session_start();
      $id = $_SESSION['ID'];
      $sql = "SELECT * FROM search where ClinetID=$id;" ;
      if($result = mysqli_query($con, $sql)){
          if(mysqli_num_rows($result) > 0){
              echo "<table>";
                  echo "<tr>";
                      echo "<th>Act</th>";
                      echo "<th>Division</th>";
                      echo "<th>Legislation Num</th>";
                      echo "<th>Legislation Name</th>";
                      echo "<th>Content</th>";
                      echo "<th>Anitech Reccomendation</th>";
                      echo "<th>Subscription Status</th>";
                  echo "</tr>";
              while($row = mysqli_fetch_array($result)){
                  echo "<tr>";
          
                      echo "<td>" . $row['Act'] . "</td>";
                      echo "<td>" . $row['Division'] . "</td>";
                      echo "<td>" . $row['LegNum'] . "</td>";
                      echo "<td>" . $row['LegName'] . "</td>";
                      echo "<td>" . $row['Content'] . "</td>";
                      echo "<td>" . $row['AniRec'] . "</td>";
                      echo "<td> <form method='post' action='php/Unsubscribe.php'>
                          <input type='number' name='clientID' value=$id hidden>
                          <input type='number' name='LawID' value=" . $row['legislationID']. " hidden>
                          <input type='submit' value='Unsubscribe'> 
                          </form> <td>";
                      
                  echo "</tr>";
              }
              echo "</table>";
              mysqli_free_result($result);
          } 
          else{
              echo "No records matching your query were found.";
          }
      }
  
  
      mysqli_close($con);
  ?>
		

    </div>
	

</body>
</html>