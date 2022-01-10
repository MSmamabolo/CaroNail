<?php
class talktoDB extends databaseconnct
{

   protected function userExist($username)
   {
     $sql = "SELECT *FROM client";
     $stmt = $this->connect()->query($sql);
      $result= null;

        if ($resultFromDb = $stmt->fetchAll())
         {
          foreach ($resultFromDb as $arrayforsearch)
           {
             $usernameExist = $arrayforsearch['username'];
           }
           if ($username ==  $usernameExist)
            {
              $result = true;
           }else
           {
             $result= false;
           }
         }

      return $result;

 }
    //function for clients sign up

   protected function usersignUp($email,$username,$cellphone,$password)
   {
     $sql = "INSERT INTO client(email,username,cellphone,password) VALUES(?,?,?,?)";
     $stmt = $this->connect()->prepare($sql);
     //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
     if ($stmt->execute(array($email,$username,$cellphone,$password)) == true)
     {
       header("Location: ../Frontpages/signin.php?signup=success");

     }
   }
   //function  for clients SignIn

   protected function signingIn($email,$password)
   {
     $sql = "SELECT * FROM client WHERE  email = ? AND password =?";
     $stmt=$this->connect()->prepare($sql);
     $stmt->execute(array($email,$password));
      $result = $stmt->fetchAll();
      if ($email == $result[0]['email'] && $password ==$result[0]['password'] )
       {
         session_start();
         $_SESSION['clientID'] =  $result[0]['uid'];
         $_SESSION['name'] =  $result[0]['username'];

         header("Location: ../Frontpages/service.php?login=success");
      }
      else
      {
             header("Location: ../Frontpages/signin.php?login=fail");
      }
   }
}
