<?php
use PHPUnit\Framework\TestCase;

class MyTest extends TestCase
{
    // User Login
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
    // User Search legislation
    public function test2()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

        $sql = "SELECT * FROM legislation 
        where   Act like 'Fair Work Act 2009' or 
                Division like 'Fair Work Act 2009' or 
                LegNum like 'Fair Work Act 2009' or 
                LegName like 'Fair Work Act 2009' or 
                Content like 'Fair Work Act 2009' or 
                AniRec like 'Fair Work Act 2009'";  
        $result = mysqli_query($con, $sql);   

        $count = mysqli_num_rows($result); 

        $this->assertEquals(202,$count);
    }
    // User account update

    public function test3()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

        $id = 55;
        $name = 'Melwin Jolly';
        $email = 'melwinjolly@gmail.com';  
        $MobilePhone = '0491136466';  
        $password = '123456';  
        $company = 'Swin';  

        $sql = "update customer set Email = '$email', 
        Password = '$password', Company = '$company', `
        Full Name`='$name', MobilePhone =$MobilePhone  WHERE ClinetID=$id";  
         
        $result = mysqli_query($con, $sql); 

        $sql = "select * from customer where Email = '$email' and 
        Password = '$password' and
        Company = '$company' and
        `Full Name`='$name' and 
        MobilePhone =$MobilePhone and 
        ClinetID=$id";  
        
        $result1 = mysqli_query($con, $sql);   

        $count = mysqli_num_rows($result1); 

        $this->assertEquals(1,$count);
    }
    // User subscription

    public function test4()
    {
        $dbhost = 'complianceplus.c9xxg5e4cdce.us-east-1.rds.amazonaws.com';
	    $dbport = '3306';
	    $dbname = 'complianceplus';
	    $username = 'admin';
	    $password = 'Melwinjolly';  
      
        $con = new mysqli($dbhost, $username, $password, $dbname, $dbport);

        $id = 55;
        $LawID = 231;

        $sql = "INSERT INTO `Subscription`(`LawID`,`ClinetID`)
                    VALUES ('$LawID', '$id')";
        $rs = mysqli_query($con, $sql);

        $sql = "select * from Subscription where LawID = '$LawID' and 
        ClinetID = '$id' ";
        $result1 = mysqli_query($con, $sql);   
        $count = mysqli_num_rows($result1);
        $this->assertEquals(1,$count);
    }
}
?>
