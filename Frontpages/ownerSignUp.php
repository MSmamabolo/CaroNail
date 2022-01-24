<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <title>Caro</title>
      <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <link rel="stylesheet" href="../stylingCss/styling.css">
    <link rel="stylesheet" href="../stylingCss/otherstyle.css">
      <link rel="stylesheet" href="../stylingCss/footer.css">
    <style>
   input {
     text-align: center;
     color:#DB0808;
   }
   ::-webkit-input-placeholder {
     text-align: center;
   }
   :-moz-placeholder {
     text-align: center;
   }
 </style>
  </head>

  <body>
<header >
  <?php
     if (!isset($_SESSION['ownerID']))
      {
         ?>
         <section>
           <nav>
             <ul>
             <li><a href="index.php"><img class="logo" src="../image/nailLogo.png" alt="caro-nail-salon"></a></li>
             <li><a href="index.php" >Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="service.php">Services</a></li>
             </ul>

           </nav>
         </section>
         <section class="right" >
           <a href="#">Contact</a>
           <a href="signin.php">Sign In</a>
         </section>
        <?php
      }?>
</header>


<div class="wrapper">
  <div class="backgroundBodyImage">
   <h1 class="centerH1">PLEASE SIGN UP.</h1> <br>

   <div class="wrapper2">
     <form class="" action="../ObjectCreation/OwnerSignUpObject.php" method="POST">
       <input  type="text" name="email" style=" border: 2px solid brown;opacity: 0.6;"placeholder="Email"><br> <br>
       <input type="text" name="username" style=" border: 2px solid brown;opacity: 0.6;"placeholder="Username"> <br> <br>
       <input type="number" name="mobileNumber" style=" border: 2px solid brown;opacity: 0.6;" placeholder="cellphone Number"> <br> <br>
       <input type="password" name="password" style=" border: 2px solid brown;opacity: 0.6;" placeholder="Password"><br> <br>
       <input type="password" name="passwordConfirm"style=" border: 2px solid brown;opacity: 0.6;" style=" border: 1px solid black;opacity: 0.6;"placeholder="Comfirm Password"><br> <br>
       <button type="submit" class ="btnreg" style=" border: 2px solid brown;opacity: 0.6;"name="submit">Sign Up</button><br> <br>
       <?php
          if(isset($_GET['error']))
          {

            if ($_GET['error'] == "emptyvariable")
            {
              echo '<p style ="color: #DB0808 ;padding-left:33px;">please fill up all input box to continue</p> <br>';
            }elseif ($_GET['error'] == "invalidEmail")
            {
                echo '<p style ="color: #DB0808">please make sure that your email is in corrent format</p> <br>';
            }elseif ($_GET['error'] == "invalidUsername")
            {
                echo '<p style ="color: #DB0808">please make sure that your username includes alphabet and numbers only</p> <br>';
            }
            elseif ($_GET['error'] == "invalidpwdLength")
            {
                  echo '<p style ="color: #DB0808">please make sure that your password is more than 5 charector</p> <br>';
            }
            elseif ($_GET['error'] == "pwdNotMatch")
            {
                  echo '<p style ="color: #DB0808;padding-left:10px;">please make sure that your passwords match</p> <br>';
            }
            elseif ($_GET['error'] == "usertaken")
            {
                echo '<p style ="color: #DB0808">please try out another username , this one is already taken</p> <br>';
            }
          }
        ?>
     </form>
     <p class="haveAccount">Already have account? if yes please: <a style="color:#DB0808"class="haveAccount" href="ownerSignIn.php">Click me</a></p> <br>
   </div>
  </div>
</div>

<?php
include 'footer.php';
 ?>
