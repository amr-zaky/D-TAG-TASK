<?php 

include_once "dbh.inc.php";

if(isset($_POST['submit']))
{


$first=mysqli_real_escape_string($conn,$_POST['first']);
$last=mysqli_real_escape_string($conn,$_POST['last']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$uid=mysqli_real_escape_string($conn,$_POST['uid']);
$pwd=mysqli_real_escape_string($conn,$_POST['pwd']);
   
   //check for empty field
	if(empty($first)||empty($last)||empty($email)||empty($uid)||empty($pwd))
	{
		header("Location: ../signup.php?empty-field");
		echo "empty field";
   		exit();
	}
	else
	{
		//check for valid user name 
		if(1==2)
		{
		header("Location: ../signup.php?invalid-user");
		echo "invalid user name ";
   		exit();
		}
		else
		{

			//check for valid email 
			if(! filter_var($email,FILTER_VALIDATE_EMAIL))
			{
				header("Location: ../signup.php?invalid-email");
				echo "invalid emai;";
   				exit();

			}
			else 
			{
				$sql=" SELECT * FROM users WHERE user_uid='$uid'";
				$res=mysqli_query($conn,$sql);
				$check=mysqli_num_rows($res);
				if($check > 0)
				{
				   
				   header("Location: ../signup.php?user-token");
   				   exit();
				}
				else
				{
					//hashing password
					$hashedpassword=password_hash($pwd,PASSWORD_DEFAULT);
					$sql="INSERT INTO 
					users(user_first,user_last,user_email,user_uid,user_pwd)
					VALUES('$first','$last','$email','$uid','$hashedpassword')
					;";
					mysqli_query($conn,$sql);
					header("Location: ../home.php?success");
					echo"<h1></h1>";
   					exit();
				}
			}
		}

	}

}






else
{
    header("Location: ../home.php?error");
    exit();
}

