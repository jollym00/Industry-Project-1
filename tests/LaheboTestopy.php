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

        $sql = "select `ClinetID` from customer where Email = 'melwinjolly@gmail.com' and Password = '123456'";  
        $result = mysqli_query($con, $sql);   

        $count = mysqli_num_rows($result); 

        $this->assertEquals(1,$count);
    }

    
}
?>
