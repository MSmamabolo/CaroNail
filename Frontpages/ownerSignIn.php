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
           <a href="#" >Contact</a>
           <a href="signup.php">Sign Up</a>
         </section>
        <?php
      }?>

</header>
<div class="wrapper">
  <div class="backgroundBodyImage">
   <h1 class="centerH1">PLEASE SIGN IN. </h1> <br>
   <div class="wrapper2">
     <?php
        if (isset($_GET['signup']))
        {
          echo '<p style ="color: #DB0808;padding-left:26px;padding-top:8px;padding-bottom:8px"> you successfully signed up ,please login</p>';
        }
      ?>
     <form class="" action="../ObjectCreation/OwnerSignInObject.php" method="POST">
       <input type="text" name="usernameOremail" style=" border: 2px solid brown;opacity: 0.6;" placeholder="Username / email"> <br> <br>
       <input type="password" name="password" style=" border: 2px solid brown ;opacity: 0.6;" placeholder="Password"><br> <br>
       <button type="submit" class ="btnreg" style=" border: 2px solid brown;opacity: 0.6;" name="submit">Sign In</button><br> <br>
     </form>
     <?php
       if (isset($_GET['login']))
       {
         if ($_GET['login'] =="emptyvariable")
         {
           echo '<p style ="color: #DB0808; padding-left:80px;">please fill up all the form</p> <br>';
         }elseif($_GET['login'] =="fail")
         {
            echo '<p style ="color: #DB0808; padding-left:55px;">something went wrong ,try again</p> <br>';
         }
       }
      ?>
     <p class="haveAccount">you dont have acoount?if yes please: <a style="color:#DB0808"class="haveAccount" href="ownerSignUp.php">Click me</a></p> <br> <br>
   </div>
  </div>
</div>

<?php
include 'footer.php';
 ?>
