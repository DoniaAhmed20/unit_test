<?php
use PHPUnit\Framework\TestCase;
require './src/User.php';

class UserTest extends TestCase
{
    public function testUser(){
        
        $U = new User("Donia" , "donia3012@gmail.com"); 
        $this->assertEquals('Donia',$U->username('Donia'));  
        $this->assertEquals('donia3012@gmail.com',$U->Email('donia3012@gmail.com'));
    } 
}

?>