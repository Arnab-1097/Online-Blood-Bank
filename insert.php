




<?php
session_start();

if(!isset($_SESSION['usersname']))
{
  header("location:index.php");
}


$con =mysqli_connect('localhost','root');





mysqli_select_db($con,'donor_list');
	






if($_POST['cancer_hiv']=="No")
{
$first=$_POST['fname'];



$last=$_POST['lname'];

$gender=$_POST['gender'];

$mail_id=$_POST['email_id'];

$phone=$_POST['phone_number'];


$address=$_POST['address'];

$blood_group=$_POST['blood_group'];

$med_issue=$_POST['cancer_hiv'];


$query = "insert into donor (First_name, Last_name, gender, Email_ID, mobile_number, Address, blood_group, Cancer_HIV) values ('$first','$last','$gender','$mail_id','$phone','$address',
'$blood_group','$med_issue')";






mysqli_query($con,$query);

$_SESSION['status']="Donor registration successful!";
$_SESSION['status_code']="success";

header("location:services.php");

}

else
{

	$_SESSION['status']="Donor registration Failure!Can't become a donor if you have HIV/Cancer!";
	$_SESSION['status_code']="error";
	header("location:services.php");
}
