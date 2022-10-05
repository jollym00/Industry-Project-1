<?php
use \PHPUnit\Framework\TestCase;

include(dirname(__FILE__)."../UserPortal/EditAccount.php");

//include('../UserPortal/EditAccount.php');
class AccountTest  extends TestCase{
    public function testgetDetails() :void{

        $new = new UserPortal\Account;
        $result = $new->getDetails(55);
        $this->assertEquals(12 , $result);
    }
}