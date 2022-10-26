<?php
include('connection.php'); 
$id = $_POST['LawID'];

$sql = "DELETE FROM legislation WHERE legislationID = $id" ;
$result = mysqli_query($con, $sql);

if ($con->query($sql) === TRUE) {
    echo '<script>alert("Record updated successfully")</script>';
    header("Location: ../search_result.php");
}




?>