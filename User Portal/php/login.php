<?php 	
        include('connection.php');
        session_start();
        $_SESSION['ID'] = 0;
          
        $username = $_POST['Email'];  
        $password = $_POST['Password'];  

        $username = stripcslashes($username);
        $password = stripcslashes($password);

        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password); 

        $sql = "select `ClinetID` from customer where Email = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
                
        if($count == 1){
          $_SESSION['ID'] = $row["ClinetID"];
          header("Location: ../authenticaation.php");
        }
        else{
            header("Location: ../login.php");
        }
?>  