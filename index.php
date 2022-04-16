<?php
session_start();
?>

<html>
<head>
	<title>Welcome!Please Sign Up or Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	

	<!-- own stylesheet -->
	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- gradient modifying -->

<style>
	body {
  		background-image: url('images/homeimg.jpg');
  		background-repeat: no-repeat;
		background-attachment: fixed;
  		background-size: cover;
	}

</style>

</head>
<body id="gradient">
	<h1 class="my-5">Signup or Login</h1>
	<input class="color1" type="color" name="color1" value="#FF0033">
	<input class="color2" type="color" name="color2" value="#A42828">
	<h2 class="my-5">Donate Blood Save a Life</h2>
	<h3></h3>


	<div class="container">
		<div class="login-box">
		<div class="row">
			<div class="col-md-12 py-5">
				<h2>Login Here</h2>
				<form action="loginvalidation.php" method="POST">
					<div class="form-group">
						<label class="py-3">UserName</label>
						<input type="text" name="user" class="form-control" required>
					</div>
						<div class="form-group">
						<label class="py-3">Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary my-5">Login</button>
				</form>
		</div>


		<div class="col-md-12 py-5">
				<h2>No account? Register Here</h2>
				<form action="signingup.php" method="POST">
					<div class="form-group">
						<label class="py-3">UserName</label>
						<input type="text" name="user" class="form-control" required>
					</div>
						<div class="form-group">
						<label class="py-3">Password</label>
						<input type="password" name="password" class="form-control" required>
					</div>
					<button type="submit" class="btn btn-primary my-5">Register</button>
				</form>
		</div>
	</div>
</div>
</div>


	


	<script type="text/javascript" src="script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

	<!-- js of sweet alert -->
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


	<?php
	if(isset($_SESSION['status']) && $_SESSION['status']!="")
	{
		?>
		<script>
			swal({
  			title: "<?php echo $_SESSION['status']; ?>",
  			//text: "You clicked the button!",
  			icon: "<?php echo $_SESSION['status_code']; ?>",
  			button: "Done!",
		});
		</script>
		<?php
		unset($_SESSION['status']);
	}
		?>
	
</body>
</html>