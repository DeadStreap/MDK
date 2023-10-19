<?php
class User
{
    public $username;
    public $password;
    public $birthday;

    public function __construct(string $username, string $password,  $birthday){
        $this->username = $username;
        $this->password = $password;
        $this->birthday = $birthday;
    }
    public function getUsername(){
        return $this->username;
    }
    public function getBirthday(){
        return $this->birthday;
    }
}
