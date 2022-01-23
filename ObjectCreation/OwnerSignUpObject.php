<?php
  include '../classes/databaseconnection.php';
  include '../classes/ModelTalkToDbOwner.php';
  include '../classes/ownerSignUp.php';

 if (!isset($_POST['submit']))
  {
   header("Location: ../Frontpages/signup.php");
  }
  else {

  $email = $_POST['email'];
  $username = $_POST['username'];
  $cellphone = $_POST['mobileNumber'];
  $password = $_POST['password'];
  $comfirmPassword = $_POST['passwordConfirm'];

    $signingUp = new SignUp($email,$username,$cellphone,$password,$comfirmPassword);
    $signingUp ->  register();
  }
