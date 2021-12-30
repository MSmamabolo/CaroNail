x<?php

class SignIn
{
  private $email;
  private $username;
  private $password;


  public function setemail($email)
  {
    $this->email = $email;
  }

   public function getemail()
{
  return $this->email ;
}
public function setusername($username)
{
  $this->username = $username;
}
  public function getusername()
  {
  return $this->username ;;
  }
  public function setpassword($password)
  {
    $this->password= $password;
  }

 public function getpassword()
  {
    return $this->password;
  }
}
