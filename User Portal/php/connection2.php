<?php      
    $dbhost = 'complianceplus.czttwoa6dtht.us-west-1.rds.amazonaws.com';
	$dbport = '3306';
	$dbname = 'complianceplus';
	$username = 'admin';
	$password = 'Melwinjolly';  
      
    $conn = new mysqli($dbhost, $username, $password, $dbname, $dbport);
     if ($conn->connect_error) {
	  die("Connection failed: " . $con->connect_error);
	}
?>  