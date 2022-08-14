
      <?php 	
        include('connection.php');
        session_start();
        $id = $_SESSION['ID'];
        $email = $_POST['Email'];  
        $password = $_POST['Password'];  
        $company = $_POST['company'];  

        $sql = "update customer set Email = '$email', Password = '$password', Company = '$company' WHERE ClinetID=$id";  
                
        if ($con->query($sql) === TRUE) {
          echo "Record updated successfully";
          header("Location: ../account.php");
          } 
      ?>  
    </div