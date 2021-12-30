
<?php
class databaseconnct
 {
   private  $hostname = "localhost";
   private  $user = "root";
   private  $pwd = "";
   private  $dbName = "carolinesalon";

   protected function connect()
   {
     //connecting to database using PDO;
     //INSIDE WE NEED TO SET SOMETHING CALLED A DSN WHICH STANDS FOR DATA SOURCE NAME
     //WHICH ACTUALLY DESCRIBE WHAT TYPE OF DATBASE WE'RE GOING TO BE using
     //WHAT SORT OF HOSTS WERE GOING TO BE USING
     //WHAT DATABASE NAME IS
     //mysql describe that we using mysql database type
     $dsn='mysql:host='.$this->hostname.';dbname='.$this->dbName ;

     //next create a new PDO connection
     $pdo=new PDO($dsn,$this->user,$this->pwd);
     //SOMETIMES WE WILL FETCH DATA INSIDE DATABASE WE NEED TO DECIDE HOW WE WANT TO PULL DATA FROM THE DATABASE
     //theres a little bit of a parameter that we need to insert inside our connection to the
     //database when we need to interact with it and pull out data
     //we can actullay set attribut for like how we want to pull out the data
     //so  we dont have to define it again and again and again throughtout our code
     //so we can set a optional attribute here
     $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);//SECOD PARAM DESCRIBE HOW WE WILL FETCH THE DATA SO HERE IN ASSOCIATED ARRAY TYPE
   //FETCH MODE DESCRIBE HOW TO FETCH THE DATA THE SECOND PARAM TELL IT HOW.
     return $pdo;//return variable because is not the property.
   }

 }
