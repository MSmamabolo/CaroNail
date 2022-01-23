<?php
 if (!isset($_POST['submit']))
  {
   header("Location ../Frontpages/signin.php");
   exit();
 }
 else {
   include '../classes/databaseconnection.php';
   include '../classes/ModelTalkToDbOwner.php';
   include '../classes/ownerSignIn.php';

   $usernameOremail = $_POST['usernameOremail'];
   $password =  $_POST['password'];

   $Objectrefsign = new SignIn($usernameOremail,$password);
   $Objectrefsign  -> SignInOwner();

  }
