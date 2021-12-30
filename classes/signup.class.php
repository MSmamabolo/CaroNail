<?php

class SignUp
{
  private $email;
  private $username;
  private $password;

/*  function __contruct($email,$username,$password)
  {
    $this->email = $email;
    $this->username = $username;
    $this ->password = $password;
  }*/
  public function setemail($email)
  {
   $this->email = $email;
  }
  public function getemail()
  {
    return $this->email;
  }
   public function setusername($username)
  {
   $this->username = $username;
  }
  public function getusername()
  {
     return $this->username;
  }
  public  function setpassword($password)
  {
   $this->password = $password;
  }
  public function getpassword()
  {
    return  $this->password;
  }
}
