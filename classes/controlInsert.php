<?php

class control extends talktoDB
{
  public function registering($email,$username,$password)
  {
    $this->usersignUp($email,$username,$password);
  }
}
