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
     if (isset($_SESSION['clientID']))

      {
        $clientName = $_SESSION['name'];
         ?>
        <section>
          <nav>
            <ul>
            <li><a href="index.php"><img class="logo" src="../image/nailLogo.png" alt="caro-nail-salon"></a></li>
            <li><a href="index.php" style="color:red;">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="service.php">Services</a></li>
            </ul>
          </nav>
        </section>
        <section class="right" >
          <a href="#"><?php echo $clientName ?></a>
          <a href="logout.php">Logout</a>
        </section>
        <?php
      }else
       {?>
         <section>

           <nav>

             <ul>
             <li><a href="index.php"><img class="logo" src="../image/nailLogo.png" alt="caro-nail-salon"></a></li>
             <li><a href="index.php" style="color:red;">Home</a></li>
             <li><a href="about.php">About</a></li>
             <li><a href="service.php">Services</a></li>
             </ul>

           </nav>
         </section>
         <section class="right" >
           <a href="signup.php">Sign Up</a>
           <a href="signin.php">Sign In</a>
         </section>
      <?php
      }
   ?>

</header>
<div class="wrapper">
  <div class="backgroundBodyImage">
   <h1 class="centerH">WELCOME TO CARO NAILS SALON BEAUTY IS POWER</h1> <br>
   <h3 class="centerH">PLEASE CLICK SIGNUP FOR BOOKING FOR SERVICE.</h3>
  <!-- <img class="frontImage" src="../image/nailHand.png" alt="Caro-nail-salon">-->

  </div>
</div>

 <?php
  ?>
<?php
include 'footer.php';
 ?>
