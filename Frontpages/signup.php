<?php
 include 'header.php';
 ?>
<div class="wrapper">
  <div class="backgroundBodyImage">
   <h1 class="centerH1">PLEASE SIGN UP.</h1> <br>

   <div class="wrapper2">
     <form class="" action="../ObjectCreation/signupObject.php" method="POST">
       <input  type="text" name="email" placeholder="Email"><br> <br>
       <input type="text" name="username" placeholder="Username"> <br> <br>
       <input type="password" name="password" placeholder="Password"><br> <br>
       <input type="password" name="passwordConfirm" placeholder="Comfirm Password"><br> <br>
       <button type="submit" class ="btnreg" name="submit">Sign Up</button><br> <br>
       <?php
          if(isset($_GET['error']))
          {

            if ($_GET['error']=="EmptyInput")
           {
              echo '<p style ="color: #DB0808">please fill up all input box to continue</p> <br>';
            }
            else if($_GET['error']=="invalidUsername")
            {
              echo '<p style ="color: #DB0808">please make sure that your username includes alphabet and numbers only</p> <br>';
            }
            else if($_GET['error']=="invalidEmail")
            {
              echo '<p style ="color: #DB0808">please make sure that your email is in corrent format</p> <br>';
            }
            else if($_GET['error']=="passwordLength")
            {
              echo '<p style ="color: #DB0808">please make sure that your password is more than 8 charector</p> <br>';
            }

            else if($_GET['error']=="passwordNotEqual")
            {
              echo '<p style ="color: #DB0808">please make sure that your passwords match</p> <br>';
            }

            else if($_GET['error']=="userExist")
            {
              echo '<p style ="color: #DB0808">please try out another username , this one is already taken</p> <br>';
            }

          }
        ?>

     </form>

     <p class="haveAccount">Already have account? if yes please: <a style="color:#DB0808"class="haveAccount" href="signin.php">Click me</a></p> <br>

   </div>
  </div>
</div>

<?php
include 'footer.php';
 ?>
