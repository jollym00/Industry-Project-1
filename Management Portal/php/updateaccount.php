
      <?php 	
        include('connection.php');
        session_start();
        $id = $_GET['ClinetID'];
        $name = $_GET['FullName'];
        $email = $_GET['email'];  
        $MobilePhone = $_GET['MobilePhone'];  
 
        $company = $_GET['company'];  

        $sql = "update customer set Email = '$email',  Company = '$company', `Full Name`='$name', MobilePhone =$MobilePhone  WHERE ClinetID=$id";  
                
        if ($con->query($sql) === TRUE) {
          echo "Record updated successfully";
          header("Location: ../manageusers.php");
          } 
      ?>  
    </div