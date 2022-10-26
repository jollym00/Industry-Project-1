
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

                if (($role == "superadmin" && $verification == 112233) || ($role == "finance" && $verification == 445566) || ($role == "consultant" && $verification == 778899)){
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
                
                }
                else {
                    echo '<script>alert("Account cannot be update due to invalid verification numbers PLease try again")</script>';
                    header("Location:Editstaff.php");
                }
            


        

		?>