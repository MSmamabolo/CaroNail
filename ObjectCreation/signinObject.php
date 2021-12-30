<?php
  include '../classes/databaseconnection.php';
  include '../classes/ModelTalkToDB.PHP';
  include 'loginfunctions.php';
  include '../classes/signup.class.php';
  include '../classes/controlInsert.php';
  include '../classes/signinclass.php';

 if (!isset($_POST['submit']))
  {
   header("Location ../Frontpages/signin.php");
   exit();
 }
 else {
   $username = $_POST['username'];
   $password =  $_POST['password'];
   if (fieldEmptyLogin($username,$password )!==false)
   {
    header("Location: ../Frontpages/signin.php?error=EmptyInput");
    exit();

  }else
  {
   $Objectrefsign = new SignIn();
   $Objectrefsign -> setusername($username);
   $Objectrefsign->setpassword($password);
   $getusername = $Objectrefsign->getusername();
   $getpassword = $Objectrefsign->getpassword();
   $sendtoDb= new control();
   $sendtoDb -> logingIn($getusername ,$getpassword );
  header("Location../Frontpages/service.php&login=success");
  }
 }
