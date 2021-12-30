<?php

  function fieldEmpty($email ,$username,$password,$comfirmPassword)
  {
    $result;
    if (empty($email)||empty($username)||empty($password)||empty($comfirmPassword ))
     {

    $result = true;

    }
    else {
      $result = false;
    }
    return $result;
  }

  function invalidUsername($username)
  {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/",$username))
    {
          $result = true;
    }
    else {
      $result = false;
    }
    return $result;
  }


  function invalidEmail($email)
  {
    $result;
    if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
          $result = true;
    }
    else {
      $result = false;
    }
    return $result;
  }
  function passwordLength($password)
  {
    $result;
    $length = strlen($password);
    if ($length < 4)
    {
       $result = true;
    }else
    {
        $result = false;
    }
    return $result;
  }
  function notequalpassword($password,$comfirmPassword)
  {
    $result;
    if ( $password!==$comfirmPassword)
    {
        $result = true;
    }
    else {
      $result = false;
    }
    return $result;
  }
