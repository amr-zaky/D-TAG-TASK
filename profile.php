<?php
include_once "navbar.php";
include_once "includes/dbh.inc.php";
?>
   
   <?php

      if(isset($_SESSION['u_id']))
      {
      	echo "<h1>Welcome ". $_SESSION['u_first'];
      }

      else 
      {
         header('Location:home.php?error=loginfirst');
      }

   ?>

   <section class="pr-form">

	   <form action="includes/logout.inc.php"  method="POST">
	   	<button class="btn btn-danger" name="submit" type="submit">Log Out</button>
	   </form>

   </section>

   

   
<?php
 include_once "footer.php";
?>
