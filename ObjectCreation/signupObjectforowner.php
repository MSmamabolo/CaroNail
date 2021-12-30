<?php

 include '../classes/databaseconnection.php';
  include '../classes/ModelTalkToDB.PHP';
  include 'signupfunctions.php';
  include '../classes/signup.class.php';
  include '../classes/controlInsert.php';


 if (!isset($_POST['submit']))
  {
   header("Location: ../Frontpages/signup.php");
  }
  else {

    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $comfirmPassword = $_POST['passwordConfirm'];

         if (fieldEmpty($email ,$username,$password,$comfirmPassword )!==false)
         {
          header("Location: ../Frontpages/signup.php?error=EmptyInput");
          exit();
        }
       else if (invalidUsername($username)!==false)
         {
           header("Location: ../Frontpages/signup.php?error=invalidUsername");
           exit();
        }else if (invalidEmail($email)!==false)
        {
          header("Location: ../Frontpages/signup.php?error=invalidEmail");
          exit();
        }
        else if(passwordLength($password)!==false)
        {
           header("Location: ../Frontpages/signup.php?error=passwordLength");
           exit();
        }
        else if(notequalpassword($password,$comfirmPassword)!==false)
        {
             header("Location: ../Frontpages/signup.php?error=passwordNotEqual");
             exit();
        }

        else
         {
                    $signupObject = new SignUp();
                    $signupObject->setemail($email);
                    $signupObject->setusername($username);
                    $signupObject->setpassword($password);

                $saveemail= $signupObject->getemail();
                $saveusername=$signupObject ->getusername();
                $savepassword=$signupObject->getpassword();


               $sendToDb = new control();

              $sendToDb-> registeringforOwners($saveemail,$saveusername,$savepassword);
        }
  }
