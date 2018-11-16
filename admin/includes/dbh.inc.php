<?php 

include_once 'database.inc.php';


if (isset($_POST['add'])) 
{
	
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$type=mysqli_real_escape_string($conn,$_POST['type']);
	$price=mysqli_real_escape_string($conn,$_POST['price']);
	$dep_id=mysqli_real_escape_string($conn,$_POST['dep_id']);

	if(!empty($name)&&!empty($type)&&!empty($price)&&!empty($dep_id))
	{

		$sql="INSERT INTO products(name,price,type,dep_id) VALUES 
		('$name','$price','$type','$dep_id')";
		mysqli_query($conn,$sql);
		echo "Added Successfully";
		exit();
	}

	else
	{
		echo "Enter Valied Data";
		exit();
	}
}



else if(isset($_GET['type']))
{
	$type=mysqli_real_escape_string($conn,$_GET['type']);
	$sql="SELECT * FROM department WHERE type='$type'";
	$res=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($res);
	$data=array();
	if($num>0)
	{
		while ($row=mysqli_fetch_assoc($res)) 
		{
			$data[]=$row;	
		}

		print_r(json_encode($data));
		
	}


}

else{


	/*$sql="SELECT * FROM department WHERE type='$type'";
	$res=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($res);
	$data=array();
	if($num >0)
	{
		while ($row=mysqli_fetch_assoc($res)) 
		{
			$data[]=$row;	
		}

		print_r(json_encode($data));
		
	}*/




	/*$sql="SELECT * FROM department";
	$res=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($res);
	$data=array();
	if($num >0)
	{
		while ($row=mysqli_fetch_assoc($res)) 
		{
			$data[]=$row;	
		}

		print_r(json_encode($data));
		
	}*/
}