<?php


 if (!isset($_POST['submit']))
  {
   header("Location ../Frontpages/signin.php");
   exit();
 }
 else {
   include '../classes/databaseconnection.php';
   include '../classes/ModelTalkToDB.PHP';
   include '../classes/signinclass.php';

   $usernameOremail = $_POST['usernameOremail'];
   $password =  $_POST['password'];

   $Objectrefsign = new SignIn($usernameOremail,$password);
   $Objectrefsign  -> registerClient();

  }
