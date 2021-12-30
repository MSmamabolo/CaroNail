<?php
 include 'header.php';
 ?>
<div class="wrapper">
  <div class="backgroundBodyImage">
   <h1 class="centerH1">PLEASE SIGN IN. </h1> <br>
   <div class="wrapper2">
     <form class="" action="../ObjectCreation/signinObject.php" method="POST">
       <input type="text" name="username" placeholder="Username"> <br> <br>
       <input type="password" name="password" placeholder="Password"><br> <br>
       <button type="submit" class ="btnreg" name="submit">Sign Up</button><br> <br>
     </form>
     <?php
       if (isset($_GET['error']))
       {
         if ($_GET['error'] =="EmptyInput")
         {
           echo '<p style ="color: #DB0808">please fill up all the form</p> <br>';
         }
       }

      ?>
     <p class="haveAccount">you dont have acoount?if yes please: <a style="color:#DB0808"class="haveAccount" href="signup.php">Click me</a></p> <br> <br>
   </div>
  </div>
</div>

<?php
include 'footer.php';
 ?>
