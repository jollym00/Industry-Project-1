<?php
	include('connection.php');
    session_start();

    $id = $_POST['clientID'];
    $LawID = $_POST['LawID'];
    echo  $LawID;

    $sql = "DELETE FROM `Subscription` WHERE LawID='$LawID' and ClinetID = '$id' ";
    $rs = mysqli_query($con, $sql);

    if ($_SESSION['page'] == 2){
        header("Location: ../SubcribeUnsubcribe.php");
    }
    else {
        $_SESSION['page'] == 1;
        header("Location: ../search_result.php");
    }

    ?>