<?php

session_start();

if(isset($_POST['submit']))
{
  include_once "dbh.inc.php";

 $first=mysqli_real_escape_string($conn,$_POST['first']);
 $pwd  =mysqli_real_escape_string($conn,$_POST['pwd']);
             	  
  if(empty($first)||empty($pwd))
  {
     header("Location:../home.php?empty-field");
     exit(); 
  }
  else
  {

  	$sql="SELECT * FROM users WHERE user_uid='$first' OR user_email='$first';";
  	$res=mysqli_query($conn,$sql);
  	$check=mysqli_num_rows($res);	

  	if($check < 1)
  	{
  		header("Location:../home.php?invalid-userName");
        exit();
  	}
  	else
  	{
  		if($row=mysqli_fetch_assoc($res))
  		{
  			//dehashing
  			$dehashedpwd=password_verify($pwd,$row['user_pwd']);
  						 
  			if($dehashedpwd == false)
  			{
  				header("Location:../home.php?password-wrong");
  				exit();
  			}
  			elseif($dehashedpwd == true)
  			{
  				$_SESSION['u_id']=$row['user_id'];
	 				$_SESSION['u_first']=$row['user_first'];
	 				$_SESSION['u_last']=$row['user_last'];
	 				$_SESSION['u_email']=$row['user_email'];
	 				$_SESSION['u_uid']=$row['user_uid'];
  				header("Location:../profile.php?successed");
  				exit();
  			}
  		}
       
  	}
  }
}

else
{
  header("Location:../home.php?please-login");
  exit();
}