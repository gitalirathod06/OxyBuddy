
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
  
  <link rel="stylesheet"  type="text/css" href="css/service.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
  
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">OxyBuddy</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="Homepage.php">Home</a>
        </li>
        
         <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
         </li>
        

         <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
         </li>
    
         <li class="nav-item">
          <a class="nav-link" href="Login.php">Login</a>
         </li>

         <li class="nav-item">
          <a class="nav-link" href="SignUp.php">Sign Up</a>
         </li>

          <li class="nav-item ">
          <a class="nav-link" href="Admin.php">Admin</a>
         </li>
       
      </ul>
      
     </div>
   </div>
 </nav>

<?php include 'order.php'; ?>


 <form method="post">
     <div class="container">

       <h3 class="my-3">Welcom to OxyBuddy <?php  echo $_SESSION['Username']; ?> ... </h3>

       <hr>
       <h1 class="my-5"> Oxygen Requirement</h1>
       
       <p>fill below details as per your requirements.</p>
       <hr>

       <label><b> Hospital Name </b></label>
       <input type="text" placeholder="name of hospital " name="hname" autocomplete="off" class="form-control my-1" required>

       <label><b> Name of patient </b></label>
       <input type="text" placeholder="name of patient " name= "patient" autocomplete="off" class="form-control my-1" required>

       <label><b> No. of oxygen cylinder requirement </b></label>
       <input type="text" placeholder="No. of cylinder you required " name="cylinder" autocomplete="off" class="form-control my-1" required>

       <label><b>Date of Requirement</b></label>
       <input type="text" placeholder="yyyy-mm-dd" name="date" autocomplete="off" class="form-control my-1" required>

       <label><b>Delivery Address</b></label>
       <input type="text" placeholder="Enter address" name="address" autocomplete="off" class="form-control my-1"   required>


   
       <button type="order" class="registerbtn my-3 bg-dark" name="order" >Order</button>
     </div>

 

  </form>

</body>
</html>