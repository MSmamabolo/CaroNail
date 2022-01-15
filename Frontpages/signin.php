<?php
 include 'header.php';
 ?>
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
     <form class="" action="../ObjectCreation/signinObject.php" method="POST">
       <input type="text" name="usernameOremail" placeholder="Username / email"> <br> <br>
       <input type="password" name="password" placeholder="Password"><br> <br>
       <button type="submit" class ="btnreg" name="submit">Sign In</button><br> <br>
     </form>
     <?php
       if (isset($_GET['login']))
       {
         if ($_GET['login'] =="emptyvariable")
         {
           echo '<p style ="color: #DB0808; padding-left:80px;">please fill up all the form</p> <br>';
         }elseif($_GET['login'] =="fail")
         {
            echo '<p style ="color: #DB0808; padding-left:80px;">Incorrect email or password</p> <br>';
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
