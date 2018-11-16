<?php 
 include_once "navbar.php";
 include_once "includes/dbh.inc.php";
 
 if(isset($_SESSION['u_id']))
 {
 	header('location:profile.php');
 }
 ?>


  <section class="login-form">
    <div class="cover">
      <h1>Log In</h1>

      <form  action="includes/homepage.inc.php" method="POST">
        
          <input type="text" name="first" placeholder="UserName/Email">
          <input type="password" name="pwd" placeholder="password">
          <button type="submit" name="submit" class="btn btn-primary">Log In</button>
      </form>
    </div>


  </section>



<?php 
include_once "footer.php"
?>