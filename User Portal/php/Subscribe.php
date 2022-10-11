<?php
	include('connection.php');

    $id = $_POST['clientID'];
    $LawID = $_POST['LawID'];
    echo  $LawID;

    $sql = "INSERT INTO `Subscription`(`LawID`,`ClinetID`)
                    VALUES ('$LawID', '$id')";
    $rs = mysqli_query($con, $sql);

    header("Location: ../search_result.php");

    ?>