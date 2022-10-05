<?php 
			namespace UserPortal;
			include('php/connection.php');
			session_start();
			class Account{
				
                public function getDetails($session){
					$id = $session;
					$sql = "select * from customer where ClinetID = $id";
					$result = mysqli_query($con, $sql);  
					return $result;
				}
			}
?>