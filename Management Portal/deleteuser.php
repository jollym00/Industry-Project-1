<?php
	include('connection.php');

    $userid = $_POST['clientID'];


    $sql = "DELETE FROM `customer`WHERE 'ClinetID' = $userid;";
    
    $rs = mysqli_query($con, $sql);

    header("Location: manageusers.php");

    ?>