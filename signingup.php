<?php
session_start();




header("location:index.php");

$connection=mysqli_connect('localhost','root');

mysqli_select_db($connection,'donor_list');


$name=$_POST['user'];
$pass=$_POST['password'];


$s="select * from usertable where userid = '$name'";

$res=mysqli_query($connection,$s);

$numbers=mysqli_num_rows($res);

if($numbers==1)
{

	$_SESSION['status']="registration failed! Credentials are already taken!";
	$_SESSION['status_code']="error";
  //header("location:signupfailure.php");
}

else
{
	$regi="insert into usertable (userid,password) values ('$name','$pass')";
	mysqli_query($connection,$regi);
	$_SESSION['status']="registration successful!";
	$_SESSION['status_code']="success";
	
}




