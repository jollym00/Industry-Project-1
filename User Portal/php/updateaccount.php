
      <?php 	
        include('connection.php');
        session_start();
        $id = $_SESSION['ID'];
        $name = $_POST['FullName'];
        $email = $_POST['email'];  
        $MobilePhone = $_POST['MobilePhone'];  
        $password = $_POST['Password'];  
        $company = $_POST['company'];  

        $sql = "update customer set Email = '$email', Password = '$password', Company = '$company', `Full Name`='$name', MobilePhone =$MobilePhone  WHERE ClinetID=$id";  
                
        if ($con->query($sql) === TRUE) {
          echo "Record updated successfully";
          header("Location: ../EditAccount.php");
          } 
      ?>  
    </div