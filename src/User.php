<?php
class User{
    protected $name;
    protected $email;
    public function __construct($name,$email){
        $this->name = $name;
        $this->email = $email;
    }

    public function UserName($username){
        if($username){
            $this -> name = $username;
        }
        return $this ->name;
    }

    public function Email($email){
        if($email){
            $this -> email=$email;
        }
        return $this ->email;
    }

}

?>