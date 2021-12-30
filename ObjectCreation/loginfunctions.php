<?php
function fieldEmptyLogin($username,$password )
{
  $result;
  if (empty($username)||empty($password))
   {

  $result = true;

  }
  else {
    $result = false;
  }
  return $result;
}
 ?>
