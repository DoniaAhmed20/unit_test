<?php
use PHPUnit\Framework\TestCase;
require './src/User.php';

class UserTest extends TestCase
{
    public function testUser(){
        
        $U = new User("Samy" , "samy@gmail.com"); 
        $this->assertEquals('Samy',$U->username('Samy'));  
        $this->assertEquals('samy@gmail.com',$U->Email('samy@gmail.com'));
    } 
}

?>