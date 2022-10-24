<?php
	include('php/connection.php');  
	$Act = $_POST['Act'];
	$Division = $_POST['Division'];
	$LegNum = $_POST['LegNum'];
	$LegName = $_POST['LegName'];
	$content = $_POST['content'];
	$AniRec = $_POST['AniRec'];
    $legislationID = $_POST['LawID'];

	$sql = "UPDATE legislation SET
					`Act` = '$Act',
					`Division` = '$Division',
					`LegNum` = '$LegNum',
					`LegName` = '$LegName',
					`Content` = '$content',
					`AniRec` = '$AniRec'
					WHERE `legislationID` = '$legislationID'";
	$rs = mysqli_query($con, $sql);

	$sql2 = "select Email from email where legislationID = '$legislationID'"; 
	$result1 = mysqli_query($con, $sql2);
	while($row = mysqli_fetch_array($result1)){
		echo $row['Email'];
		$mail = $row['Email'];
		include('mail.php');
	}
	if ($con->query($sql2) === TRUE) {
		echo '<script>alert("Record updated successfully")</script>';
		header("Location: ../search_result.php");
    }
	
?>