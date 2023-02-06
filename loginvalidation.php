<?php

session_start();







$connection=mysqli_connect('localhost','root');

mysqli_select_db($connection,'donor_list');


$name=$_POST['user'];
$pass=$_POST['password'];


$s="select * from usertable where userid = '$name' && password='$pass'";

$res=mysqli_query($connection,$s);

$numbers=mysqli_num_rows($res);

if($numbers==1)
{

	$_SESSION['usersname']=$name;

  header("location:home.php");
}

else
{
	$_SESSION['status']="Incorrect Id or password!";
	$_SESSION['status_code']="error";
	header("location:index.php");
}
