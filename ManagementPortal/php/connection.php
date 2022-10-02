<?php      
    $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	$dbport = '3306';
	$dbname = 'complianceplus';
	$username = 'admin';
	$password = 'Melwinjolly';  
      
    $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);
     if ($con->connect_error) {
	  die("Connection failed: " . $con->connect_error);
	}
?>  