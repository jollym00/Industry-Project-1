<?php
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    //Management logi
    public function test1()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

        $sql = "select * from managementUser where Email = 'melwinjolly@gmail.com' and Password = '123456789'";  
        $result = mysqli_query($con, $sql);  
        $count = mysqli_num_rows($result); 

        $this->assertEquals(1,$count);

        
    }
    // Adding new staff

    public function test2()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

        $sql = "INSERT INTO  managementUser (`Full_Name`,`Email`,`Password`,`Phone`,`Active`,`role`) 
        VALUES ('Joker Batman', 'JOker@gmail.com','123456','0491136466','Active','superadmin')";
        $result = mysqli_query($con, $sql);  
        
        $sql1 = "select * from managementUser where Email = 'JOker@gmail.com'";
        $result1 = mysqli_query($con, $sql1);
        $count = mysqli_num_rows($result1); 
        
        $this->assertEquals(1,$count);

       
    }
    // Updating legislation

    public function test3()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);
        $sql = "UPDATE legislation SET `AniRec` = 'this is a test' WHERE legislationID = 56";
        $result = mysqli_query($con, $sql);  

        $sql1 = "select * from legislation where AniRec = 'this is a test'";
        $result1 = mysqli_query($con, $sql1);
        $count = mysqli_num_rows($result1); 
        
        $this->assertEquals(1,$count);     
        
    }
    // Updating client details

    public function test4()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

        $sql = "UPDATE customer SET Company = 'Swinburne' WHERE ClinetID = 55";
        $result = mysqli_query($con, $sql);  

        $sql1 = "select * from customer where Company = 'Swinburne'";
        $result1 = mysqli_query($con, $sql1);
        $count = mysqli_num_rows($result1); 
        
        $this->assertEquals(1,$count);

        
    }

    
}
?>
