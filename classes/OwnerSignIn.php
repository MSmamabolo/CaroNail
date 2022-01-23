<?php

class SignIn extends talktoDbOwner
{
  private $email;
  private $password;

    public function __construct($email,$password)
    {
      $this->email = $email;
      $this->password= $password;
    }

    public function SignInOwner()
    {
      if($this->isEmpty() == true)
      {
        header("Location: ../Frontpages/ownerSignIn.php?error=emptyvariable");
        exit();
      }
      $this->signingIn($this->email,$this->password);
    }

    private function isEmpty()
    {
     $result = null;
     if (empty($this->email) || empty($this->password))
      {
       $result = true;
     }else
     {
       $result = false;
     }
      return $result;
    }
}
