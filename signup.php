<?php 

 include_once "navbar.php";
 include_once "includes/dbh.inc.php";
?>


<?php
      if(isset($_SESSION['u_id']))
      {
         header('Location:profile.php'); 
      }

?>



   <section class="signup-form">

   	<div class="img">
   		<h1>Sign Up</h1>

   		<form action="includes/siginup.inc.php" method="POST">
    		<input type="text" name="first" placeholder="First Name">
    		
    		<input type="text" name="last" placeholder="last Name">
    		
    		<input type="email" name="email" placeholder="@yahoo.com">
    		
    		<input type="text" name="uid" placeholder="user Name">
    		
    		<input type="Password" name="pwd" placeholder="Password">
    		
    		<button type="submit" name="submit" class="btn btn-warning" >Sign Up</button>

        

    	</form>
   	</div>

    <div class="clr"></div>
   </section>

 <?php 
 include_once "footer.php"
 ?>


