<?php
class talktoDbOwner extends databaseconnct
{

   protected function userExist($username)
   {
     $sql = "SELECT *FROM salonowners";
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
     $sql = "INSERT INTO salonowners(email,username,phoneNumber,password) VALUES(?,?,?,?)";
     $stmt = $this->connect()->prepare($sql);
     //$hashed_password = password_hash($password, PASSWORD_DEFAULT);
     if ($stmt->execute(array($email,$username,$cellphone,$password)) == true)
     {
       header("Location: ../Frontpages/ownerSignIn.php?signup=success");
     }
   }
   //function  for clients SignIn

   protected function signingIn($email,$password)
   {
     $sql = "SELECT * FROM salonowners WHERE  email = ? AND password =?";
     $stmt=$this->connect()->prepare($sql);
     $stmt->execute(array($email,$password));
      $result = $stmt->fetchAll();
      if ($email == $result[0]['email'] && $password ==$result[0]['password'] )
       {
         session_start();
         $_SESSION['ownerID'] =  $result[0]['ownerID'];
         $_SESSION['name'] =  $result[0]['username'];

         header("Location: ../Frontpages/OwnerContents.php?login=success");
      }
      else
      {
             header("Location: ../Frontpages/ownerSignIn.php?login=fail");
      }
   }
}
