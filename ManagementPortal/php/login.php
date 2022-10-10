<?php 	
        include('connection.php');
        session_start();
          
        $username = $_POST['Email'];  
        $password = $_POST['Password'];  

        $username = stripcslashes($username);
        $password = stripcslashes($password);

        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password); 

        $sql = "select `idmanagementUser`,`role`, `Active`  from managementUser where Email = '$username' and Password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
                
        if($count == 1){
          $_SESSION['idmanagementUser'] = $row["idmanagementUser"];
          $_SESSION['role'] = $row["role"];
          $_SESSION['Active'] = $row["Active"];
          if($row["Active"] == 'Active') {
            header("Location: ../authenticaation.php");
          }
          else {
            echo '<script type="text/javascript"> 
                    alert("Account is inactive!"); 
                    window.location = "../login.php";
                  </script>';
          }
         
        }
        else{
          echo '<script type="text/javascript"> 
                  alert("Invalid User Credentials!"); 
                  window.location = "../login.php";
                </script>';
        }
?> 