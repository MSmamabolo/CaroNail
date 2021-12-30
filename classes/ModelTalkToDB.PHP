<?php
class talktoDB extends databaseconnct
{
   public function usersignUp($email,$username,$password)
   {
     $sql = "INSERT INTO client(email, username, password) VALUES(?,?,?)";
     $stmt = $this->connect()->prepare($sql);
     $hashedpass = password_hash($password,PASSWORD_DEFAULT);
     $stmt->execute([$email,$username,$password]);
   }
}
