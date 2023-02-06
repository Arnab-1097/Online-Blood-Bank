<?php
session_start();
if(!isset($_SESSION['usersname']))
{
  header("location:index.php");
}
?>


<html>
<head>

	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


     <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css" >

	

	</head>

	<body class='bg-info'>
		


			<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2" style="margin-top: 5%;">
				<div class="row">
					<?php $searchkey=""; ?>
					<form action="" method="POST"> 
					<div class="col-md-6">
						<input type="text" name="search" class='form-control' placeholder="Search By BloodGroup(Must be Capital Letter)" value="<?php echo $searchkey;?>" > 
					</div>
					<div class="col-md-6 text-left py-3">
						<button class="btn btn-primary">Search</button>
					</div>
				</form>

				<br>
				<br>

					<?php

					$con =mysqli_connect('localhost','root');

					mysqli_select_db($con,'donor_list');

					if(isset($_POST['search']))
					{
						$searchkey = $_POST['search'];
						$showdata = "select * from donor WHERE blood_group LIKE '$searchkey';";
						$result=mysqli_query($con,$showdata); ?>
						<table class="table table-bordered">
					<tr>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Gender</th>
						<th>Email ID</th>
						<th>Mobile No</th>
						<th>Address</th>
						<th>BloodGroup</th>
						<th>Cancer/HIV</th>
					</tr>
					 <?php while($row = mysqli_fetch_assoc($result)) { ?>
						
						<tr>
						<td><?php echo $row['First_name'] ?> </td>
						<td><?php echo $row['Last_name'] ?> </td>
						<td><?php echo $row['gender'] ?> </td>
						<td><?php echo $row['Email_ID'] ?> </td>
						<td><?php echo $row['mobile_number'] ?> </td>
						<td><?php echo $row['Address'] ?> </td>
						<td><?php echo $row['blood_group'] ?> </td>
						<td><?php echo $row['Cancer_HIV'] ?> </td>
					</tr>
					<?php } ?>
					
				</table>

						
					<?php } ?>


					

					
				

					
				

				
				</div>
				
			</div>
		</div>
	</div>

	
	<a class="btn btn-warning butcust col-lg-2 col-md-2 col-12" href="home.php " role="button">Done!Return to Home</a>
	
</body>
</html>










		
		
		
	


