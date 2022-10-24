
		<?php
                include('connection.php'); 
                $id = $_POST['idmanagementUser'];
                $txtName = $_POST['name'];
                $txtEmail = $_POST['email'];
                $Password = $_POST['password'];
                $Phone = $_POST['phone'];
                $role = $_POST['role'];
                $Active = $_POST['Active'];
                $verification = $_POST['verification'];

                 $sql = "UPDATE managementUser SET 
                    Full_Name = '$txtName',             
                    Email = '$txtEmail',             
                    `Password` = '$Password',
                    Phone = '$Phone',
                    Active = '$Active', 
                    `role` = '$role'
                    WHERE idmanagementUser = $id";
                    $rs = mysqli_query($con, $sql);	
                    header("Location:../Editstaff.php");
            


        

		?>
