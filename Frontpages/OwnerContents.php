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
     if (isset($_SESSION['ownerID']))
      {
         ?>
         <section>
           <nav>
             <ul>
             <li><a href="#"><img class="logo" src="../image/nailLogo.png" alt="caro-nail-salon"></a></li>
             <li><a href="#" >ServiceMenu</a></li>
             <li><a href="#">UpdateMenu</a></li>
          <!--   <li><a href="service.php">Services</a></li>-->
             </ul>
           </nav>
         </section>
         <section class="right" >
           <a href="#">Special</a>
           <a href="logout.php">Logout</a>
         </section>
        <?php
      }?>
</header>
<?php
if (isset($_SESSION['ownerID']))
{
  $OwnerName = $_SESSION['name'];
  ?>

  <div class="wrapper">
    <div class="backgroundBodyImage">
     <h1 class="centerH1">Welcom <?php echo $OwnerName ?> </h1> <br>
    </div>
  </div>
  <?php
}?>
<footer>
  <!--<section class="footer">-->
    <section class="section-footer">
      <article class="articleFindus">
        <h1>FIND ME</h1> <br>
        <p> South Africa <br>
            Limpopo <br>
            Polokwane <br>
            80 compensatie street<br>
            Polokwane,0700 <br>
        </p>
         <p></p>
      </article>
      <article class="contactdetails">
        <h1>CONTACT DETAILS</h1><br>
         <p>
            Cellphone: +27725261284<br><br>
            Cellphone: +27763359654<br><br>
            Email    : cyber.ms.mamabolo@gmail.com
        </p>
      </article>
      <article class="mediaAccess">
        <h1>FOLLOW ME ON</h1><br>
        <a href="#"> <img style="width:40px;height:40px; border-radius:60px;margin-left:0px;" src="../image/twitterCircle.png" alt="TwitterProfile"></a>
        <a href="#"> <img style="width:40px;height:40px; border-radius:60px;" src="../image/in.png" alt="linkedInProfile"></a>
        <a href="#"> <img style="width:40px;height:40px; border-radius:60px;" src="../image/facebooklogo2.jpg" alt="facebookProfile"></a>
      </article>
    </article>
    </section>
</footer>
  </body>
</html>
