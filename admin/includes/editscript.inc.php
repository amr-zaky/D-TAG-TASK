<?php 

include_once 'database.inc.php';

if(isset($_POST['editdata']))
{
	$id=mysqli_real_escape_string($conn,$_POST['id']);
	$sql="SELECT products.id,products.type,products.price,products.dep_id, products.name ,department.name as dep_name FROM department INNER JOIN products ON products.dep_id=department.id WHERE products.id='$id'";
	$res=mysqli_query($conn,$sql);
	$num=mysqli_num_rows($res);
	$data=array();
	if($num<2)
	{
		while ($row=mysqli_fetch_assoc($res)) 
		{
			$data[]=$row;	
		}

		print_r(json_encode($data));
		
	}

	else 
	{
		print_r(json_encode("Meny rows"));
	}

}


elseif (isset($_POST['edit'])) 
{
	$id=mysqli_real_escape_string($conn,$_POST['id']);
	$name=mysqli_real_escape_string($conn,$_POST['name']);
	$type=mysqli_real_escape_string($conn,$_POST['type']);
	$price=mysqli_real_escape_string($conn,$_POST['price']);
	$dep_id=mysqli_real_escape_string($conn,$_POST['dep_id']);
	$sql="UPDATE products SET name='$name',type='$type',price='$price',dep_id='$dep_id' WHERE id='$id' ";
	mysqli_query($conn,$sql);
}


else if(isset($_POST['data']))
{	
	$dataarr=$_POST['data'];
	foreach ($dataarr as $id) 
	{
		mysqli_query($conn,"DELETE FROM products WHERE id='$id'");	
	}
	echo "Rows Deleted Suuccessfully";

}
else{

$sql="SELECT * FROM products";
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