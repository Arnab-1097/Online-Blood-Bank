<?php
session_start();

if(!isset($_SESSION['usersname']))
{
  header("location:index.php");
}
?>

<html>
<head>
	<title></title>
   <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   

    <!-- custom CSS -->
    <link rel="stylesheet" type="text/css" href="stylesheet.css" >


	
</head>

<body>

  <!-- nav bar creation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Online Blood Bank</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        

        <!--random trying -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="services.php">become a donor</a></li>
            <li><a class="dropdown-item" href="showdatatoui.php">find donor</a></li>
            
          </ul>
        </li>





        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
        
      </ul>
      <form class="d-flex">
        <!--<input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>-->
        <a href="logout.php" class="btn btn-danger"> Logout </a>
      </form>
    </div>
  </div>
</nav>

<!-- Carasol creation -->

<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images\img1.jpg"   class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\img2.png"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="images\img3.jpg"  class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12 ">
      <h1 class="text-center">Welcome <?php echo $_SESSION['usersname']; ?></h1>
    </div>
  </div>
</div>

<!-- about us -->

<section class="my-5">
  <div class="py-5" >
      <h2 class="text-center">About Us</h2>
  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 ">
        <img src="images\img4.png" class="img-fluid aboutimg" >

    </div>

     <div class="col-lg-6 col-md-6 col-12 ">
        <h2 class="display-4" >Why this website?</h2>
        <p class="pm py-3">This website is for those who wants to donate blood and who wants to receive blood.Your Blood can save someone's life.It is hard to find blood in time of need.This website will assist you to find your desired blood.Give blood and save blood of someone in need.Be a proud blood donor.</p>
        <a href="about.php" class="btn btn-danger"> Read more </a>

    </div>
  </div>
</div>
</section>

<!-- our services -->

<section>
  <div class="cst">
      <h1>Services</h1>
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-12 py-5">
        <div class="card" >
          <img class="card-img-top aboutimg" src="images\img5.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title"> Want to Donate Blood?</h4>
          <p class="card-text">click below to register</p>
          <a href="services.php" class="btn btn-primary">Register</a>
        </div>
        </div>
      </div>

      <div class="col-lg-6 col-md-6 col-12 py-5">
        <div class="card" >
          <img class="card-img-top aboutimg" src="images\img6.jpg" alt="Card image">
        <div class="card-body">
          <h4 class="card-title">Want Blood?</h4>
          <p class="card-text">Click below to find donor</p>
          <a href="showdatatoui.php" class="btn btn-primary">Find Donor</a>
        </div>
        </div>
      </div>
    </div>
  </div>
</section>



<footer>
  <h3 class="p-3 gg bg-dark text-white text-center">It's is a volunteer Community</h3>
</footer>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
