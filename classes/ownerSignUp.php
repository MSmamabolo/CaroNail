<?php

class SignUp extends talktoDbOwner
{
  private $email;
  private $username;
  private $mobileNumber;
  private $password;
  private $comfirmPass;

  public function __construct($email,$username,$mobileNumber,$password,$comfirmPass)
  {
    $this->email = $email;
    $this->username = $username;
    $this->mobileNumber =$mobileNumber;
    $this->password = $password;
    $this->comfirmPass= $comfirmPass;
  }

 public function register()
 {
   if($this->isEmpty() == true)
   {
     header("Location: ../Frontpages/ownerSignIn.php?error=emptyvariable");
     exit();
   }
   elseif ($this->invalidEmail()==false)
   {
     header("Location: ../Frontpages/ownerSignIn.php?error=invalidEmail");
     exit();
   }elseif($this->invalidUsername() == 0)
   {
     header("Location: ../Frontpages/ownerSignIn.php?error=invalidUsername");
     exit();
   }elseif($this->passwordLength()== false)
   {
     header("Location: ../Frontpages/ownerSignIn.php?error=invalidpwdLength");
     exit();
   }
   elseif($this-> passwordMatch()== false)
   {
     header("Location: ../Frontpages/ownerSignIn.php?error=pwdNotMatch");
     exit();
   }elseif($this->usertaken()==true)
   {
     header("Location: ../Frontpages/sownerSignIn.php?error=usertaken");
     exit();
   }


   $this->usersignUp($this->email,$this->username,$this->mobileNumber,$this->password);
 }

//function for checking empty variable
private function isEmpty()
{
 $result = null;
 if (empty($this->email) || empty($this->username ) || empty($this->mobileNumber) || empty($this->password) || empty($this->comfirmPass))
  {
   $result = true;
 }else
 {
   $result = false;
 }
  return $result;
}

private function invalidEmail()
{
  $result = null ;
  if (filter_var($this->email, FILTER_VALIDATE_EMAIL))
   {
    $result = true;
  }else
  {
    $result = false;
  }
  return $result;
}
private function invalidUsername()
{
  $result = null;
   if(preg_match("/^[a-zA-Z0-9]*$/",$this->username))
   {
     $result = 1;
   }else
   {
     $result = 0;
   }
   return $result;
}

private function passwordLength()
{
  $passLength = strlen($this->password);
  $result;
  if ($passLength < 5)
  {
    $result = false;
  }else
  {
    $result = true;
  }
  return $result;
}

private function passwordMatch()
{
  $result;
  if ($this->password !== $this->comfirmPass)
  {
    $result = false;
  }else
  {
    $result = true;
  }
  return $result;
}
private function usertaken()
{
  $result;
  if ($this->userExist($this->username) == true)
   {
    $result = true;
  }else
  {
    $result = false;
  }
  return $result;
}
}
