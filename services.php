<?php
session_start();
if(!isset($_SESSION['usersname']))
{
  header("location:index.php");
}
?>
 
<html>

   <head>
      <title>Donor Registration Form</title>

      <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

      <link rel="stylesheet" type="text/css" href="stylesheet.css" >
   </head>
    
   <body class="bg-info" >


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
       

        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

     <form class="text-center col-lg-12 col-md-12 col-12 py-5" action="insert.php" method="POST" >
         First name: <input type = "text" name = "fname" required/>
         <br>
         <br>
         Last name: <input type = "text" name = "lname" required/>
         <br>
         <br>
                 
          <input type="radio" value="Male" name="gender" >Male
          <input type="radio" value="Female" name="gender" >Female
          <input type="radio" value="Other" name="gender" >Other
         <br>
         <br>
         Email ID: <input type= "text" name = "email_id" required>
         <br>
         <br>
          Phone no:<input type = "text" name = "phone_number" required/>
           
          <br>
          <br>

           Address<input type = "text" name = "address" required/>
         
          <br>
          <br>
           <label>Select your blood group:</label>
    <select  name="blood_group">
  
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="0+">0+</option>
    <option value="0-">0-</option>
</select> 
    <br>
    <br>
    <label>Do you have cancer/HIV:</label>
     <input type="radio" value="Yes" name="cancer_hiv" >Yes
         <input type="radio" value="No" name="cancer_hiv" >No 
         
         <br>
         <br>

    <input type = "submit" name = "submit" class="btn btn-primary"  >

      </form>




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