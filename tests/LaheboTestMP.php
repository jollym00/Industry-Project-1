<?php
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
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

    public function test2()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

       
    }

    public function test3()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

        
    }

    public function test4()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

        
    }

    public function test5()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

        
    }
}
?>
