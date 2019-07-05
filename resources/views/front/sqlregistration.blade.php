<?php
$conn=mysqli_connect("localhost","root","","stock-exchange") or die("could not connect to database ");

if(isset($_POST['submit']))
{
	$name=$_POST['name'];
	$pass=$_POST['password'];
	$email=$_POST['email'];
	$mob=$_POST['mobile'];
	
	$insert="insert into `user` set name='".$name."',password='".$pass."',email='".$email."',mobile='".$mob."'";
	$res=mysqli_query($conn,$insert);
	if($res)
	{
		$msg="inserted";
	}
	else
		{
			$msg="not inserted";
		}
	
}

if(isset($_POST['login']))
{

	$pass=$_POST['password'];
	$email=$_POST['email'];
	
	$insert="select * from `user` where password='".$pass."' and email='".$email."'";
	$res=mysqli_query($conn,$insert);
	if($res)
	{
		$msg="found";
		header('location:register.blade.php');
	}
	else
		{
			$msg="not found";
			header('location:register.blade.php');
		}	
}

 ?>