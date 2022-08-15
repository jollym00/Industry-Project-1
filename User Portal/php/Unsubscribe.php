<?php
	include('connection.php');

    $id = $_POST['clientID'];
    $LawID = $_POST['LawID'];
    echo  $LawID;

    $sql = "DELETE FROM `Subscription` WHERE LawID='$LawID' and ClinetID = '$id' ";
    $rs = mysqli_query($con, $sql);

    header("Location: ../SubcribeUnsubcribe.php");

    ?>